@php
$user = Auth::user();
@endphp

@extends('layouts.main')
@section('content')
<div class="max-w-[1366px] mx-auto">  
    <h1 class="px-4 text-2xl text-[#307449] mt-7">Hi, {{$user->first_name}} {{$user->last_name}}!</h1>
    <!-- BOOKING HISTORY -->
    <h1 class="p-4 font-semibold text-lg text-[#707070] mt-4">Your Booking History</h1>
    <div class="overflow-auto ">
        @if(count($user->bookings) > 0)
            <x-bookings :bookings="$user->bookings"/>
        @else
            <p class="p-4 font-semibold text-[#707070]">No bookings found.</p>
            <a href="{{ route('carlist')}}" class="p-1 bg-[#307449] rounded md:ml-4 text-white">Book Now</a>

        @endif
    </div>

    <!-- INVOICES -->
    <h1 class="p-4 font-semibold text-lg text-[#707070] mt-4">Your Invoices</h1>
    <div class="overflow-auto">
        <x-invoices :invoices="$user->invoices"/>
    </div>
</div>

@endsection