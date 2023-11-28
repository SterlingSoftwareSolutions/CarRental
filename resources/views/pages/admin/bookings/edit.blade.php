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
            <div class="p-4 m-2 overflow-auto bg-white rounded">
                @if(session()->has('message'))
                    <div class="p-4 text-green-800 bg-green-100 rounded">
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
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="pickup" :value="__('Pickup Location')" />
                        <x-text-input id="pickup" class="block w-full mt-1" type="text" name="pickup" :value="old('pickup', isset($booking) ? $booking->pickup : '')" autofocus autocomplete="pickup" />
                        <x-input-error :messages="$errors->get('pickup')" class="mt-2" />
                    </div>

                    <!-- pickup time -->
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="pickup_time" :value="__('Pickup Time')" />
                        <x-text-input id="pickup_time" class="block w-full mt-1" type="datetime-local" name="pickup_time" :value="old('pickup_time', isset($booking) ? $booking->pickup_time : '')" autofocus autocomplete="pickup_time" />
                        <x-input-error :messages="$errors->get('pickup_time')" class="mt-2" />
                    </div>

                    <!-- dropoff -->
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="dropoff" :value="__('Dropoff Location')" />
                        <x-text-input id="dropoff" class="block w-full mt-1" type="text" name="dropoff" :value="old('dropoff', isset($booking) ? $booking->dropoff : '')" autofocus autocomplete="dropoff" />
                        <x-input-error :messages="$errors->get('dropoff')" class="mt-2" />
                    </div>

                    <!-- dropoff time -->
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="dropoff_time" :value="__('Dropoff Time')" />
                        <x-text-input id="dropoff_time" class="block w-full mt-1" type="datetime-local" name="dropoff_time" :value="old('dropoff_time', isset($booking) ? $booking->dropoff_time : '')" autofocus autocomplete="dropoff_time" />
                        <x-input-error :messages="$errors->get('dropoff_time')" class="mt-2" />
                    </div>

                    <!-- return time -->
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="returned_on" :value="__('Status')" />
                        <select name="status" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
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
                    
                    {{-- approval --}}
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="approval" :value="__('Approval')" />
                        <select name="approval" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="Pending" {{ $booking['approval'] === 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Approved" {{ $booking['approval'] === 'Approved' ? 'selected' : '' }}>Approved</option>
                        </select>
                        <x-input-error :messages="$errors->get('approval')" class="mt-2" />
                    </div>

                    
                    <!-- return time -->
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="returned_on" :value="__('Returned on')" />
                        <x-text-input id="returned_on" class="block w-full mt-1" type="date" name="returned_on" :value="old('returned_on', isset($booking) ? $booking->returned_on : '')" autofocus autocomplete="returned_on" />
                        <x-input-error :messages="$errors->get('returned_on')" class="mt-2" />
                    </div>

                    <div class="flex justify-end w-full">
                        <button class="px-4 py-2 m-2 text-white bg-indigo-500 rounded-lg">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>