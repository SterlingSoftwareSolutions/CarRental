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
                Returned On
            </th>

            <th scope="col" class="px-6 py-2">
                Approval
            </th>

            <th scope="col" class="px-6 py-2">
                Paid
            </th>

            <th scope="col" class="px-6 py-2">
                Due
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
            <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                @if(Auth::user()->role == 'admin')
                <a href="/admin/bookings/{{$booking->id}}">
                    @if(isset($booking->vehicle))
                    <div class="flex items-center">
                        <div class="me-3">
                            <img src="
                                    @if(count($booking->vehicle->images))
                                        {{Storage::url($booking->vehicle->images[0]->file_path)}}
                                    @else
                                        /images/blank.png
                                    @endif
                                " class="w-10 h-10 rounded-full" alt="Vehicle Image">
                        </div>
                        <div>
                            <p>{{ $booking->vehicle['make']}} {{ $booking->vehicle['model']}} #{{ $booking->vehicle['vin']}}</p>
                        </div>
                    </div>
                    @else
                    <p class="text-red-500">
                        Vehicle no longer in the system.
                    </p>
                    @endif
                </a>
                @else
                @if(isset($booking->vehicle))
                <div class="flex items-center">
                    <div class="me-3">
                        <img src="
                                    @if(count($booking->vehicle->images))
                                        {{Storage::url($booking->vehicle->images[0]->file_path)}}
                                    @else
                                        /images/blank.png
                                    @endif
                                " class="w-10 h-10 rounded-full" alt="Vehicle Image">
                    </div>
                    <div>
                        <p>{{ $booking->vehicle['make']}} {{ $booking->vehicle['model']}} #{{ $booking->vehicle['vin']}}</p>
                    </div>
                </div>
                @else
                <p class="text-red-500">
                    Vehicle no longer in the system.
                </p>
                @endif
            </th>
            @endif

            </th>

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
                {{$booking['returned_on'] ?? '-'}}
            </td>

            <td class="px-6 py-4">
                @if(($booking->approval) == 'Pending')
                <span class="px-3 py-2 text-yellow-500 ">Pending</span>
                @else
                <span class="px-3 py-2 text-green-500 ">Approved</span>
                @endif
            </td>

            <td class="px-6 py-4">
                ${{ $booking->amount_paid()}}
            </td>
            

            <td class="px-6 py-4">
                @php $due = $booking['returned_on'] ? $booking->invoices->where('paid', '0')->sum('amount') : $booking->amount() - $booking->amount_paid() @endphp
                @if($due == 0)
                <p class="text-green-600">Paid</p>
                @else
                <p class="text-red-600">${{$due}}</p>
                @endif
            </td>

            <td class="px-6 py-4">
                @if(strtolower($booking->status) == 'unpaid')
                <span class="px-3 py-2 text-red-600 border border-red-600 rounded-full">Unpaid</span>
                @elseif(strtolower($booking->status) == 'returned')
                <span class="px-3 py-2 text-green-600 border border-green-600 rounded-full">Returned</span>
                @elseif(strtolower($booking->status) == 'paid')
                <span class="px-3 py-2 text-blue-600 border border-blue-600 rounded-full">Paid</span>
                @else
                <span class="px-3 py-2 text-gray-600 border border-gray-600 rounded-full">{{ ucfirst($booking->status)}}</span>
                @endif
            </td>
            <td class="px-6 py-4">
            @if(Auth::user()->role == 'client' && $booking->status == 'Unpaid')
                <a href="{{ route('bookings.pay', compact('booking')) }}" class="px-3 py-2 text-center text-white bg-green-500 rounded-full">Pay</a>
            @else
                <button class="px-3 py-2 text-center text-white bg-gray-300 rounded-full" disabled>Pay</button>
            @endif
            </td>


            @if(Auth::user()->role == 'admin')
            <td class="px-6 py-4">
                <div class="flex flex-wrap items-center gap-1">

                    {{-- RETURN BUTTON --}}
                    @if(!$booking['returned_on'] && $return)
                    <button class="px-3 py-2 text-center text-white bg-blue-600 rounded-full" onclick="show_return_modal({{$booking->id}})">Return</button>
                    @endif

                    {{-- SURCHARGES --}}
                    <button class="px-3 py-2 text-center text-white bg-orange-500 rounded-full" onclick="show_surcharge_modal({{$booking->id}})">Fine/Toll</button>

                    {{-- EDIT BUTTON --}}
                    <a href="/admin/bookings/{{ $booking['id'] }}/edit" class="px-3 py-2 text-center text-white bg-gray-500 rounded-full">Edit</a>

                    @if($booking['approval'] === 'Pending')
                        {{-- APPROVE Button --}}
                        <form action="{{ route('bookings.approve', $booking) }}" method="POST" class="inline">
                            @csrf
                            @method('POST')
                            <button href="{{ route('bookings.approve', $booking) }}" type="submit" class="px-3 py-2 text-center text-white bg-green-500 rounded-full">Approve</button>
                        </form>
                    @endif
                
                    
                    {{-- DELETE BUTTON --}}
                    <form action="/admin/booking/{{ $booking['id'] }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-2 text-center text-white bg-red-600 rounded-full" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                    </form>

                </div>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

<div class="relative z-40 hidden" id="return_modal">
    <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
            <div class="relative p-5 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:w-full sm:max-w-lg">
                <form class="flex flex-col gap-2" id="return_form" method="post">
                    @csrf
                    <h1>Vehicle Return Date:</h1>
                    <input class="w-full rounded-full" type="date" name="returned_on" id="return_form_date">
                    <div class="flex justify-end gap-1">
                        <button type="button" class="px-3 py-2 text-gray-500 border border-gray-600 rounded-full" onclick="hide_return_modal()">Cancel</button>
                        <button class="px-3 py-2 text-white bg-blue-600 rounded-full">Return</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="relative z-40 hidden" id="surcharge_modal">
    <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
            <div class="relative p-5 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:w-full sm:max-w-lg">
                <form class="flex flex-col gap-2" id="surcharge_form" method="post">
                    @csrf
                    <div class="flex gap-2">
                        <div class="w-1/2">
                            <h1>Type:</h1>
                            <select name="type" class="w-full mt-2 rounded-full">
                                <option value="fine">Fine</option>
                                <option value="toll">Toll</option>
                            </select>
                        </div>
                        <div class="w-1/2">
                            <h1>Date:</h1>
                            <input class="w-full mt-2 rounded-full" type="date" name="date" id="surcharge_form_date">
                        </div>
                    </div>
                    <h1>Amount:</h1>
                    <input class="w-full rounded-full" type="number" min="0" name="amount" id="surcharge_form_date" required>
                    <h1>Notes:</h1>
                    <textarea class="w-full rounded-xl" style="scrollbar-width: none;" rows="4" name="note"></textarea>
                    <div class="flex justify-end gap-1">
                        <button type="button" class="px-3 py-2 text-gray-500 border border-gray-600 rounded-full" onclick="hide_surcharge_modal()">Cancel</button>
                        <button class="px-3 py-2 text-white bg-orange-500 rounded-full">Add Fine / Toll</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // RETURN VEHICLE
    const return_modal = document.getElementById('return_modal')
    const return_form = document.getElementById('return_form')
    const return_form_date = document.getElementById('return_form_date')

    function hide_return_modal() {
        return_modal.classList.add('hidden');
    }

    function show_return_modal(booking) {
        return_form_date.value = new Date().toISOString().substring(0, 10);
        return_form.setAttribute('action', '/admin/bookings/' + booking + '/return');
        return_modal.classList.remove('hidden');
    }


    // SURCHARGES
    const surcharge_modal = document.getElementById('surcharge_modal')
    const surcharge_form = document.getElementById('surcharge_form')
    const surcharge_form_date = document.getElementById('surcharge_form_date')

    function hide_surcharge_modal() {
        surcharge_modal.classList.add('hidden');
    }

    function show_surcharge_modal(booking) {
        surcharge_form_date.value = new Date().toISOString().substring(0, 10);
        surcharge_form.setAttribute('action', '/admin/bookings/' + booking + '/surcharge');
        surcharge_modal.classList.remove('hidden');
    }
</script>

@else
<div class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">No Bookings Found</div>
@endif