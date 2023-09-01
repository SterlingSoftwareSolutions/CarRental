@props([
'surcharges' => [],
'return' => true
])

@if(count($surcharges))
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-2">
                Type
            </th>

            <th scope="col" class="px-6 py-2">
                Date
            </th>

            <th scope="col" class="px-6 py-2">
                Amount
            </th>

            <th scope="col" class="px-6 py-2">
                Notes
            </th>

{{--             <th scope="col" class="px-6 py-2">
                Status
            </th> --}}
        </tr>
    </thead>

    <tbody>
        @foreach ($surcharges as $surcharge)
        <tr class="bg-white border-b">
            <th scope="row" class="px-6 py-4">
                @if($surcharge->type == 'fine')
                    <span class="px-3 py-2 text-red-600 border border-red-600 rounded-full">Fine</span>
                @elseif($surcharge->type == 'toll')
                    <span class="px-3 py-2 text-yellow-600 border border-yellow-600 rounded-full">Toll</span>
                @endif
            </th>

            <td class="px-6 py-4">
                <p>
                    {{ $surcharge->date }}
                </p>
            </td>

            <td class="px-6 py-4">
                <p>
                    ${{ $surcharge->amount }}
                </p>
            </td>

            <td class="px-6 py-4 max-w-[150px]">
                <div class="overflow-auto max-h-[160px]" >
                    <pre>{{ $surcharge->note ?? 'N/A' }}</pre>
                </div>
            </td>

{{--             <td class="px-6 py-4">
                <p>
                    @if($surcharge->paid)
                        <span class="px-3 py-2 text-green-600 border border-green-600 rounded-full">Paid</span>
                    @else
                        <span class="px-3 py-2 text-red-600 border border-red-600 rounded-full">Unpaid</span>
                    @endif
                </p>
            </td> --}}
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

@else
<div class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">No Fines or Tolls Found</div>
@endif