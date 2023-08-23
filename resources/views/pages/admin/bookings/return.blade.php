<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">
        <div class="mt-10">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Booking</h1>
            <div class="relative shadow-md sm:rounded-lg bg-white ">
                <!-- booking List  -->
                <div class="overflow-auto">
                    <x-bookings :bookings="[$booking]"/>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>