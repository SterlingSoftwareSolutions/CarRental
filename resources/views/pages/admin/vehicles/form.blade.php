<x-app-layout>
    <!-- Side Bar  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">
            <div class="relative p-6 m-10 mx-auto bg-white shadow-md w-5/10 sm:rounded-lg ">
                <div>
                    <h1 class="flex justify-center py-6 text-2xl font-bold text-gray-500" id="addcar">@if(isset($vehicle_one)) Edit Vehicle @else Add Vehicle @endif</h1>
                </div>
                <x-vehicle-form :vehicle_one="$vehicle_one ?? null"/>
            </div>
        </div>
    </div>

</x-app-layout>