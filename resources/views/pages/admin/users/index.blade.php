<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">

        <!-- Top Grid  -->
        <div class="grid gap-10 lg:grid-cols-4 ">
            <!-- Total Users  -->
            <div class="grid grid-cols-2 p-4 bg-white rounded-lg ">
                <div class="">
                    <p class="text-gray-500">Users</p>
                    <p class="text-2xl font-bold text-gray-600">
                        @php
                        echo count($users);
                        @endphp
                    </p>
                    <p class="text-sm text-gray-400 ">Total Users</p>
                </div>

                <div class="flex justify-end">
                    <svg class="p-3 rounded-md w-11 h-11 text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

            <!-- Active Users  -->
            <div class="grid grid-cols-2 p-4 bg-white rounded-lg">
                <div class="">
                    <p class="text-gray-500">Active Users</p>
                    <p class="text-2xl font-bold text-gray-600">@php
                        echo count($users);
                        @endphp</p>
                    <p class="text-sm text-gray-400 ">Active for today</p>
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

                <!-- User List  -->
                <div class=" overflow-auto max-h-[600px] ">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    User
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
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
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                    <a href="/admin/users/{{ $user['id']}}/">
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
                                    </a>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $user['role'] }}
                                </td>
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
                                <td class="px-6 py-4 text-center md:text-right">
                                    <div class="flex flex-col justify-center gap-2 md:flex-row md:justify-end">
                                        <a href="/admin/users/{{ $user['id']}}/edit" class="w-full px-3 py-2 text-center text-white bg-blue-600 rounded-full md:w-auto">Edit</a>
                                        <form action="/admin/users/{{ $user['id'] }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-2 text-center text-white bg-red-600 rounded-full" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                        </form>
                                    </div>
                                </td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <a href="/admin/users/create" class="flex justify-end">
                    <x-primary-button class="m-3">
                        {{ __('Add User') }}
                    </x-primary-button>
                </a>

            </div>
        </div>
    </div>

</x-app-layout>