<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePaymentsRequest;
use App\Models\Bookings;
use App\Models\Country;
use App\Models\Payments;
use App\Models\Transaction;
use DateTime;
use Illuminate\Http\Request;
use Stripe\PaymentMethod;
use Stripe\Stripe;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
        $countries = Country::all();
        $bookingData = session('BookingData');

        $booking = Bookings::with(['user', 'vehicle'])->find($bookingData->id);

        $booking['pickup'] = $bookingData['pickup'];
        $booking['pickup_time'] = $bookingData['pickup_time'];
        $booking['dropoff_time'] = $bookingData['dropoff_time'];
        $booking['dropoff'] = $bookingData['dropoff'];
        $booking['bookingDaysCount'] = $bookingData['bookingDaysCount'];
        return view('pages.client.payment', ['bookingData' => $booking , 'countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        $bookingData = session('BookingData');
        $booking = Bookings::find($bookingData->id);

        $pickup_time = new DateTime($booking->pickup_time);
        $dropoff_time = new DateTime($booking->dropoff_time);
        $days = $dropoff_time->diff($pickup_time)->days;

        // Charge for 2 weeks if the vehicle is booked for more than 2 weeks
        if($days > 14){
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
        dd($user, $booking, $transaction);
    }

    /**
     * Display the specified resource.
     */
    public function show(Payments $payments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payments $payments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentsRequest $request, Payments $payments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payments $payments)
    {
        //
    }
}
