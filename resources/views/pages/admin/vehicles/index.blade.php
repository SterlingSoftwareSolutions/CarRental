<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">

        <!-- Top Grid  -->
        <div class="grid grid-cols-1 gap-10 md:grid-cols-4">
            <!-- Total Vehicles  -->
            <div class="grid p-4 bg-white rounded-lg lg:grid-cols-2">
                <div class="">
                    <p class="text-gray-500">Vehicles</p>
                    <p class="text-2xl font-bold text-gray-600"> @php
                        echo count($vehicles);
                        @endphp</p>
                    <p class="text-sm text-gray-400 ">Total Vehicles</p>
                </div>

                <div class="flex justify-end mt-4 md:mt-0">
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
                        <form class="">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="w-full p-4 pl-10 text-sm text-gray-500 bg-transparent border-none focus:ring-0" placeholder="Search">
                            </div>
                        </form>
                    </div>



                </div>
                <!-- Vehicle List  -->
                <div class="overflow-auto max-h-[600px] ">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Vehicle
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    VIN
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Reg. No.
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Body Type
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Price
                                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Availability
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <span class="items-center text-center">Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($vehicles as $vehicle)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                    <a href="/admin/vehicles/{{ $vehicle['id']}}">
                                        <div class="flex items-center">
                                            <div class="me-3">
                                                @if(isset($vehicle) && isset($vehicle->images) && $vehicle->images->count() > 0)
                                                <img src="{{ Storage::url($vehicle->images[0]->file_path) }}" alt="vehicle Image" class="w-10 h-10 rounded-full object-cover">
                                                @else
                                                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80" alt="User Image" class="w-10 h-10 rounded-full">
                                                @endif
                                            </div>
                                            <div>
                                                <p>{{ $vehicle['make']}} {{ $vehicle['model']}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $vehicle['vin']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['reg_no']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['body_type']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['color']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['price']}}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $vehicle['availability'] ? 'Available' : 'Not Available' }}

                                </td>
                                <td class="flex flex-col items-center px-6 py-4 md:flex-row md:items-start">
                                    <a href="/admin/vehicles/{{ $vehicle['id']}}/edit" class="bg-[#2563ea] hover:bg-[#77c6fc] p-2 rounded-lg mb-2 md:mb-0 md:mr-2"><img class="w-5 h-5" src="{{ URL('images/editing.png')}}" alt=""></a>
                                    <span class="hidden text-xl md:inline">&nbsp/&nbsp</span>
                                    <form action="/admin/vehicle/{{ $vehicle['id'] }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-[#c81e1e] hover:bg-[#e28c8b] p-2 rounded-lg" onclick="return confirm('Are you sure you want to delete this Vehicle?')"><i class="fa-solid fa-trash-can fa-xl" style="color: #ffffff;"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <a href="/admin/vehicles/create" class="flex justify-end">
                    <x-primary-button class="m-3">
                        {{ __('Add Vehicle') }}
                    </x-primary-button>
                </a>

            </div>
        </div>
    </div>

</x-app-layout>