<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">
        <div class="mt-7">

            <!-- booking List  -->
            <h1 class="p-4 font-semibold text-lg text-[#707070]">Booking</h1>
            <div class="overflow-auto">
                <x-bookings :bookings="[$booking]" :return="false"/>
            </div>



            <div class="p-4 bg-white border-b mt-7 gap-2 mb-3">
                <h1 class="font-semibold text-lg text-[#707070] mb-3">Return Vehicle</h1>
                <form class="flex flex-col gap-2 w-full" id="return_form" method="post" action="/admin/bookings/{{$booking->id}}/return">
                    @csrf
                    @php
                        $returned_on_date = new DateTime($returned_on);
                    @endphp
                    <h1>Vehicle Return Date:</h1>
                    <input class="rounded-full w-full" type="date" name="returned_on" value="{{$returned_on->format('Y-m-d')}}" id="return_form_date">
                    <div class="flex justify-end gap-1">
                        <button class="bg-blue-600 text-white py-2 px-3 rounded-full">Update</button>
                    </div>
                </form>
            </div>
            
            <div class="p-4 bg-white border-b gap-2 mt-7">
                <h1 class="font-semibold text-lg text-[#707070] mb-3">Confirmation</h1>
                <form class="flex flex-col gap-2 w-full" id="return_form" method="post" action="/admin/bookings/{{$booking->id}}/return_confirm">
                    @csrf

                    {{-- CASE --}}
                    @if($case == 'early')
                        <p>Case: <span class="text-blue-600">Vehicle Returned Early</span></p>
                    @elseif($case == 'late')
                        <p>Case: <span class="text-red-600">Vehicle Returned Late</span></p>
                    @elseif($case == 'ontime')
                        <p>Case: <span class="text-green-600">Vehicle Returned On Time</span></p>
                    @endif

                    {{-- Info --}}
                    <p>Duration: <span class="text-gray-600">{{$actual_duration}} Days</span></p>
                    <p>Amount: <span class="text-gray-600">${{$actual_amount}}</span></p>
                    <p>Paid: <span class="text-gray-600">${{$paid_amount}}</span></p>
                    <p>Due: <span class="text-gray-600">${{$due_amount}}</span></p>
                    <input type="hidden" name="returned_on" value="{{$returned_on->format('Y-m-d')}}">

                    {{-- Charge --}}
                    @if($due_amount > 0)
                        <h1>Charge Amount:</h1>
                        <input type="hidden" name="action" value="charge">
                        <input class="rounded-full w-full" type="number" name="amount" value="{{$due_amount}}">
                    {{-- Refund --}}
                    @elseif($due_amount < 0)
                        <input type="hidden" name="action" value="refund">
                        <h1>Refund Amount:</h1>
                        <input class="rounded-full w-full" type="number" name="amount" value="{{-$due_amount}}">
                    {{-- None --}}
                    @elseif($due_amount == 0)
                        <input type="hidden" name="action" value="none">
                        <input class="rounded-full w-full" type="hidden" name="amount" value="0">
                        <h1 class="text-center">No Amount Due</h1>
                    @endif
                    <div class="flex justify-end gap-1">
                        <button class="bg-red-600 text-white py-2 px-3 rounded-full">Confirm</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</x-app-layout>