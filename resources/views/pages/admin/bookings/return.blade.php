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


            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Return</h1>

            <div class="p-4 bg-white border-b flex gap-2">
                <form class="flex flex-col gap-2 w-1/2" id="return_form" method="post" action="/admin/bookings/{{$booking->id}}/return">
                    @csrf
                    @php
                        $returned_on_date = new DateTime($returned_on);
                    @endphp
                    <h1>Booked for {{$booking->duration()}} days</h1>
                    <h1>Returned after {{$booking->duration() - $diff_days}} days</h1>
                    <h1>Difference {{$diff_days}} days</h1>
                    <h1>Original Amount ${{$booking->amount() }}</h1>
                    <h1>Total Amount ${{$booking->vehicle->price * ($booking->duration() - $diff_days) }}</h1>
                    <h1>Paid ${{$booking->transactions->sum('amount')}}</h1>
                    <h1>Remaining ${{($booking->vehicle->price * ($booking->duration() - $diff_days)) - ($booking->vehicle->price * ($booking->duration() - $diff_days))}}</h1>
                    <h1>Vehicle Return Date:</h1>
                    <input class="rounded-full w-full" type="date" name="returned_on" value="{{$returned_on->format('Y-m-d')}}" id="return_form_date">
                    <div class="flex justify-end gap-1">
                        <button type="button" class="border border-gray-600 text-gray-500 py-2 px-3 rounded-full" onclick="hide_return_modal()">Cancel</button>
                        <button class="bg-blue-600 text-white py-2 px-3 rounded-full">Update</button>
                    </div>
                </form>
                @if($case != 'ontime')
                <form class="flex flex-col gap-2 w-1/2" id="return_form" method="post">
                    @csrf
                    <h1>Charge Amount:</h1>
                    <input class="rounded-full w-full" type="number" name="returned_on" value="{{$diff_amount}}" id="return_form_date" disabled>
                    <div class="flex justify-end gap-1">
                        <button type="button" class="border border-gray-600 text-gray-500 py-2 px-3 rounded-full" onclick="hide_return_modal()">Cancel</button>
                        <button class="bg-blue-600 text-white py-2 px-3 rounded-full">Return</button>
                    </div>
                </form>
                @endif
            </div>

        </div>
    </div>

</x-app-layout>