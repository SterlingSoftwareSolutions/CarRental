<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">
        <div class="mt-7">

            <!-- booking List  -->
            <h1 class="p-4 font-semibold text-lg text-[#707070]">Booking</h1>
            <div class="overflow-auto">
                <x-bookings :bookings="[$booking]" :return="false"/>
            </div>

            <!-- booking List  -->
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Fines & Tolls</h1>
            <div class="overflow-auto">
                <x-surcharges :surcharges="$booking->surcharges" :return="false"/>
            </div>
        </div>
    </div>

</x-app-layout>