@props([
'invoices' => [],
'return' => true
])

@if(count($invoices))
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-2">
                Booking
            </th>

            <th scope="col" class="px-6 py-2">
                Reason
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
        @foreach ($invoices as $invoice)
        <tr class="bg-white border-b">

            <td class="px-6 py-4 flex gap-2">
                <div class="my-auto">
                    <img src="
                        @if(count($invoice->booking->vehicle->images))
                            {{Storage::url($invoice->booking->vehicle->images[0]->file_path)}}
                        @else
                            /images/blank.png
                        @endif
                    " class="rounded-full w-10 h-10" alt="Vehicle Image">
                </div>
                <div>                    
                    <p>Vehicle: {{$invoice->booking->vehicle->make}} {{$invoice->booking->vehicle->model}}</p>
                    <p>Pickup: {{$invoice->booking->pickup}} {{ explode(' ',$invoice->booking->pickup_time)[0]}}</p>
                    <p>Dropoff: {{$invoice->booking->dropoff}} {{ explode(' ',$invoice->booking->returned_on ?? $invoice->booking->dropoff_time)[0]}}</p>
                </div>
            </td>

            <td class="px-6 py-4">
                @if($invoice->reason == 'rental_payment')
                    Rental Payment
                @else
                    $invoice->reason
                @endif
            </td>
            
            <td class="px-6 py-4">
                ${{$invoice->amount}}
            </td>

            <td class="px-6 py-4 text-red-600">
                @if($invoice->paid)
                    <span class="bg-green-600 py-2 px-3 rounded-full text-white">Paid</span>
                @else
                    <span class="bg-red-600 py-2 px-3 rounded-full text-white">Unpaid</span>
                @endif
            </td>

            <td class="px-6 py-4">
                @if(!$invoice->paid)
                    <a href="/invoices/{{$invoice->id}}/pay" class="bg-green-600 rounded-full py-2 px-3 text-white text-center">Pay</a>
                @else
                    <p>-</p>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">No Invoices Found</div>
@endif