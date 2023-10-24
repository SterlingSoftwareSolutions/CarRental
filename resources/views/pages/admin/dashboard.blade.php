<x-app-layout>
    <x-admin-sidebar />
   
    <!-- main Content  -->
    <div class="sm:ml-64">
        <div>
            <div class="p-6">
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                <div class="p-5 border-b-4 border-green-600 rounded-lg shadow-xl bg-gradient-to-b from-green-200 to-green-100">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-5 bg-green-600 rounded-full"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold text-gray-600 uppercase">Total Bookings</h2>
                            <p class="text-3xl font-bold">
                                {{$totalBooking}}
                                <span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-b-4 border-pink-500 rounded-lg shadow-xl bg-gradient-to-b from-pink-200 to-pink-100">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-5 bg-pink-600 rounded-full"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold text-gray-600 uppercase">Total Users</h2>
                            <p class="text-3xl font-bold">
                                {{$totalUsers}}
                            <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></p>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-b-4 border-yellow-600 rounded-lg shadow-xl bg-gradient-to-b from-yellow-200 to-yellow-100">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-5 bg-yellow-600 rounded-full"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold text-gray-600 uppercase">Active Users</h2>
                            <p class="text-3xl font-bold">
                                {{$totalUsers}}
                                <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span>
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="p-5 border-b-4 border-blue-500 rounded-lg shadow-xl bg-gradient-to-b from-blue-200 to-blue-100">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-5 bg-blue-600 rounded-full"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold text-gray-600 uppercase">Total Vehicles</h2>
                            <p class="text-3xl font-bold">
                                {{ $totalVehicles }}
                                <span class="text-red-600"><i class="fas fa-caret-up"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="w-full mt-12">
                    <p class="flex items-center pb-3 text-xl">
                        <i class="mr-3 fas fa-list"></i> Latest Users
                    </p>
                    <div class="overflow-auto bg-white">
                        <table class="min-w-full bg-white">
                            <thead class="text-white bg-gray-800">
                                <tr>
                                    <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">First Name</th>
                                    <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Last name</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-left uppercase">Phone</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-left uppercase">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($latestUsers as $user)
                                <tr class="bg-white border-b">
                                    <td class="w-1/3 px-4 py-3 text-left">{{ $user->first_name }}</td>
                                    <td class="w-1/3 px-4 py-3 text-left">{{ $user->last_name }}</td>
                                    <td class="w-1/3 px-4 py-3 text-left">{{ $user->mobile }}</td>
                                    <td class="w-1/3 px-4 py-3 text-left">{{ $user->email }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>