<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">
        
        <!-- Top Grid  -->
        <div class="grid grid-cols-4 gap-10">
            <!-- Total Vehicles  -->
            <div class="grid grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Vehicles</p>
                    <p class="text-gray-600 text-2xl font-bold">89,645</p>
                    <p class="text-gray-400 text-sm ">Total Vehicles</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

            <!-- Active Vehicles  -->
            <div class="grid grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Active Vehicles</p>
                    <p class="text-gray-600 text-2xl font-bold">457</p>
                    <p class="text-gray-400 text-sm ">Active for today</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

            <!-- Booked Vehicles  -->
            <div class="grid grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Booked Vehicles</p>
                    <p class="text-gray-600 text-2xl font-bold">1,058</p>
                    <p class="text-gray-400 text-sm ">Booked for this month</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

            <!-- Type of Vehicles  -->
            <div class="grid grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Vehicle Types</p>
                    <p class="text-gray-600 text-2xl font-bold">8</p>
                    <p class="text-gray-400 text-sm ">Total Vehicle Types</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>