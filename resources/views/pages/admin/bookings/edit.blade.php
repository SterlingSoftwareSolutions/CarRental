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

            <div class="m-2 p-4 overflow-auto bg-white rounded">
                @if(session()->has('message'))
                    <div class="p-4 mb-4 text-green-800 bg-green-100 rounded">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="p-4 mb-4 text-red-800 bg-red-100 rounded">
                        {{ $errors->count().' error' . ($errors->count() == 1 ? '' : 's') .' found.' }}
                    </div>
                @endif

                <div class="flex gap-4">
                    <a href="/admin/users/{{$booking->user->id}}" class="w-1/2 text-lg text-green-900 hover hover:bg-green-600 hover:bg-opacity-10 p-2 rounded-md"><b>User:</b> {{$booking->user->first_name}} {{$booking->user->last_name}}</a>
                    <a href="/admin/vehicles/{{$booking->vehicle->id}}" class="w-1/2 text-lg text-green-900 hover hover:bg-green-600 hover:bg-opacity-10 p-2 rounded-md"><b>Vehicle:</b> {{$booking->vehicle->make}} {{$booking->vehicle->model}} {{$booking->vehicle->vin}}</a>
                </div>

                <form action="/admin/bookings/{{$booking->id}}" method="post" class="flex flex-col">
                    @method('put')
                    @csrf

                    <x-accordion :open="$errors->any() ? 1 : 0" :title="'Booking Info'">
                        {{-- status --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label :value="__('Status')" />
                            <select name="status" class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500">
                                <option value="">Unknown</option>
                                @if(!in_array($booking->status, $statuses))
                                <option value="{{$booking->status}}" selected>{{ucfirst($booking->status)}}</option>
                                @endif
                                @foreach($statuses as $status)
                                <option value="{{$status}}" @selected($booking->status == $status)>{{ucfirst($status)}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        {{-- approval --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label for="approval" :value="__('Approval')" />
                            <select name="approval" class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500 ">
                                <option value="Pending" {{ $booking['approval'] === 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Approved" {{ $booking['approval'] === 'Approved' ? 'selected' : '' }}>Approved</option>
                            </select>
                            <x-input-error :messages="$errors->get('approval')" class="mt-2" />
                        </div>

                        <!-- pickup -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="pickup" :value="__('Pickup Location')" />
                            <x-text-input id="pickup" class="block w-full mt-1" type="text" name="pickup" :value="old('pickup', $booking->pickup)" />
                            <x-input-error :messages="$errors->get('pickup')" class="mt-2" />
                        </div>

                        <!-- pickup time -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="pickup_time" :value="__('Pickup Time')" />
                            <input id="pickup_time" class="block w-full mt-1 border-gray-300 rounded focus:border-green-500 focus:ring-green-500" type="datetime-local" name="pickup_time" value="{{old('pickup_time', $booking->pickup_time?->format('Y-m-d\TH:i'))}}" />
                            <x-input-error :messages="$errors->get('pickup_time')" class="mt-2" />
                        </div>

                        <!-- pickup mileage -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="pickup_mileage" :value="__('Pickup Mileage')" />
                            <x-text-input id="pickup_mileage" class="block w-full mt-1" type="number" name="pickup_mileage" :value="old('pickup_mileage', $booking->pickup_mileage)" />
                            <x-input-error :messages="$errors->get('pickup_mileage')" class="mt-2" />
                        </div>

                        <!-- pickup fuel level -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="pickup_fuel_level" :value="__('Pickup Fuel Level')" />
                            <x-text-input id="pickup_fuel_level" class="block w-full mt-1" type="number" name="pickup_fuel_level" :value="old('pickup_fuel_level', $booking->pickup_fuel_level)" />
                            <x-input-error :messages="$errors->get('pickup_fuel_level')" class="mt-2" />
                        </div>

                        <!-- dropoff -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="dropoff" :value="__('Dropoff Location')" />
                            <x-text-input id="dropoff" class="block w-full mt-1" type="text" name="dropoff" :value="old('dropoff', $booking->dropoff)" />
                            <x-input-error :messages="$errors->get('dropoff')" class="mt-2" />
                        </div>

                        <!-- dropoff time -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="dropoff_time" :value="__('Dropoff Time')" />
                            <input id="dropoff_time" class="block w-full mt-1 border-gray-300 rounded focus:border-green-500 focus:ring-green-500" type="datetime-local" name="dropoff_time" value="{{old('dropoff_time', $booking->dropoff_time?->format('Y-m-d\TH:i'))}}" />
                            <x-input-error :messages="$errors->get('dropoff_time')" class="mt-2" />
                        </div>

                        <!-- dropoff mileage -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="dropoff_mileage" :value="__('Dropoff Mileage')" />
                            <x-text-input id="dropoff_mileage" class="block w-full mt-1" type="number" name="dropoff_mileage" :value="old('dropoff_mileage', $booking->dropoff_mileage)" />
                            <x-input-error :messages="$errors->get('dropoff_mileage')" class="mt-2" />
                        </div>

                        <!-- dropoff fuel level -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="dropoff_time" :value="__('Dropoff Fuel Level')" />
                            <x-text-input id="dropoff_fuel_level" class="block w-full mt-1" type="number" name="dropoff_fuel_level" :value="old('dropoff_fuel_level', $booking->dropoff_fuel_level)" />
                            <x-input-error :messages="$errors->get('dropoff_fuel_level')" class="mt-2" />
                        </div>

                        <!-- return -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="return" :value="__('Return Location')" />
                            <x-text-input id="return" class="block w-full mt-1" type="text" name="return" :value="old('return', $booking->return)" />
                            <x-input-error :messages="$errors->get('return')" class="mt-2" />
                        </div>

                        <!-- return time -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="return_time" :value="__('Return Time')" />
                            <input id="return_time" class="block w-full mt-1 border-gray-300 rounded focus:border-green-500 focus:ring-green-500" type="datetime-local" name="return_time" value="{{old('return_time', $booking->return_time?->format('Y-m-d\TH:i'))}}" />
                            <x-input-error :messages="$errors->get('return_time')" class="mt-2" />
                        </div>

                        <!-- return mileage -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="return_mileage" :value="__('Return Mileage')" />
                            <x-text-input id="return_mileage" class="block w-full mt-1" type="number" name="return_mileage" :value="old('return_mileage', $booking->return_mileage)" />
                            <x-input-error :messages="$errors->get('return_mileage')" class="mt-2" />
                        </div>

                        <!-- return fuel level -->
                        <div class="p-2 md:w-1/4">
                            <x-input-label for="return_fuel_level" :value="__('Return Fuel Level')" />
                            <x-text-input id="return_fuel_level" class="block w-full mt-1" type="number" name="return_fuel_level" :value="old('return_fuel_level', $booking->return_fuel_level)" />
                            <x-input-error :messages="$errors->get('return_fuel_level')" class="mt-2" />
                        </div>
                    </x-accordion>

                    <x-accordion :open="$errors->any() ? 1 : 0" :title="'Customer Details'">
                        {{-- Customer Name --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label for="customer_name" :value="__('Customer Name')" />
                            <x-text-input id="customer_name" class="block w-full mt-1" type="text" name="customer_name" :value="old('customer_name', $booking->customer_name)" />
                            <x-input-error :messages="$errors->get('customer_name')" class="mt-2" />
                        </div>

                        {{-- Customer Phone --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label for="customer_phone" :value="__('Customer Phone')" />
                            <x-text-input id="customer_phone" class="block w-full mt-1" type="text" name="customer_phone" :value="old('customer_phone', $booking->customer_phone)" />
                            <x-input-error :messages="$errors->get('customer_phone')" class="mt-2" />
                        </div>

                        {{-- Customer Email --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label for="customer_email" :value="__('Customer Email')" />
                            <x-text-input id="customer_email" class="block w-full mt-1" type="text" name="customer_email" :value="old('customer_email', $booking->customer_email)" />
                            <x-input-error :messages="$errors->get('customer_email')" class="mt-2" />
                        </div>

                        {{-- Customer DOB --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label for="customer_dob" :value="__('Customer Date of Birth')" />
                            <x-text-input id="customer_dob" class="block w-full mt-1" type="text" name="customer_dob" :value="old('customer_dob', $booking->customer_dob)" />
                            <x-input-error :messages="$errors->get('customer_dob')" class="mt-2" />
                        </div>

                        {{-- Customer Address --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label for="customer_address_line_1" :value="__('Customer Address')" />
                            <x-text-input id="customer_address_line_1" class="block w-full mt-1" type="text" name="customer_address_line_1" :value="old('customer_address_line_1', $booking->customer_address_line_1)" />
                            <x-input-error :messages="$errors->get('customer_address_line_1')" class="mt-2" />
                        </div>

                        <div class="p-2 md:w-1/2">
                            <x-input-label for="customer_address_line_2" :value="' '" />
                            <x-text-input id="customer_address_line_2" class="block w-full mt-1" type="text" name="customer_address_line_2" :value="old('customer_address_line_2', $booking->customer_address_line_2)" />
                            <x-input-error :messages="$errors->get('customer_address_line_2')" class="mt-2" />
                        </div>

                        {{-- Customer License --}}
                        <div class="p-2 md:w-full">
                            <x-input-label for="customer_license" :value="__('Customer License')" />
                            <x-text-input id="customer_license" class="block w-full mt-1" type="text" name="customer_license" :value="old('customer_license', $booking->customer_license)" />
                            <x-input-error :messages="$errors->get('customer_license')" class="mt-2" />
                        </div>

                        {{-- Customer License Expiry Year --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="customer_license_expiry_year" :value="__('Expiry Year')" />
                            <x-text-input id="customer_license_expiry_year" class="block w-full mt-1" type="text" name="customer_license_expiry_year" :value="old('customer_license_expiry_year', $booking->customer_license_expiry_year)" />
                            <x-input-error :messages="$errors->get('customer_license_expiry_year')" class="mt-2" />
                        </div>

                        {{-- Customer License Expiry Month --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="customer_license_expiry_month" :value="__('Expiry Month')" />
                            <x-text-input id="customer_license_expiry_month" class="block w-full mt-1" type="text" name="customer_license_expiry_month" :value="old('customer_license_expiry_month', $booking->customer_license_expiry_month)" />
                            <x-input-error :messages="$errors->get('customer_license_expiry_month')" class="mt-2" />
                        </div>

                        {{-- Customer License Expiry Date --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="customer_license_expiry_date" :value="__('Expiry Date')" />
                            <x-text-input id="customer_license_expiry_date" class="block w-full mt-1" type="text" name="customer_license_expiry_date" :value="old('customer_license_expiry_date', $booking->customer_license_expiry_date)" />
                            <x-input-error :messages="$errors->get('customer_license_expiry_date')" class="mt-2" />
                        </div>
                    </x-accordion>

                    <x-accordion :open="$errors->any() ? 1 : 0" :title="'Additional Driver Details'">
                        {{-- Additional Driver Name --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label for="additional_driver_name" :value="__('Additional Driver Name')" />
                            <x-text-input id="additional_driver_name" class="block w-full mt-1" type="text" name="additional_driver_name" :value="old('additional_driver_name', $booking->additional_driver_name)" />
                            <x-input-error :messages="$errors->get('additional_driver_name')" class="mt-2" />
                        </div>

                        {{-- Additional Driver Phone --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label for="additional_driver_mobile" :value="__('Additional Driver Phone')" />
                            <x-text-input id="additional_driver_mobile" class="block w-full mt-1" type="text" name="additional_driver_mobile" :value="old('additional_driver_mobile', $booking->additional_driver_mobile)" />
                            <x-input-error :messages="$errors->get('additional_driver_mobile')" class="mt-2" />
                        </div>

                        {{-- Additional Driver Address --}}
                        <div class="p-2 md:w-1/2">
                            <x-input-label for="additional_driver_address_line_1" :value="__('Additional Driver Address')" />
                            <x-text-input id="additional_driver_address_line_1" class="block w-full mt-1" type="text" name="additional_driver_address_line_1" :value="old('additional_driver_address_line_1', $booking->additional_driver_address_line_1)" />
                            <x-input-error :messages="$errors->get('additional_driver_address_line_1')" class="mt-2" />
                        </div>

                        <div class="p-2 md:w-1/2">
                            <x-input-label for="additional_driver_address_line_2" :value="' '" />
                            <x-text-input id="additional_driver_address_line_2" class="block w-full mt-1" type="text" name="additional_driver_address_line_2" :value="old('additional_driver_address_line_2', $booking->additional_driver_address_line_2)" />
                            <x-input-error :messages="$errors->get('additional_driver_address_line_2')" class="mt-2" />
                        </div>
                    </x-accordion>

                    <x-accordion :open="$errors->any() ? 1 : 0" :title="'License Images'">
                        {{-- License Image Front --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label :value="__('Front')" />
                            <img src="@if($booking->license_image_front)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->license_image_front)))}} @else /images/blank.png @endif" class="rounded w-full aspect-[3/2] object-cover hover:object-contain border" alt="">
                        </div>

                        {{-- License Image Back --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label :value="__('Back')" />
                            <img src="@if($booking->license_image_back)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->license_image_back)))}} @else /images/blank.png @endif" class="rounded w-full aspect-[3/2] object-cover hover:object-contain border" alt="">
                        </div>
                    </x-accordion>

                    <x-accordion :open="$errors->any() ? 1 : 0" :title="'Signatures'">
                        {{-- Customer Signature --}}
                        <div class="p-2 md:w-1/4">
                            <x-input-label :value="__('Customer Signature')" />
                            <img src="@if($booking->customer_signature)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->customer_signature)))}} @else /images/blank.png @endif" class="rounded w-full aspect-[2/1] object-cover border" alt="">
                            <p class="mt-1">Name: {{$booking?->customer_signature_name}}</p>
                            <p class="mt-1">Date: {{$booking?->customer_signature_date}}</p>
                        </div>

                        {{-- Driver Signature --}}
                        <div class="p-2 md:w-1/4">
                            <x-input-label :value="__('Driver Signature')" />
                            <img src="@if($booking->driver_signature)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->driver_signature)))}} @else /images/blank.png @endif" class="rounded w-full aspect-[2/1] object-cover border" alt="">
                            <p class="mt-1">Name: {{$booking?->driver_signature_name}}</p>
                            <p class="mt-1">Date: {{$booking?->driver_signature_date}}</p>
                        </div>

                        {{-- Admin Signature --}}
                        <div class="p-2 md:w-1/4">
                            <x-input-label :value="__('Admin Signature')" />
                            <img src="@if($booking->admin_signature)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->admin_signature)))}} @else /images/blank.png @endif" class="rounded w-full aspect-[2/1] object-cover border" alt="">
                        </div>
                    </x-accordion>

                    <x-accordion :open="$errors->any() ? 1 : 0" :title="'Body Damage Details'">
                        <div class="flex flex-wrap">                            
                            <div class="flex flex-wrap w-1/2 items-center p-2">
                                <p class="w-full text-sm">Side (Left)</p>
                                <div class="w-1/2">
                                    <img class="mx-auto" src="/images/body_damage_left.png">
                                </div>
                                <div class="w-1/2 ps-4">
                                    <textarea class="w-full rounded border-gray-300 p-1" name="body_damage_left" rows="4">{{$booking->body_damage_left}}&nbsp;</textarea>
                                </div>
                                <x-input-error :messages="$errors->get('body_damage_left')" class="mt-2" />
                            </div>
                            <div class="flex flex-wrap w-1/2 items-center p-2">
                                <p class="w-full text-sm">Side (Right)</p>
                                <div class="w-1/2">
                                    <img class="mx-auto" src="/images/body_damage_right.png">
                                </div>
                                <div class="w-1/2 ps-4">
                                    <textarea class="w-full rounded border-gray-300 p-1" name="body_damage_right" rows="4">{{$booking->body_damage_right}}&nbsp;</textarea>
                                </div>
                                <x-input-error :messages="$errors->get('body_damage_right')" class="mt-2" />
                            </div>
                            <div class="flex flex-wrap w-1/2 items-center p-2">
                                <p class="w-full text-sm">Front</p>
                                <div class="w-1/2">
                                    <img class="mx-auto" src="/images/body_damage_front.png">
                                </div>
                                <div class="w-1/2 ps-4">
                                    <textarea class="w-full rounded border-gray-300 p-1" name="body_damage_front" rows="4">{{$booking->body_damage_front}}&nbsp;</textarea>
                                </div>
                                <x-input-error :messages="$errors->get('body_damage_front')" class="mt-2" />
                            </div>
                            <div class="flex flex-wrap w-1/2 items-center p-2">
                                <p class="w-full text-sm">Back</p>
                                <div class="w-1/2">
                                    <img class="mx-auto" src="/images/body_damage_back.png">
                                </div>
                                <div class="w-1/2 ps-4">
                                    <textarea class="w-full rounded border-gray-300 p-1" name="body_damage_back" rows="4">{{$booking->body_damage_back}}&nbsp;</textarea>
                                </div>
                                <x-input-error :messages="$errors->get('body_damage_back')" class="mt-2" />
                            </div>
                        </div>
                    </x-accordion>

                    <x-accordion :open="$errors->any() ? 1 : 0" :title="'Fees'">

                        {{-- Allowed Vehicle Mileage km/day/week--}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="allowed_vehicle_mileage" :value="__('Allowed Vehicle Mileage  km/day/week')" />
                            <x-text-input id="allowed_vehicle_mileage" class="block w-full mt-1" type="number" name="allowed_vehicle_mileage" :value="old('allowed_vehicle_mileage', $booking->allowed_vehicle_mileage)" />
                            <x-input-error :messages="$errors->get('allowed_vehicle_mileage')" class="mt-2" />
                        </div>

                        {{-- Rate per day/week --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="rate" :value="__('Rate per day/week')" />
                            <x-text-input id="rate" class="block w-full mt-1" type="number" name="rate" :value="old('rate', $booking->rate)" />
                            <x-input-error :messages="$errors->get('rate')" class="mt-2" />
                        </div>

                        {{-- Extra Charge / KM --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="extra_charge_km" :value="__('Extra Charge / KM')" />
                            <x-text-input id="extra_charge_km" class="block w-full mt-1" type="number" name="extra_charge_km" :value="old('extra_charge_km', $booking->extra_charge_km)" />
                            <x-input-error :messages="$errors->get('extra_charge_km')" class="mt-2" />
                        </div>


                        {{-- Insurance Premium --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="insurance_premium" :value="__('Insurance Premium')" />
                            <x-text-input id="insurance_premium" class="block w-full mt-1" type="number" name="insurance_premium" :value="old('insurance_premium', $booking->insurance_premium)" />
                            <x-input-error :messages="$errors->get('insurance_premium')" class="mt-2" />
                        </div>

                        {{-- Rental --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="rental" :value="__('Rental')" />
                            <x-text-input id="rental" class="block w-full mt-1" type="number" name="rental" :value="old('rental', $booking->rental)" />
                            <x-input-error :messages="$errors->get('rental')" class="mt-2" />
                        </div>

                        {{-- Extra Mileage --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="extra_mileage" :value="__('Extra Mileage')" />
                            <x-text-input id="extra_mileage" class="block w-full mt-1" type="number" name="extra_mileage" :value="old('extra_mileage', $booking->extra_mileage)" />
                            <x-input-error :messages="$errors->get('extra_mileage')" class="mt-2" />
                        </div>

                        {{-- Damage Liability Reduction --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="damage_liablity_reduction" :value="__('Damage Liability Reduction')" />
                            <x-text-input id="damage_liablity_reduction" class="block w-full mt-1" type="number" name="damage_liablity_reduction" :value="old('damage_liablity_reduction', $booking->damage_liablity_reduction)" />
                            <x-input-error :messages="$errors->get('damage_liablity_reduction')" class="mt-2" />
                        </div>

                        {{-- Bond / Deposits --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="bond_deposit" :value="__('Bond / Deposits')" />
                            <x-text-input id="bond_deposit" class="block w-full mt-1" type="number" name="bond_deposit" :value="old('bond_deposit', $booking->bond_deposit)" />
                            <x-input-error :messages="$errors->get('bond_deposit')" class="mt-2" />
                        </div>

                        {{-- Card Fee --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="card_fee" :value="__('Card Fee')" />
                            <x-text-input id="card_fee" class="block w-full mt-1" type="number" name="card_fee" :value="old('card_fee', $booking->card_fee)" />
                            <x-input-error :messages="$errors->get('card_fee')" class="mt-2" />
                        </div>

                        {{-- Others --}}
                        <div class="p-2 md:w-1/3">
                            <x-input-label for="others" :value="__('Others')" />
                            <x-text-input id="others" class="block w-full mt-1" type="number" name="others" :value="old('others', $booking->others)" />
                            <x-input-error :messages="$errors->get('others')" class="mt-2" />
                        </div>
                    </x-accordion>

                    <x-accordion :open="$errors->any() ? 1 : 0" :title="'Checklist'">
                        {{-- Reverse Camera--}}
                        <div class="p-2 md:w-1/4">
                            <label for="reverse_camera" class="w-full flex gap-2 hover:bg-green-600 hover:bg-opacity-10 text-gray-800 p-3 rounded-md items-center cursor-pointer">
                                <input id="reverse_camera" class="focus:ring-0 border-2 border-green-900 checked:bg-green-600 checked:focus:bg-green-600 checked:hover:bg-green-600 rounded-md p-2" type="checkbox" name="reverse_camera" @checked(old('reverse_camera', $booking->reverse_camera)) />
                                Reverse Camera
                            </label>
                            <x-input-error :messages="$errors->get('reverse_camera')" class="mt-2" />
                        </div>

                        {{-- Cargo Barrier--}}
                        <div class="p-2 md:w-1/4">
                            <label for="cargo_barrier" class="w-full flex gap-2 hover:bg-green-600 hover:bg-opacity-10 text-gray-800 p-3 rounded-md items-center cursor-pointer">
                                <input id="cargo_barrier" class="focus:ring-0 border-2 border-green-900 checked:bg-green-600 checked:focus:bg-green-600 checked:hover:bg-green-600 rounded-md p-2" type="checkbox" name="cargo_barrier" @checked(old('cargo_barrier', $booking->cargo_barrier)) />
                                Cargo Barrier
                            </label>
                            <x-input-error :messages="$errors->get('cargo_barrier')" class="mt-2" />
                        </div>

                        {{-- Fuel Cap--}}
                        <div class="p-2 md:w-1/4">
                            <label for="fuel_cap" class="w-full flex gap-2 hover:bg-green-600 hover:bg-opacity-10 text-gray-800 p-3 rounded-md items-center cursor-pointer">
                                <input id="fuel_cap" class="focus:ring-0 border-2 border-green-900 checked:bg-green-600 checked:focus:bg-green-600 checked:hover:bg-green-600 rounded-md p-2" type="checkbox" name="fuel_cap" @checked(old('fuel_cap', $booking->fuel_cap)) />
                                Fuel Cap
                            </label>
                            <x-input-error :messages="$errors->get('fuel_cap')" class="mt-2" />
                        </div>

                        {{-- Rim Cups--}}
                        <div class="p-2 md:w-1/4">
                            <label for="rim_cups" class="w-full flex gap-2 hover:bg-green-600 hover:bg-opacity-10 text-gray-800 p-3 rounded-md items-center cursor-pointer">
                                <input id="rim_cups" class="focus:ring-0 border-2 border-green-900 checked:bg-green-600 checked:focus:bg-green-600 checked:hover:bg-green-600 rounded-md p-2" type="checkbox" name="rim_cups" @checked(old('rim_cups', $booking->rim_cups)) />
                                Rim Cups
                            </label>
                            <x-input-error :messages="$errors->get('rim_cups')" class="mt-2" />
                        </div>      
                    </x-accordion>

                    <div class="flex justify-between w-full mt-4">
                        <button class="px-4 py-2 text-white bg-slate-600 rounded-lg" name="download_pdf">Download PDF</button>
                        <button class="px-4 py-2 text-white bg-green-600 rounded-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>