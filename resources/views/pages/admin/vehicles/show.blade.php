<x-app-layout>

    <!-- Side Bar  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">

        <!-- Vehicle INFO -->
        <div class="overflow-auto max-h-[600px] ">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Vehicle</h1>
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
                            Availability
                        </th>

                        <th scope="col" class="px-6 py-3">
                            <span class="items-center text-center">Action</span>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="me-3">
                                    @if(isset($vehicle) && isset($vehicle->images) && $vehicle->images->count() > 0)
                                    <img src="{{ Storage::url($vehicle->images[0]->file_path) }}" alt="vehicle Image" class="rounded-full w-10 h-10">
                                    @else
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80" alt="User Image" class="rounded-full w-10 h-10">
                                    @endif
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

                        <td class="px-6 py-4">
                            {{ $vehicle['availability'] ? 'Available' : 'Not Available' }}

                        </td>
                        <td class="flex px-6 py-4">
                            <a href="/admin/vehicles/{{ $vehicle['id']}}/edit" class="bg-[#2563ea] hover:bg-[#77c6fc] p-1 rounded-lg"><img class="w-5 h-5" src="{{ URL('images/editing.png')}}" alt=""></a>
                            <span class="text-xl">&nbsp/&nbsp</span>
                            <form action="/admin/vehicle/{{ $vehicle['id'] }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-[#c81e1e] hover:bg-[#e28c8b] p-1 rounded-lg" onclick="return confirm('Are you sure you want to delete this Vehicle?')"><img class="w-5 h-5" src="{{ URL('images/delete.png')}}" alt=""></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- FINES & TOLLS -->
        <div class="">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Fines & Tolls</h1>
            <div class="overflow-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Vehicle Id
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Troll/Fines Price
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Action
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 1; $i++) <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="me-3">
                                        <img src="{{ URL('images/Rectangle 148.png')}}" class="rounded w-15 h-12" alt="Logo Image" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                                    </div>
                                    <div>
                                        <p>Nissan Sky-liner (Make + Model)</p>
                                    </div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                #SB123456
                            </td>
                            <td class="px-6 py-4">
                                03/08/2023
                            </td>
                            <td class="px-6 py-4">
                                $ 150.00
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <img class="w-5 h-5" src="{{ URL('images/eye.png')}}" alt="" srcset="">
                                        <span class="sr-only">Icon description</span>
                                    </button>
                                    <button type="button" class="text-white bg-[#08C561] hover:bg-[#4ade80] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <img class="w-5 h-5 mr-2" src="{{ URL('images/credit-card.png')}}" alt="" srcset="">
                                        Pay Now
                                    </button>
                                </div>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
        </div>

        <!-- BOOKING HISTORY -->
        <div class="">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Booking History</h1>
            <div class="overflow-auto">
                @if(count($vehicle->bookings))
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Pickup Location
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Pick up Date & Time
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Drop Off Location
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Drop off Date & Time
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Amount
                            </th>

                            <th scope="col" class="px-6 py-3 text-center">
                                Status
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>

                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($vehicle->bookings as $booking)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="me-3">
                                        <img src="{{ Storage::url($booking->vehicle->images[0]->file_path) }}" class="rounded-full w-10 h-10 object-cover" alt="Logo Image" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                                    </div>
                                    <div>
                                        <p>{{ $booking->vehicle['make']}} {{ $booking->vehicle['model']}} #{{
                                            $booking->vehicle['vin']}}</p>
                                    </div>
                                </div>
                            </th>

                            <td class="px-6 py-4">
                                {{ $booking['pickup']}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $booking['pickup_time']}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $booking['dropoff']}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $booking['dropoff_time']}}
                            </td>

                            <td class="px-6 py-4">
                                $ {{ $booking->amount()}}
                            </td>

                            <td class="px-6 py-4">
                                <span class="bg-gray-600 py-2 px-3 rounded-full text-white">{{$booking->status}}</span>
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="/admin/bookings/{{ $booking['id']}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                </a>
                                /
                                <form action="/admin/booking/{{ $booking['id'] }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this booking?')">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">No Bookings Found</div>
                @endif
            </div>
        </div>

    </div>

</x-app-layout>