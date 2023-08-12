<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">

        <!-- Top Grid  -->
        <div class="grid grid-cols-4 gap-10">
            <!-- Total Users  -->
            <div class="grid lg:grid-cols-2 bg-white p-4 rounded-lg">
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
                        <form class="">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="border-none w-full p-4 pl-10 text-sm text-gray-500 bg-transparent focus:ring-0" placeholder="Search" required>
                            </div>
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
                                    <div class="flex items-center">
                                        <div class="me-3">
                                            <img src="{{ URL('images/flg_logo11079.png')}}" class="rounded-full w-10 h-10" alt="Logo Image" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
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
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    /
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>



            <div class="w-5/10 mx-auto p-6 m-10 relative shadow-md sm:rounded-lg bg-white  ">
                <div>
                    <h1 class="flex text-gray-500 font-bold text-2xl justify-center py-6">Add a New User</h1>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- first_name -->
                    <div>
                        <x-input-label for="first_name" :value="__('First Name')" />
                        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

                    <!-- last_name -->
                    <div>
                        <x-input-label for="last_name" :value="__('Lasst Name')" />
                        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                    <!-- mobile -->
                    <div>
                        <x-input-label for="mobile" :value="__('Mobile')" />
                        <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autofocus autocomplete="mobile" />
                        <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                    </div>

                    <!-- Address_1 -->
                    <div>
                        <x-input-label for="Address_1" :value="__('Address_1')" />
                        <x-text-input id="Address_1" class="block mt-1 w-full" type="text" name="Address_1" :value="old('Address_1')" required autofocus autocomplete="Address_1" />
                        <x-input-error :messages="$errors->get('Address_1')" class="mt-2" />
                    </div>

                    <!-- Address_2 -->
                    <div>
                        <x-input-label for="Address_2" :value="__('Address_2')" />
                        <x-text-input id="Address_2" class="block mt-1 w-full" type="text" name="Address_2" :value="old('Address_2')" required autofocus autocomplete="Address_2" />
                        <x-input-error :messages="$errors->get('Address_2')" class="mt-2" />
                    </div>

                    <!-- city -->
                    <div>
                        <x-input-label for="city" :value="__('city')" />
                        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                    </div>
                    <!-- zip -->
                    <div>
                        <x-input-label for="zip" :value="__('zip')" />
                        <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')" required autofocus autocomplete="zip" />
                        <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                    </div>
                    <!-- driving_license -->
                    <div>
                        <x-input-label for="driving_license" :value="__('driving_license')" />
                        <x-text-input id="driving_license" class="block mt-1 w-full" type="text" name="driving_license" :value="old('driving_license')" required autofocus autocomplete="driving_license" />
                        <x-input-error :messages="$errors->get('driving_license')" class="mt-2" />
                    </div>
                    <!-- driving_license_expire_year -->
                    <div>
                        <x-input-label for="driving_license_expire_year" :value="__('driving_license_expire_year')" />
                        <x-text-input id="driving_license_expire_year" class="block mt-1 w-full" type="text" name="driving_license_expire_year" :value="old('driving_license_expire_year')" required autofocus autocomplete="driving_license_expire_year" />
                        <x-input-error :messages="$errors->get('driving_license_expire_year')" class="mt-2" />
                    </div>
                    <!-- driving_license_expire_month -->
                    <div>
                        <x-input-label for="driving_license_expire_month" :value="__('driving_license_expire_month')" />
                        <x-text-input id="driving_license_expire_month" class="block mt-1 w-full" type="text" name="driving_license_expire_month" :value="old('driving_license_expire_month')" required autofocus autocomplete="driving_license_expire_month" />
                        <x-input-error :messages="$errors->get('driving_license_expire_month')" class="mt-2" />
                    </div>

                    <!-- driving_license_expire_date -->
                    <div>
                        <x-input-label for="driving_license_expire_date" :value="__('driving_license_expire_date')" />
                        <x-text-input id="driving_license_expire_date" class="block mt-1 w-full" type="text" name="driving_license_expire_date" :value="old('driving_license_expire_date')" required autofocus autocomplete="driving_license_expire_date" />
                        <x-input-error :messages="$errors->get('driving_license_expire_date')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

        </div>
    </div>




</x-app-layout>