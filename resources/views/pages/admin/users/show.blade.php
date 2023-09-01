<x-app-layout>

    <!-- Side Bar  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">

        <!-- USER INFO -->
        <div class="">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">{{$user->first_name}} {{$user->last_name}}'s
                Profile</h1>
            <div class="overflow-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">

                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mobile
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>

                            <th scope="col" class="px-6 py-3">
                                City
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Zip
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Created Date
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <span>Actions</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="me-3">
                                        @if(isset($user) && isset($user->images) && $user->images->count() > 0)
                                        <img src="{{ Storage::url($user->images[0]->file_path) }}" alt="User Image" class="object-cover w-10 h-10 rounded-full">
                                        @else
                                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2080&q=80" alt="User Image" class="object-cover w-10 h-10 rounded-full">
                                        @endif
                                    </div>
                                    <div>
                                        <p> {{ $user['first_name'] }} {{ $user['last_name'] }}</p>
                                    </div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $user['mobile'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user['Address_1'] }} {{ $user['Address_2'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user['city'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user['zip'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user['email'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user['created_at'] }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="/admin/users/{{ $user['id']}}/edit" class="w-full px-4 py-3 text-center text-white bg-blue-600 rounded-full md:w-auto">Edit</a>
                                <form action="/admin/user/{{ $user['id'] }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-2 text-center text-white bg-red-600 rounded-full" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FINES & TOLLS -->
        <div class="">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Fines & Tolls</h1>
            <div class="overflow-auto">
                <x-surcharges :surcharges="$user->surcharges" :return="false"/>
            </div>
        </div>

        <!-- BOOKING HISTORY -->
        <div class="">
            <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Booking History</h1>
            <div class="overflow-auto">
                <x-bookings :bookings="$user->bookings"/>
            </div>
        </div>

    </div>

</x-app-layout>