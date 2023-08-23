@props([
'bookings' => null,
'return' => true
])

@if(count($bookings))
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-2">
                #
            </th>

            <th scope="col" class="px-6 py-2">
                Pickup
            </th>

            <th scope="col" class="px-6 py-2">
                Drop Off
            </th>

            <th scope="col" class="px-6 py-2">
                Amount
            </th>

            <th scope="col" class="px-6 py-2">
                Status
            </th>

            <th scope="col" class="px-6 py-2">
                Actions
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
                        <img src="
                                @if(count($booking->vehicle->images))
                                    {{Storage::url($booking->vehicle->images[0]->file_path)}}
                                @else
                                    /images/blank.png
                                @endif
                            " class="rounded-full w-10 h-10" alt="Vehicle Image">
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
                <p>
                    {{ $booking['pickup']}}
                </p>
                <p>
                {{ explode( ' ', $booking['pickup_time'])[0] }}
                </p>
            </td>

            <td class="px-6 py-4">
                <p>
                    {{ $booking['dropoff']}}
                </p>
                <p>
                {{ explode( ' ', $booking['dropoff_time'])[0] }}
                </p>
            </td>

            <td class="px-6 py-4">
                ${{ $booking->amount()}}
            </td>

            <td class="px-6 py-4">
                <span class="bg-gray-600 py-2 px-3 rounded-full text-white">{{$booking->status}}</span>
                @if($booking->status == 'returned')
                <p class="py-2">
                    On: {{ $booking['returned_on']}}
                </p>
                @endif
            </td>

            @if(Auth::user()->role == 'admin')
            <td class="px-6 py-4">
                <div class="flex flex-wrap items-center gap-1">

                    {{-- RETURN BUTTON --}}
                    @if(!$booking['returned_on'] && $return)
                    <button class="bg-blue-600 rounded-full py-2 px-3 text-white text-center" onclick="show_return_modal({{$booking->id}})">Return</button>
                    @endif

                    {{-- EDIT BUTTON --}}
                    <a href="/admin/bookings/{{ $booking['id']}}/edit" class="bg-green-600 rounded-full py-2 px-3 text-white text-center">Edit</a>

                    {{-- DELETE BUTTON --}}
                    <form action="/admin/booking/{{ $booking['id'] }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 rounded-full py-2 px-3 text-white text-center" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                    </form>

                </div>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

<div class="relative z-40 hidden" id="return_modal">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg p-5 bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <form class="flex flex-col gap-2" id="return_form" method="post">
                    @csrf
                    <h1>Vehicle Return Date:</h1>
                    <input class="rounded-full w-full" type="date" name="returned_on" id="return_form_date">
                    <div class="flex justify-end gap-1">
                        <button type="button" class="border border-gray-600 text-gray-500 py-2 px-3 rounded-full" onclick="hide_return_modal()">Cancel</button>
                        <button class="bg-blue-600 text-white py-2 px-3 rounded-full">Return</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const return_modal = document.getElementById('return_modal')
    const return_form = document.getElementById('return_form')
    const return_form_date = document.getElementById('return_form_date')

    function hide_return_modal(){
        return_modal.classList.add('hidden');
    }

    function show_return_modal(booking){
        return_form_date.value = new Date().toISOString().substring(0, 10);
        return_form.setAttribute('action', '/admin/bookings/' + booking + '/return');
        return_modal.classList.remove('hidden');
    }
</script>

@else
<div class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">No Bookings Found</div>
@endif