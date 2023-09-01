<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">

        <!-- Top Grid  -->
        <div class="grid grid-cols-1 gap-10 md:grid-cols-4">
            <!-- Total surcharges  -->
            <div class="grid p-4 bg-white rounded-lg lg:grid-cols-2">
                <div class="">
                    <p class="text-gray-500">Fines & Tolls</p>
                    <p class="text-2xl font-bold text-gray-600"> @php
                        echo count($surcharges);
                        @endphp</p>
                    <p class="text-sm text-gray-400 ">Total Fines & Tolls</p>
                </div>

                <div class="flex justify-end">
                    <svg class="p-3 rounded-md w-11 h-11 text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

        </div>

        <div class="mt-10">
            <div class="relative bg-white shadow-md sm:rounded-lg">
                <!-- booking List  -->
                <div class="overflow-auto py-5">
                    <x-surcharges :surcharges="$surcharges"/>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>