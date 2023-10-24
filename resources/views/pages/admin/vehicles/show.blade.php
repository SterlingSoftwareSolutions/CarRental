<x-app-layout>

    <!-- Side Bar  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">

        <!-- Vehicle INFO -->
        <div class="overflow-auto max-h-[600px] ">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Vehicle</h1>
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
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="me-3">
                                    @if(isset($vehicle) && isset($vehicle->images) && $vehicle->images->count() > 0)
                                    <img src="{{ Storage::url($vehicle->images[0]->file_path) }}" alt="vehicle Image" class="w-10 h-10 rounded-full">
                                    @else
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80" alt="User Image" class="w-10 h-10 rounded-full">
                                    @endif
                                </div>
                                <div>
                                    <p>{{ $vehicle['make']}} {{ $vehicle['model']}}</p>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{ $vehicle['vin']}}
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
                        <td class="flex px-6 py-4">
                            <a href="/admin/vehicles/{{ $vehicle['id']}}/edit" class="bg-[#2563ea] hover:bg-[#77c6fc] p-1 rounded-lg"><img class="w-5 h-5" src="{{ URL('images/editing.png')}}" alt=""></a>
                            <span class="text-xl">&nbsp/&nbsp</span>
                            <form action="/admin/vehicle/{{ $vehicle['id'] }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-[#c81e1e] hover:bg-[#e28c8b] p-1 rounded-lg" onclick="return confirm('Are you sure you want to delete this Vehicle?')"><img class="w-5 h-5" src="{{ URL('images/delete.png')}}" alt=""></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- FINES & TOLLS -->
        <div class="">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Fines & Tolls</h1>
            <div class="overflow-auto">
                <x-surcharges :surcharges="$vehicle->surcharges" :return="false"/>
            </div>
        </div>


        <!-- BOOKING HISTORY -->
        <div>
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Booking History</h1>
            <div class="overflow-auto">
                <x-bookings :bookings="$vehicle->bookings"/>
            </div>
        </div>
    </div>

</x-app-layout>