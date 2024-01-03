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
        <div>
            <!-- booking List  -->
            <h1 class="p-2 font-semibold text-lg text-[#707070]">Booking Details</h1>
            <div class="p-4 m-2 overflow-auto bg-white rounded">
                @if(session()->has('message'))
                    <div class="p-4 text-green-800 bg-green-100 rounded">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="flex">
                    <div class="w-1/2 p-2"><b>User:</b> {{$booking->user->first_name}} {{$booking->user->last_name}}</div>
                    <div class="w-1/2 p-2"><b>Vehicle:</b> {{$booking->vehicle->make}} {{$booking->vehicle->model}} {{$booking->vehicle->vin}}</div>
                </div>
                <form action="/admin/bookings/{{$booking->id}}" method="post" class="flex flex-wrap">
                    @method('put')
                    @csrf

                    <h1 class="w-full p-2 text-xl mt-4">Booking Info</h1>
                    <hr class="w-full m-2">
                        
                    <!-- status -->
                    <div class="p-2 md:w-1/2">
                        <x-input-label :value="__('Status')" />
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

                    <!-- return -->
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="return" :value="__('Return Location')" />
                        <x-text-input id="return" class="block w-full mt-1" type="text" name="return" :value="old('return', isset($booking) ? $booking->return : '')" autofocus autocomplete="return" />
                        <x-input-error :messages="$errors->get('return')" class="mt-2" />
                    </div>

                    <!-- return time -->
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="dropoff_time" :value="__('Return Time')" />
                        <x-text-input id="dropoff_time" class="block w-full mt-1" type="datetime-local" name="dropoff_time" :value="old('dropoff_time', isset($booking) ? $booking->dropoff_time : '')" autofocus autocomplete="dropoff_time" />
                        <x-input-error :messages="$errors->get('dropoff_time')" class="mt-2" />
                    </div>

                    <h1 class="w-full p-2 text-xl mt-4">Customer Details</h1>
                    <hr class="w-full m-2">

                    {{-- Customer Name --}}
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="customer_name" :value="__('Customer Name')" />
                        <x-text-input id="customer_name" class="block w-full mt-1" type="text" name="customer_name" :value="old('customer_name', isset($booking) ? $booking->customer_name : '')" autofocus autocomplete="customer_name" />
                        <x-input-error :messages="$errors->get('customer_name')" class="mt-2" />
                    </div>

                    {{-- Customer Phone --}}
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="customer_phone" :value="__('Customer Phone')" />
                        <x-text-input id="customer_phone" class="block w-full mt-1" type="text" name="customer_phone" :value="old('customer_phone', isset($booking) ? $booking->customer_phone : '')" autofocus autocomplete="customer_phone" />
                        <x-input-error :messages="$errors->get('customer_phone')" class="mt-2" />
                    </div>

                    {{-- Customer Email --}}
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="customer_email" :value="__('Customer Email')" />
                        <x-text-input id="customer_email" class="block w-full mt-1" type="text" name="customer_email" :value="old('customer_email', isset($booking) ? $booking->customer_email : '')" autofocus autocomplete="customer_email" />
                        <x-input-error :messages="$errors->get('customer_email')" class="mt-2" />
                    </div>

                    {{-- Customer DOB --}}
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="customer_dob" :value="__('Customer Date of Birth')" />
                        <x-text-input id="customer_dob" class="block w-full mt-1" type="text" name="customer_dob" :value="old('customer_dob', isset($booking) ? $booking->customer_dob : '')" autofocus autocomplete="customer_dob" />
                        <x-input-error :messages="$errors->get('customer_dob')" class="mt-2" />
                    </div>

                    {{-- Customer Address --}}
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="customer_address_line_1" :value="__('Customer Address')" />
                        <x-text-input id="customer_address_line_1" class="block w-full mt-1" type="text" name="customer_address_line_1" :value="old('customer_address_line_1', isset($booking) ? $booking->customer_address_line_1 : '')" autofocus autocomplete="customer_address_line_1" />
                        <x-input-error :messages="$errors->get('customer_address_line_1')" class="mt-2" />
                    </div>

                    <div class="p-2 md:w-1/2">
                        <x-input-label for="customer_address_line_2" :value="' '" />
                        <x-text-input id="customer_address_line_2" class="block w-full mt-1" type="text" name="customer_address_line_2" :value="old('customer_address_line_2', isset($booking) ? $booking->customer_address_line_2 : '')" autofocus autocomplete="customer_address_line_2" />
                        <x-input-error :messages="$errors->get('customer_address_line_2')" class="mt-2" />
                    </div>

                    {{-- Customer License --}}
                    <div class="p-2 md:w-full">
                        <x-input-label for="customer_license" :value="__('Customer License')" />
                        <x-text-input id="customer_license" class="block w-full mt-1" type="text" name="customer_license" :value="old('customer_license', isset($booking) ? $booking->customer_license : '')" autofocus autocomplete="customer_license" />
                        <x-input-error :messages="$errors->get('customer_license')" class="mt-2" />
                    </div>

                    {{-- Customer License Expiry Year --}}
                    <div class="p-2 md:w-1/3">
                        <x-input-label for="customer_license_expiry_year" :value="__('Expiry Year')" />
                        <x-text-input id="customer_license_expiry_year" class="block w-full mt-1" type="text" name="customer_license_expiry_year" :value="old('customer_license_expiry_year', isset($booking) ? $booking->customer_license_expiry_year : '')" autofocus autocomplete="customer_license_expiry_year" />
                        <x-input-error :messages="$errors->get('customer_license_expiry_year')" class="mt-2" />
                    </div>

                    {{-- Customer License Expiry Month --}}
                    <div class="p-2 md:w-1/3">
                        <x-input-label for="customer_license_expiry_month" :value="__('Expiry Month')" />
                        <x-text-input id="customer_license_expiry_month" class="block w-full mt-1" type="text" name="customer_license_expiry_month" :value="old('customer_license_expiry_month', isset($booking) ? $booking->customer_license_expiry_month : '')" autofocus autocomplete="customer_license_expiry_month" />
                        <x-input-error :messages="$errors->get('customer_license_expiry_month')" class="mt-2" />
                    </div>

                    {{-- Customer License Expiry Date --}}
                    <div class="p-2 md:w-1/3">
                        <x-input-label for="customer_license_expiry_date" :value="__('Expiry Date')" />
                        <x-text-input id="customer_license_expiry_date" class="block w-full mt-1" type="text" name="customer_license_expiry_date" :value="old('customer_license_expiry_date', isset($booking) ? $booking->customer_license_expiry_date : '')" autofocus autocomplete="customer_license_expiry_date" />
                        <x-input-error :messages="$errors->get('customer_license_expiry_date')" class="mt-2" />
                    </div>

                    <h1 class="w-full p-2 text-xl mt-4">Additional Driver Details</h1>
                    <hr class="w-full m-2">

                    {{-- Additional Driver Name --}}
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="additional_driver_name" :value="__('Additional Driver Name')" />
                        <x-text-input id="additional_driver_name" class="block w-full mt-1" type="text" name="additional_driver_name" :value="old('additional_driver_name', isset($booking) ? $booking->additional_driver_name : '')" autofocus autocomplete="additional_driver_name" />
                        <x-input-error :messages="$errors->get('additional_driver_name')" class="mt-2" />
                    </div>

                    {{-- Additional Driver Phone --}}
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="additional_driver_mobile" :value="__('Additional Driver Phone')" />
                        <x-text-input id="additional_driver_mobile" class="block w-full mt-1" type="text" name="additional_driver_mobile" :value="old('additional_driver_mobile', isset($booking) ? $booking->additional_driver_mobile : '')" autofocus autocomplete="additional_driver_mobile" />
                        <x-input-error :messages="$errors->get('additional_driver_mobile')" class="mt-2" />
                    </div>

                    {{-- Additional Driver Address --}}
                    <div class="p-2 md:w-1/2">
                        <x-input-label for="additional_driver_address_line_1" :value="__('Additional Driver Address')" />
                        <x-text-input id="additional_driver_address_line_1" class="block w-full mt-1" type="text" name="additional_driver_address_line_1" :value="old('additional_driver_address_line_1', isset($booking) ? $booking->additional_driver_address_line_1 : '')" autofocus autocomplete="additional_driver_address_line_1" />
                        <x-input-error :messages="$errors->get('additional_driver_address_line_1')" class="mt-2" />
                    </div>

                    <div class="p-2 md:w-1/2">
                        <x-input-label for="additional_driver_address_line_2" :value="' '" />
                        <x-text-input id="additional_driver_address_line_2" class="block w-full mt-1" type="text" name="additional_driver_address_line_2" :value="old('additional_driver_address_line_2', isset($booking) ? $booking->additional_driver_address_line_2 : '')" autofocus autocomplete="additional_driver_address_line_2" />
                        <x-input-error :messages="$errors->get('additional_driver_address_line_2')" class="mt-2" />
                    </div>

                    <div class="flex justify-end w-full">
                        <button class="px-4 py-2 m-2 text-white bg-indigo-500 rounded-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>