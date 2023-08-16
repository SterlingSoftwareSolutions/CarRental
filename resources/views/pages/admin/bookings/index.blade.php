<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">

        <!-- Top Grid  -->
        <div class="grid grid-cols-4 gap-10">
            <!-- Total bookings  -->
            <div class="grid lg:grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">bookings</p>
                    <p class="text-gray-600 text-2xl font-bold"> @php
                        echo count($bookings);
                        @endphp</p>
                    <p class="text-gray-400 text-sm ">Total bookings</p>
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
                                <input type="search" id="default-search" class="border-none w-full p-4 pl-10 text-sm text-gray-500 bg-transparent focus:ring-0" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- booking List  -->
                <div class="">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Booking
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Customer
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Driver' License
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pickup Location
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Drop Off Location
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Pick up Date & Time
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Drop off Date & Time
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>

                                <th scope="col" class="px-6 py-3 text-center">
                                    Advance
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>

                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($bookings as $booking)
                            <tr class="bg-white border-b">
                                @if(isset($booking->vehicle))
                                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="me-3">
                                            <img src="{{ Storage::url($booking->vehicle->images[0]->file_path ?? null) }}" class="rounded-full w-10 h-10" alt="Logo Image" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                                        </div>
                                        <div>
                                            <p>{{ $booking->vehicle['make']}} {{ $booking->vehicle['model']}} #{{ $booking->vehicle['vin']}}</p>
                                        </div>
                                    </div>
                                </th>
                                @else
                                <th scope="row" class="px-6 py-4 font-medium text-red-500 whitespace-nowrap">
                                    Vehicle no longer in the system.
                                </th>
                                @endif

                                @if(isset($booking->user))
                                <td class="px-6 py-4">
                                    {{ $booking->user['first_name']}} {{ $booking->user['last_name']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $booking->user['driving_license']}}
                                </td>
                                @else
                                <th scope="row" class="px-6 py-4 font-medium text-red-500 whitespace-nowrap">
                                    User no longer in the system.
                                </th>
                                <td class="px-6 py-4">
                                    -
                                </td>
                                @endif


     

                                <td class="px-6 py-4">
                                    {{ $booking['pickup']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $booking['dropoff']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $booking['pickup_time']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $booking['dropoff_time']}}
                                </td>

                                <td class="px-6 py-4">
                                    $ {{ $booking->amount() }}
                                </td>

                                <td class="px-6 py-4">
                                   
                                    
                                <span class="bg-green-600 py-2 px-3 rounded-full text-white">Paid</span>
                                <span class="bg-red-600 py-2 px-3 rounded-full text-white">Unpaid</span>
                                    
                                   
                                </td>

                                <td class="px-6 py-4 text-right">
                                    <a href="/admin/bookings/{{ $booking['id']}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    /

                                    <form action="/admin/booking/{{ $booking['id'] }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>

</x-app-layout>