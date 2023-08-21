@php
$user = Auth::user();
@endphp

@extends('layouts.main')
@section('content')
    <!-- BOOKING HISTORY -->
    <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Booking History</h1>
    <div class="overflow-auto">
        <x-bookings :bookings="$user->bookings"/>
    </div>
@endsection