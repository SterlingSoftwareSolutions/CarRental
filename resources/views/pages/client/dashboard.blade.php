@php
$user = Auth::user();
@endphp

@extends('layouts.main')
@section('content')
<div class="p-4 max-w-[1366px] mx-auto">  
    <h1 class="text-2xl text-[#307449] mt-7">Hi, {{$user->first_name}} {{$user->last_name}}!</h1>
    <!-- BOOKING HISTORY -->
    <h1 class="font-semibold text-lg text-[#707070] mt-4">Your Booking History</h1>
    <div class="w-full min-h-[200px] overflow-auto flex flex-col justify-center items-center border">            
        @if(count($user->bookings) > 0)
            <x-bookings :bookings="$user->bookings"/>
        @else
                <p class="px-6 py-4 text-gray-500 whitespace-nowrap">No bookings found.</p>
                <a href="{{ route('carlist')}}" class="p-2 bg-[#307449] rounded text-white">Book Now</a>
        @endif
    </div>

    <!-- INVOICES -->
    <h1 class="font-semibold text-lg text-[#707070] mt-4">Your Invoices</h1>
    <div class="w-full min-h-[200px] overflow-auto flex flex-col justify-center items-center border">            
        <x-invoices :invoices="$user->invoices"/>
    </div>
</div>

@endsection