<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingsRequest;
use App\Http\Requests\UpdateBookingsRequest;
use App\Models\Bookings;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function book(Request $request)
    {
        $request->validate([
            'pickup' => 'required',
            'pickup_time' => 'required',
            'dropoff_time' => 'required',
            'dropoff' => 'required'
        ]);

        $Booking = Bookings::create([
            'pickup' => $request->pickup,
            'pickup_time' => $request->pickup_time,
            'dropoff_time' => $request->dropoff_time,
            'dropoff' => $request->dropoff,
            'vehicle_id' => $request->vehicle_id,
            'status' => "Unpaid",
            'user_id' => auth()->id(),

        ]);


        
            $pickupTime = Carbon::parse($Booking['pickup_time']);
            $dropoffTime = Carbon::parse($Booking['dropoff_time']);
            // Calculate the difference in days
            $daysCount = $dropoffTime->diffInDays($pickupTime);
            $Booking['bookingDaysCount'] = $daysCount;
        
        session(['BookingData' => $Booking]);
       
        return redirect()->route('payment')->with('success', 'Vehicle booked successfully.');
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
            'user_id' => auth()->id(),

        ]);

        // You can add additional logic or redirect here

        return redirect()->route('home')->with('success', 'Vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookings $bookings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookings $bookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingsRequest $request, Bookings $bookings)
    {
        //
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
        $booking->update([
            'status' => 'returned',
            'returned_on' => $request->returned_on
        ]);
        return redirect()->back();
    }
}
