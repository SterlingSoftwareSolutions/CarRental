<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Country;
use App\Models\Transaction;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\PaymentMethod;
use Stripe\Stripe;

class CreateBookingController extends Controller
{
    /**
     * Create booking 
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'pickup' => 'required',
            'pickup_time' => 'required|before:dropoff_time',
            'dropoff_time' => 'required|after:pickup_time',
            'dropoff' => 'required'
        ]);

        $booking = Bookings::create([
            'pickup' => $request->pickup,
            'pickup_time' => $request->pickup_time,
            'dropoff_time' => $request->dropoff_time,
            'dropoff' => $request->dropoff,
            'vehicle_id' => $request->vehicle_id,
            'status' => "Unpaid",
            'approval' => "Pending",
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('bookings.agree', compact('booking'));
    }

    /**
     * Show Agreement Form
     */
    public function agreement_form(Bookings $booking)
    {
        // if agreement is already signed, redirect to payment
        if($booking->agreed){
            return redirect()->route('bookings.pay', compact('booking'));
        }

        return view('pages.agreement', compact('booking'));
    }

    /**
     * Agree
     */
    public function agree(Bookings $booking, Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'customer_address_line_1' => 'required',
            'customer_address_line_2' => 'required',
            'customer_dob' => 'required',
            'customer_license' => 'required',
            'customer_license_expiry_year' => 'required',
            'customer_license_expiry_month' => 'required',
            'customer_license_expiry_date' => 'required',
            'additional_driver_name' => 'nullable',
            'additional_driver_mobile' => 'nullable',
            'additional_driver_address_line_1' => 'nullable',
            'additional_driver_address_line_2' => 'nullable',
            'customer_signature' => 'required|image|max:2048',
            'customer_signature_name' => 'required',
            'customer_signature_date' => 'required',
            'driver_signature' => 'required|image|max:2048',
            'driver_signature_name' => 'required',
            'driver_signature_date' => 'required',
            'license_image_front' => 'required|image|max:4096',
            'license_image_back' => 'required|image|max:4096',
        ]);

        $names = explode(' ', $request->customer_name);

        Auth::user()->update([
            "first_name" => $names[0],
            "last_name" => end($names),
            "mobile" => $request->customer_phone,
            "email" => $request->customer_email,
            "Address_1" => $request->customer_address_line_1,
            "Address_2" => $request->customer_address_line_2,
            "driving_license" => $request->customer_license,
            "driving_license_expire_year" => $request->customer_license_expiry_year,
            "driving_license_expire_month" => $request->customer_license_expiry_month,
            "driving_license_expire_date" => $request->customer_license_expiry_date,
        ]);

        // Save files and store the paths
        $validated['customer_signature'] = $request->customer_signature->store('signatures');
        $validated['driver_signature'] = $request->driver_signature->store('signatures');
        $validated['license_image_front'] = $request->license_image_front->store('licenses');
        $validated['license_image_back'] = $request->license_image_back->store('licenses');
        $validated['agreed'] = true;

        $booking->update($validated);
        return redirect()->route('user.dashboard');
    }

    /**
     * Show Payment Form 
     */
    public function payment_form(Bookings $booking)
    {
        if($booking->status != "Unpaid"){
            return redirect()->route('user.dashboard')->with('error', 'Already paid');
        }

        // if agreement is not already signed, redirect to agreement
        if(!$booking->agreed){
            return redirect()->route('bookings.agree', compact('booking'));
        }

        $countries = Country::all();
        $pickup_time = new DateTime($booking->pickup_time);
        $dropoff_time = new DateTime($booking->dropoff_time);
        $days = $dropoff_time->diff($pickup_time)->days;
        $amount = 0;

        if($days >= 14){
            $amount = $booking->vehicle->price * 14;
        }

        return view('pages.client.payment', compact(
            'booking',
            'countries',
            'days',
            'amount'
        ));
    }

    /**
     * Payment 
     */
    public function pay(Bookings $booking, Request $request)
    {
        if($booking->status != "Unpaid"){
            return redirect()->route('user.dashboard')->with('error', 'Already paid');
        }

        // if agreement is not already completed, redirect to agreement
        if(!$booking->agreed){
            return redirect()->route('bookings.agree', compact('booking'));
        }

        // cannot pay before approval
        if($booking->approval != 'Approved'){
            return redirect()->intended('/user/dashboard');
        }

        $request->validate([
            "payment_method" => "required"
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $paymentMethodObject = PaymentMethod::retrieve($request->payment_method);

        $user = $request->user();
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethodObject);

        $pickup_time = new DateTime($booking->pickup_time);
        $dropoff_time = new DateTime($booking->dropoff_time);
        $days = $dropoff_time->diff($pickup_time)->days;

        // Charge for 2 weeks if the vehicle is booked for more than 2 weeks
        if($days >= 14){
            $amount = $booking->vehicle->price * 14;
            $charge = $user->charge(
                $amount * 100,
                $request->payment_method
            );
            if($charge){
                $booking->update([
                    'status' => 'booked'
                ]);
                $transaction = Transaction::create([
                    'booking_id' => $booking->id,
                    'amount' => $amount,
                    'stripe_payment_id' => $charge->id
                ]);
            } else {
                return back()->withErrors(['payment' => 'Payment failed']);
            }
        }

        return redirect()->route('user.dashboard');
    }
}
