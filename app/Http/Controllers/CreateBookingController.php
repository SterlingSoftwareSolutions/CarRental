<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Country;
use App\Models\Transaction;
use DateTime;
use Illuminate\Http\Request;
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
        // TODO
        // if agreement is already signed, redirect to payment
        // handle generating pdf
        return view('pages.agreement', compact('booking'));
    }

    /**
     * Agree
     */
    public function agree(Bookings $booking, Request $request)
    {
        // TODO
        // Handle agreement

        dd($request->allFiles(), $request->all());

        // Check if the booking is for more than 2 weeks
        $days = $booking->pickup_time->diff($booking->dropoff_time)->days;

        if($days >= 14){
            return redirect()->route('bookings.pay', compact('booking'));
        }

        return redirect()->route('user.dashboard', compact('booking'));
    }

    /**
     * Show Payment Form 
     */
    public function payment_form(Bookings $booking)
    {
        $countries = Country::all();
        $pickup_time = new DateTime($booking->pickup_time);
        $dropoff_time = new DateTime($booking->dropoff_time);
        $days = $dropoff_time->diff($pickup_time)->days;

        if($days >= 14){
            $amount = $booking->vehicle->price * 14;
        }

        return view('pages.client.payment', [
            'bookingData' => $booking,
            'countries' => $countries,
            'days' => $days,
            'amount' => $amount ?? 0
        ]);
    }

    /**
     * Payment 
     */
    public function pay(Bookings $booking, Request $request)
    {
        $request->validate([
            "country" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "mobile" => "required",
            "email" => "required",
            "Address_1" => "required",
            "Address_2" => "required",
            "city" => "required",
            "zip" => "required",
            "driving_license" => "required",
            "driving_license_expire_year" => "required",
            "driving_license_expire_month" => "required",
            "driving_license_expire_date" => "required",
            "payment_method" => "required"
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $paymentMethodObject = PaymentMethod::retrieve($request->payment_method);

        $user = $request->user();
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethodObject);

        $user->update([
            "country" => $request->country,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "mobile" => $request->mobile,
            "email" => $request->email,
            "Address_1" => $request->Address_1,
            "Address_2" => $request->Address_2,
            "city" => $request->city,
            "zip" => $request->zip,
            "driving_license" => $request->driving_license,
            "driving_license_expire_year" => $request->driving_license_expire_year,
            "driving_license_expire_month" => $request->driving_license_expire_month,
            "driving_license_expire_date" => $request->driving_license_expire_date,
        ]);

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
