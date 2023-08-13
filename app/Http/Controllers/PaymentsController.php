<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentsRequest;
use App\Http\Requests\UpdatePaymentsRequest;
use App\Models\Bookings;
use App\Models\Payments;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {
        $bookingData = session('BookingData');

        $booking = Bookings::with(['user', 'vehicle'])->find($bookingData->id);

        $booking['pickup'] = $bookingData['pickup'];
        $booking['pickup_time'] = $bookingData['pickup_time'];
        $booking['dropoff_time'] = $bookingData['dropoff_time'];
        $booking['dropoff'] = $bookingData['dropoff'];
        $booking['bookingDaysCount'] = $bookingData['bookingDaysCount'];
        return view('pages.payment', ['bookingData' => $booking]);
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
    public function store(StorePaymentsRequest $request)
    {
        //
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
