<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Stripe\Refund;
use Stripe\Stripe;
use App\Models\Invoice;
use App\Models\Bookings;
use App\Models\Surcharge;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateBookingsRequest;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $query = Bookings::query();
            $bookings = $query->with(['user', 'vehicle'])->get();

            foreach ($bookings as $key => $booking) {
                $pickupTime = Carbon::parse($booking['pickup_time']);
                $dropoffTime = Carbon::parse($booking['dropoff_time']);
                // Calculate the difference in days
                $daysCount = $dropoffTime->diffInDays($pickupTime);
                $booking['bookingDaysCount'] = $daysCount;
            }
    
            return view('pages.admin.bookings.index', ['bookings' => $bookings]);
        
    }

    public function searchs(Request $request)
    {
        $query = Bookings::query();

        if($request->search){
            $term = $request->search;
            $query->where('pickup', 'like', '%' . $term . '%')
                ->orWhere('dropoff', 'like', '%' . $term . '%')
                ->orWhere('pickup_time', 'like', '%' . $term . '%')
                ->orWhere('status', 'like', '%' . $term . '%');
        }
        return view('pages.admin.bookings.index', ['bookings' => $query->get()]);
    }

    public function singlecar($id)
    {
        $query = Bookings::query();
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
        $Booking = Bookings::create([
            'pickup' => $request->pickup,
            'pickup_time' => $request->pickup_time,
            'dropoff_time' => $request->dropoff_time,
            'dropoff' => $request->dropoff,
            'vehicle_id' => $request->vehicle_id,
            'approval' => "Pending",
            'user_id' => auth()->id(),

        ]);

        // You can add additional logic or redirect here

        return redirect()->route('home')->with('success', 'Vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookings $booking)
    {
        return view('pages.admin.bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_booking(Bookings $booking)
    {
        return view('pages.admin.bookings.edit', compact('booking'));
    }

    public function edit(Bookings $booking)
    {
        return view('pages.admin.bookings.edit', compact('booking'));
    }

    public function review_booking(Bookings $booking){
        return view('pages.admin.bookings.review', compact('booking'));
    }    

    public function approve_booking(Bookings $booking,  Request $request){

        if($request->has('reject')){
            $booking->update([
                "approval" => 'Rejected',
            ]);
            return redirect()->route('bookings.all');
        }

        $request->validate([
            'admin_signature' => 'required|file',
        ], [
            'admin_signature.required' => 'The Admin Signature field is required.',
        ]);

        $booking->update([
            'admin_signature' => $request->hasFile('admin_signature') ? $request->admin_signature->store('signatures') : null
        ]);

        $booking->update(['approval' => 'Approved']);

        // Redirect back to the admin dashboard or wherever appropriate
        return redirect()->route('bookings.all');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingsRequest $request, Bookings $booking)
    {
        $request->validate([
            "status" => 'required',
            "approval" => 'required',
            "pickup" => 'required',
            "pickup_time" => 'required',
            "pickup_mileage" => 'nullable',
            "pickup_fuel_level" => 'nullable',
            "dropoff" => 'required',
            "dropoff_time" => 'required',
            "dropoff_mileage" => 'nullable',
            "dropoff_fuel_level" => 'nullable',
            "return" => 'nullable',
            "return_time" => 'nullable',
            "return_mileage" => 'nullable',
            "return_fuel_level" => 'nullable',
            "customer_name" => 'nullable',
            "customer_phone" => 'nullable',
            "customer_email" => 'nullable',
            "customer_dob" => 'nullable',
            "customer_address_line_1" => 'nullable',
            "customer_address_line_2" => 'nullable',
            "customer_license" => 'nullable',
            "customer_license_expiry_year" => 'nullable',
            "customer_license_expiry_month" => 'nullable',
            "customer_license_expiry_date" => 'nullable',
            "additional_driver_name" => 'nullable',
            "additional_driver_mobile" => 'nullable',
            "additional_driver_address_line_1" => 'nullable',
            "additional_driver_address_line_2" => 'nullable',
            "body_damage_left" => 'nullable',
            "body_damage_right" => 'nullable',
            "body_damage_front" => 'nullable',
            "body_damage_back" => 'nullable',
            "allowed_vehicle_mileage" => 'nullable',
            "rate" => 'nullable',
            "insurance_premium" => 'nullable',
            "rental" => 'nullable',
            "extra_mileage" => 'nullable',
            "damage_liablity_reduction" => 'nullable',
            "card_fee" => 'nullable',
            "others" => 'nullable',
            "reverse_camera" => 'nullable',
            "cargo_barrier" => 'nullable',
            "fuel_cap" => 'nullable',
            "rim_cups" => 'nullable'
        ]);

        $booking->update([
            "status" => $request->status ?? null,
            "approval" => $request->approval ?? null,
            "pickup" => $request->pickup ?? null,
            "pickup_time" => $request->pickup_time ?? null,
            "pickup_mileage" => $request->pickup_mileage ?? null,
            "pickup_fuel_level" => $request->pickup_fuel_level ?? null,
            "dropoff" => $request->dropoff ?? null,
            "dropoff_time" => $request->dropoff_time ?? null,
            "dropoff_mileage" => $request->dropoff_mileage ?? null,
            "dropoff_fuel_level" => $request->dropoff_fuel_level ?? null,
            "return" => $request->return ?? null,
            "return_time" => $request->return_time ?? null,
            "return_mileage" => $request->return_mileage ?? null,
            "return_fuel_level" => $request->return_fuel_level ?? null,
            "customer_name" => $request->customer_name ?? null,
            "customer_phone" => $request->customer_phone ?? null,
            "customer_email" => $request->customer_email ?? null,
            "customer_dob" => $request->customer_dob ?? null,
            "customer_address_line_1" => $request->customer_address_line_1 ?? null,
            "customer_address_line_2" => $request->customer_address_line_2 ?? null,
            "customer_license" => $request->customer_license ?? null,
            "customer_license_expiry_year" => $request->customer_license_expiry_year ?? null,
            "customer_license_expiry_month" => $request->customer_license_expiry_month ?? null,
            "customer_license_expiry_date" => $request->customer_license_expiry_date ?? null,
            "additional_driver_name" => $request->additional_driver_name ?? null,
            "additional_driver_mobile" => $request->additional_driver_mobile ?? null,
            "additional_driver_address_line_1" => $request->additional_driver_address_line_1 ?? null,
            "additional_driver_address_line_2" => $request->additional_driver_address_line_2 ?? null,
            "body_damage_left" => $request->body_damage_left ?? null,
            "body_damage_right" => $request->body_damage_right ?? null,
            "body_damage_front" => $request->body_damage_front ?? null,
            "body_damage_back" => $request->body_damage_back ?? null,
            "allowed_vehicle_mileage" => $request->allowed_vehicle_mileage ?? null,
            "rate" => $request->rate ?? null,
            "insurance_premium" => $request->insurance_premium ?? null,
            "rental" => $request->rental ?? null,
            "extra_mileage" => $request->extra_mileage ?? null,
            "damage_liablity_reduction" => $request->damage_liablity_reduction ?? null,
            "card_fee" => $request->card_fee ?? null,
            "others" => $request->others ?? null,
            "reverse_camera" => $request->reverse_camera ?? false,
            "cargo_barrier" => $request->cargo_barrier ?? false,
            "fuel_cap" => $request->fuel_cap ?? false,
            "rim_cups" => $request->rim_cups ?? false
        ]);
        dd($booking);
        return back()->with('message', 'Booking updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($booking_id)
    {
        $booking = Bookings::find($booking_id);

        if (!$booking) {
            dd($booking);
            return redirect()->route('vehicles.all')
                ->with('error', 'vehicle not found.');
        }

        $booking->delete();

        return redirect()->route('vehicles.all')
            ->with('success', 'vehicle deleted successfully.');
    }

    public function return(Bookings $booking, Request $request)
    {
        $pickup_time = Carbon::parse($booking->pickup_time)->startOfDay();
        $dropoff_time = Carbon::parse($booking->dropoff_time)->startOfDay();
        $returned_on = Carbon::parse($request->returned_on)->startOfDay();
        $actual_duration = $pickup_time->diffInDays($returned_on);
        $actual_amount = $actual_duration * $booking->vehicle->price;
        $paid_amount = $booking->transactions->sum('amount');
        $due_amount = $actual_amount - $paid_amount;
        $case = $returned_on->isSameDay($dropoff_time) ? 'ontime' : ($returned_on->isBefore($dropoff_time) ? 'early' : 'late');

        return view('pages.admin.bookings.return', compact(
            'booking',
            'pickup_time',
            'dropoff_time',
            'returned_on',
            'actual_duration',
            'actual_amount',
            'paid_amount',
            'due_amount',
            'case',
        ));
    }

    public function return_confirm(Bookings $booking, Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        if ($request->action == 'refund') {
            $refund = Refund::create([
                'payment_intent' => $booking->transactions[0]->stripe_payment_id,
                'amount' => $request->amount * 100,
            ]);
        } else if ($request->action == 'charge') {
            $invoice = Invoice::create([
                'booking_id' => $booking->id,
                'amount' => $request->amount,
                'reason' => 'rental_payment'
            ]);
            // Notify user
        }

        $booking->update([
            'status' => 'returned',
            'returned_on' => $request->returned_on
        ]);

        return redirect()->route('bookings.all');
    }

    public function add_surcharge(Bookings $booking, Request $request)
    {
        $request->validate([
            'type' => 'required|in:toll,fine',
            'date' => 'required',
            'amount' => 'required|min:0',
            'note' => 'nullable',
        ]);

        $surcharge = Surcharge::create([
            'booking_id' => $booking->id,
            'type' => $request->type,
            'date' => $request->date,
            'amount' => $request->amount,
            'note' => $request->note,
            'paid' => false,
        ]);

        return redirect()->route('bookings.show', $booking);
    }
}
