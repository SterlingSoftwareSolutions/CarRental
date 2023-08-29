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
                            <h2 class="font-bold text-gray-600 uppercase">Total Revenue</h2>
                            <p class="text-3xl font-bold">$3249 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
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
                            <p class="text-3xl font-bold">249 <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></p>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-b-4 border-yellow-600 rounded-lg shadow-xl bg-gradient-to-b from-yellow-200 to-yellow-100">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-5 bg-yellow-600 rounded-full"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold text-gray-600 uppercase">New Users</h2>
                            <p class="text-3xl font-bold">2 <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></p>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-b-4 border-blue-500 rounded-lg shadow-xl bg-gradient-to-b from-blue-200 to-blue-100">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-5 bg-blue-600 rounded-full"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold text-gray-600 uppercase">Server Uptime</h2>
                            <p class="text-3xl font-bold">152 days</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="w-full mt-12">
                    <p class="flex items-center pb-3 text-xl">
                        <i class="mr-3 fas fa-list"></i> Latest Reports
                    </p>
                    <div class="overflow-auto bg-white">
                        <table class="min-w-full bg-white">
                            <thead class="text-white bg-gray-800">
                                <tr>
                                    <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Name</th>
                                    <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Last name</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-left uppercase">Phone</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-left uppercase">Email</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/3 px-4 py-3 text-left">Lian</td>
                                    <td class="w-1/3 px-4 py-3 text-left">Smith</td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 px-4 py-3 text-left">Emma</td>
                                    <td class="w-1/3 px-4 py-3 text-left">Johnson</td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                </tr>
                                <tr>
                                    <td class="w-1/3 px-4 py-3 text-left">Oliver</td>
                                    <td class="w-1/3 px-4 py-3 text-left">Williams</td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 px-4 py-3 text-left">Isabella</td>
                                    <td class="w-1/3 px-4 py-3 text-left">Brown</td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                </tr>
                                <tr>
                                    <td class="w-1/3 px-4 py-3 text-left">Lian</td>
                                    <td class="w-1/3 px-4 py-3 text-left">Smith</td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 px-4 py-3 text-left">Emma</td>
                                    <td class="w-1/3 px-4 py-3 text-left">Johnson</td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                </tr>
                                <tr>
                                    <td class="w-1/3 px-4 py-3 text-left">Oliver</td>
                                    <td class="w-1/3 px-4 py-3 text-left">Williams</td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 px-4 py-3 text-left">Isabella</td>
                                    <td class="w-1/3 px-4 py-3 text-left">Brown</td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>