@php
    $statuses = [
        'booked',
        'unpaid',
        'paid',
        'returned'
    ];
@endphp

<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">
        <div class="mt-7">
            <!-- booking List  -->
            <h1 class="p-2 font-semibold text-lg text-[#707070]">Booking</h1>
            <div class="m-2 p-4 overflow-auto bg-white rounded">
                @if(session()->has('message'))
                    <div class="bg-green-100 p-4 rounded text-green-800">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="flex">
                    <div class="w-1/2 p-2">User: {{$booking->user->first_name}} {{$booking->user->last_name}}</div>
                    <div class="w-1/2 p-2">Vehicle: {{$booking->vehicle->make}} {{$booking->vehicle->model}} {{$booking->vehicle->vin}}</div>
                </div>
                <form action="/admin/bookings/{{$booking->id}}" method="post" class="flex flex-wrap">
                    @method('put')
                    @csrf
                    <!-- pickup -->
                    <div class="md:w-1/2 p-2">
                        <x-input-label for="pickup" :value="__('Pickup Location')" />
                        <x-text-input id="pickup" class="block mt-1 w-full" type="text" name="pickup" :value="old('pickup', isset($booking) ? $booking->pickup : '')" autofocus autocomplete="pickup" />
                        <x-input-error :messages="$errors->get('pickup')" class="mt-2" />
                    </div>

                    <!-- pickup time -->
                    <div class="md:w-1/2 p-2">
                        <x-input-label for="pickup_time" :value="__('Pickup Time')" />
                        <x-text-input id="pickup_time" class="block mt-1 w-full" type="datetime-local" name="pickup_time" :value="old('pickup_time', isset($booking) ? $booking->pickup_time : '')" autofocus autocomplete="pickup_time" />
                        <x-input-error :messages="$errors->get('pickup_time')" class="mt-2" />
                    </div>

                    <!-- dropoff -->
                    <div class="md:w-1/2 p-2">
                        <x-input-label for="dropoff" :value="__('Dropoff Location')" />
                        <x-text-input id="dropoff" class="block mt-1 w-full" type="text" name="dropoff" :value="old('dropoff', isset($booking) ? $booking->dropoff : '')" autofocus autocomplete="dropoff" />
                        <x-input-error :messages="$errors->get('dropoff')" class="mt-2" />
                    </div>

                    <!-- dropoff time -->
                    <div class="md:w-1/2 p-2">
                        <x-input-label for="dropoff_time" :value="__('Dropoff Time')" />
                        <x-text-input id="dropoff_time" class="block mt-1 w-full" type="datetime-local" name="dropoff_time" :value="old('dropoff_time', isset($booking) ? $booking->dropoff_time : '')" autofocus autocomplete="dropoff_time" />
                        <x-input-error :messages="$errors->get('dropoff_time')" class="mt-2" />
                    </div>

                    <!-- return time -->
                    <div class="md:w-1/2 p-2">
                        <x-input-label for="returned_on" :value="__('Status')" />
                        <select name="status" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">Unknown</option>
                            @if(!in_array($booking->status, $statuses))
                            <option value="{{$booking->status}}" selected>{{ucfirst($booking->status)}}</option>
                            @endif
                            @foreach($statuses as $status)
                            <option value="{{$status}}" @if($booking->status == $status) selected @endif>{{ucfirst($status)}}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                    </div>

                    <!-- return time -->
                    <div class="md:w-1/2 p-2">
                        <x-input-label for="returned_on" :value="__('Returned on')" />
                        <x-text-input id="returned_on" class="block mt-1 w-full" type="date" name="returned_on" :value="old('returned_on', isset($booking) ? $booking->returned_on : '')" autofocus autocomplete="returned_on" />
                        <x-input-error :messages="$errors->get('returned_on')" class="mt-2" />
                    </div>

                    <div class="w-full flex justify-end">
                        <button class="m-2 px-4 py-2 rounded-lg text-white bg-indigo-500">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>