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





        return view('pages.admin.bookings', ['bookings' => $bookings]);
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
    public function destroy(Bookings $bookings)
    {
        //
    }
}
