<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">

        <!-- Top Grid  -->
        <div class="grid grid-cols-1 gap-10 md:grid-cols-4">
            <!-- Total bookings  -->
            <div class="grid p-4 bg-white rounded-lg lg:grid-cols-2">
                <div class="">
                    <p class="text-gray-500">bookings</p>
                    <p class="text-2xl font-bold text-gray-600"> @php
                        echo count($bookings);
                        @endphp</p>
                    <p class="text-sm text-gray-400 ">Total bookings</p>
                </div>

                <div class="flex justify-end">
                    <svg class="p-3 rounded-md w-11 h-11 text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

        </div>

        <div class="mt-10">
            <div class="relative bg-white shadow-md sm:rounded-lg ">
                <div class="flex items-center justify-end">
                    <div>
                        <!-- Search bar  -->
                        <form class="relative" method="get">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="default-search" name="search" class="w-full p-4 pl-10 text-sm text-gray-500 bg-transparent border-none focus:ring-0" placeholder="Search">
                        </form>
                    </div>
                </div>

                <!-- booking List  -->
                <div class="overflow-auto">
                    <x-bookings :bookings="$bookings"/>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>