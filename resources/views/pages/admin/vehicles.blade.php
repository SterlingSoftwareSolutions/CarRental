<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">

        <!-- Top Grid  -->
        <div class="grid grid-cols-4 gap-10">
            <!-- Total Vehicles  -->
            <div class="grid lg:grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Vehicles</p>
                    <p class="text-gray-600 text-2xl font-bold"> @php
                        echo count($vehicles);
                        @endphp</p>
                    <p class="text-gray-400 text-sm ">Total Vehicles</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

            <!-- Active Vehicles  -->
            <div class="grid grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Active Vehicles</p>
                    <p class="text-gray-600 text-2xl font-bold">457</p>
                    <p class="text-gray-400 text-sm ">Active for today</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

            <!-- Booked Vehicles  -->
            <div class="grid grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Booked Vehicles</p>
                    <p class="text-gray-600 text-2xl font-bold">1,058</p>
                    <p class="text-gray-400 text-sm ">Booked for this month</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

            <!-- Type of Vehicles  -->
            <div class="grid grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Vehicle Types</p>
                    <p class="text-gray-600 text-2xl font-bold">8</p>
                    <p class="text-gray-400 text-sm ">Total Vehicle Types</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="mt-10">
            <div class="relative shadow-md sm:rounded-lg bg-white ">
                <div class="flex justify-end items-center">
                    <div>
                        <!-- Search bar  -->
                        <form class="">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="border-none w-full p-4 pl-10 text-sm text-gray-500 bg-transparent focus:ring-0" placeholder="Search" required>
                            </div>
                        </form>
                    </div>

                   

                </div>
                <!-- Vehicle List  -->
                <div class="overflow-auto max-h-[600px] ">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Vehicle
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    VIN
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Body Type
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Price
                                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>

                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($vehicles as $vehicle)
                            <tr class="bg-white border-b">


                                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="me-3">
                                            <img src="{{ URL('images/flg_logo11079.png')}}" class="rounded-full w-10 h-10" alt="Logo Image" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                                        </div>
                                        <div>
                                            <p>{{ $vehicle['make']}} {{ $vehicle['model']}}</p>
                                        </div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $vehicle['vin']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['body_type']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['color']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['price']}}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    /
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                </td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>



            </div>

            <div class="w-5/10 mx-auto p-6 m-10 relative shadow-md sm:rounded-lg bg-white ">
                <div>
                    <h1 class="flex text-gray-500 font-bold text-2xl justify-center py-6">Add a New Vehicle</h1>
                </div>
                <form method="POST" action="{{ route('vehicles.all') }}">
                    @csrf

                    <!-- Make -->
                    <div>
                        <x-input-label for="make" :value="__('Make')" />
                        <x-text-input id="make" class="block mt-1 w-full" type="text" name="make" :value="old('make')" required autofocus />
                        <x-input-error :messages="$errors->get('make')" class="mt-2" />
                    </div>

                    <!-- Model -->
                    <div>
                        <x-input-label for="model" :value="__('Model')" />
                        <x-text-input id="model" class="block mt-1 w-full" type="text" name="model" :value="old('model')" required autofocus />
                        <x-input-error :messages="$errors->get('model')" class="mt-2" />
                    </div>

                    <!-- VIN -->
                    <div>
                        <x-input-label for="vin" :value="__('VIN')" />
                        <x-text-input id="vin" class="block mt-1 w-full" type="text" name="vin" :value="old('vin')" required autofocus />
                        <x-input-error :messages="$errors->get('vin')" class="mt-2" />
                    </div>

                    <!-- Body Type -->
                    <div>
                        <x-input-label for="body_type" :value="__('Body Type')" />
                        <x-text-input id="body_type" class="block mt-1 w-full" type="text" name="body_type" :value="old('body_type')" required autofocus />
                        <x-input-error :messages="$errors->get('body_type')" class="mt-2" />
                    </div>

                    <!-- Year -->
                    <div>
                        <x-input-label for="year" :value="__('Year')" />
                        <x-text-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('year')" required autofocus />
                        <x-input-error :messages="$errors->get('year')" class="mt-2" />
                    </div>

                    <!-- Fuel Type -->
                    <div>
                        <x-input-label for="fuel_type" :value="__('Fuel Type')" />
                        <x-text-input id="fuel_type" class="block mt-1 w-full" type="text" name="fuel_type" :value="old('fuel_type')" required autofocus />
                        <x-input-error :messages="$errors->get('fuel_type')" class="mt-2" />
                    </div>

                    <!-- Transmission -->
                    <div>
                        <x-input-label for="transmission" :value="__('Transmission')" />
                        <x-text-input id="transmission" class="block mt-1 w-full" type="text" name="transmission" :value="old('transmission')" required autofocus />
                        <x-input-error :messages="$errors->get('transmission')" class="mt-2" />
                    </div>

                    <!-- Mileage -->
                    <div>
                        <x-input-label for="mileage" :value="__('Mileage')" />
                        <x-text-input id="mileage" class="block mt-1 w-full" type="text" name="mileage" :value="old('mileage')" required autofocus />
                        <x-input-error :messages="$errors->get('mileage')" class="mt-2" />
                    </div>

                    <!-- Color -->
                    <div>
                        <x-input-label for="color" :value="__('Color')" />
                        <x-text-input id="color" class="block mt-1 w-full" type="text" name="color" :value="old('color')" required autofocus />
                        <x-input-error :messages="$errors->get('color')" class="mt-2" />
                    </div>

                    <!-- Luggage -->
                    <div>
                        <x-input-label for="luggage" :value="__('Luggage')" />
                        <x-text-input id="luggage" class="block mt-1 w-full" type="text" name="luggage" :value="old('luggage')" required autofocus />
                        <x-input-error :messages="$errors->get('luggage')" class="mt-2" />
                    </div>

                    <!-- Doors -->
                    <div>
                        <x-input-label for="doors" :value="__('Doors')" />
                        <x-text-input id="doors" class="block mt-1 w-full" type="text" name="doors" :value="old('doors')" required autofocus />
                        <x-input-error :messages="$errors->get('doors')" class="mt-2" />
                    </div>

                    <!-- Passengers -->
                    <div>
                        <x-input-label for="passengers" :value="__('Passengers')" />
                        <x-text-input id="passengers" class="block mt-1 w-full" type="text" name="passengers" :value="old('passengers')" required />
                        <x-input-error :messages="$errors->get('passengers')" class="mt-2" />
                    </div>

                    <!-- Price -->
                    <div>
                        <x-input-label for="price" :value="__('Price')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Create Vehicle') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>



        </div>
    </div>

</x-app-layout>