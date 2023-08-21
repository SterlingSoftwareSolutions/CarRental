@props([
    'bookings' => null,
])

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
                        <img
                            src="
                                @if(count($booking->vehicle->images))
                                    {{Storage::url($booking->vehicle->images[0]->file_path)}}
                                @else
                                    /images/blank.png
                                @endif
                            "
                            class="rounded-full w-10 h-10"
                            alt="Vehicle Image"
                        >
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

            @if(Auth::user()->role == 'admin')
            <td class="px-6 py-4 text-right">
                <a href="/admin/bookings/{{ $booking['id']}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                /
                <form action="/admin/booking/{{ $booking['id'] }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="font-medium text-red-600 dark:text-red-500 hover:underline"
                        onclick="return confirm('Are you sure you want to delete this booking?')"
                    >Delete</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">No Bookings Found</div>
@endif