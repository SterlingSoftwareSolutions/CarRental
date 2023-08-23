<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">

        <!-- Top Grid  -->
        <div class="grid grid-cols-4 gap-10">
            <!-- Total bookings  -->
            <div class="grid lg:grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">bookings</p>
                    <p class="text-gray-600 text-2xl font-bold"> @php
                        // echo count($bookings);
                        @endphp</p>
                    <p class="text-gray-400 text-sm ">Total bookings</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-red-500 text-sm">get 2 more days to return</p>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Pay</button>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-green-500 text-sm">return before 1 day</p>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500 text-white px-2 py-1 rounded">Refund</button>
                </div>
            </div>

        </div>

        <div class="mt-10">
            <div class="relative shadow-md sm:rounded-lg bg-white ">
                <div class="flex justify-end items-center">
                    <div>
                        <!-- Search bar  -->
                        <form class="">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="border-none w-full p-4 pl-10 text-sm text-gray-500 bg-transparent focus:ring-0" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- return List  -->
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-md rounded">
                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Username</th>
                            <th scope="col" class="px-6 py-3">Vehicle Name</th>
                            <th scope="col" class="px-6 py-3">Vehicle Type</th>
                            <th scope="col" class="px-6 py-3">Rental Date</th>
                            <th scope="col" class="px-6 py-3">Return Date</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($vehicles as $vehicle) --}}
                        <tr class="bg-white">
                            <td class="px-6 py-4">
                                <select class="w-full border rounded p-2">
                                    <option value="Example">Example</option>
                                </select>
                            </td>
                            <td class="px-6 py-4">
                                <select class="w-full border rounded p-2">
                                    <option value="Example">Example</option>
                                </select>
                            </td>
                            <td class="px-6 py-4">
                                <select class="w-full border rounded p-2">
                                    <option value="Example">Example</option>
                                </select>
                            </td>
                            <td class="px-6 py-4">
                                <input class="w-28 rounded-md border-none shadow-md" type="datetime-local" name="rental_time" id="rental_time">
                            </td>
                            <td class="px-6 py-4">
                                <input class="w-28 rounded-md border-none shadow-md" type="datetime-local" name="return_time" id="return_time">
                            </td>
                            <td class="px-6 py-4">
                                {{-- <button type="submit" class="bg-gray-500 text-white px-2 py-1 rounded">Edit</button> --}}
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>