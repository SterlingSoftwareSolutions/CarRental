@php
    $user = Auth::user();
    $bookings = $user->bookings;
@endphp

<x-app-layout>
    <div class="p-6">

        <!-- BOOKING HISTORY -->
        <div class="mt-24">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Booking History</h1>
            <div class="overflow-auto">
                @if(count($bookings))
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
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($bookings as $booking)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="me-3">
                                        <img src="{{ Storage::url($booking->vehicle->images[0]->file_path ?? null) }}"
                                            class="rounded-full w-10 h-10 object-cover" alt="Logo Image" id="dropdownDefaultButton"
                                            data-dropdown-toggle="dropdown">
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

                            <td class="px-6 py-4 text-center">
                                <span class="bg-gray-600 py-2 px-3 rounded-full text-white">{{$booking->status}}</span>
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