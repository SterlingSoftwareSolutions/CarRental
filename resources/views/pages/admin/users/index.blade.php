<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">

        <!-- Top Grid  -->
        <div class="grid lg:grid-cols-4 gap-10 ">
            <!-- Total Users  -->
            <div class="grid grid-cols-2 bg-white p-4 rounded-lg ">
                <div class="">
                    <p class="text-gray-500">Users</p>
                    <p class="text-gray-600 text-2xl font-bold">
                        @php
                        echo count($users);
                        @endphp
                    </p>
                    <p class="text-gray-400 text-sm ">Total Users</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

            <!-- Active Users  -->
            <div class="grid grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Active Users</p>
                    <p class="text-gray-600 text-2xl font-bold">@php
                        echo count($users);
                        @endphp</p>
                    <p class="text-gray-400 text-sm ">Active for today</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="mt-10">
            <div class="relative shadow-md sm:rounded-lg bg-white ">

                <div class="flex justify-end items-center">
                    <div>
                        <!-- Search bar  -->
                        <form class="relative" method="get">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="default-search" name="search" class="border-none w-full p-4 pl-10 text-sm text-gray-500 bg-transparent focus:ring-0" placeholder="Search">
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
                                    <span class="sr-only">Edit</span>

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
                                                <img src="{{ Storage::url($user->images[0]->file_path) }}" alt="User Image" class="rounded-full w-10 h-10 object-cover">
                                                @else
                                                <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2080&q=80" alt="User Image" class="rounded-full w-10 h-10 object-cover">
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
                                <td class="px-6 py-4 text-right">
                                    <a href="/admin/users/{{ $user['id']}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    /
                                    <form action="/admin/user/{{ $user['id'] }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                    </form>
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