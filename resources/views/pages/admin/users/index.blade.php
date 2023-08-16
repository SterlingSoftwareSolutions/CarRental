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
                                    <a href="/admin/users/{{ $user['id']}}/">
                                        <div class="flex items-center">
                                            <div class="me-3">
                                                @if(isset($user) && isset($user->images) && $user->images->count() > 0)
                                                <img src="{{ Storage::url($user->images[0]->file_path) }}" alt="User Image" class="rounded-full w-10 h-10">
                                                @else
                                                <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2080&q=80" alt="User Image" class="rounded-full w-10 h-10">
                                                @endif
                                            </div>
                                            <div>
                                                <p> {{ $user['first_name'] }} {{ $user['last_name'] }}</p>
                                            </div>
                                        </div>
                                    </a>
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
            </div>

            <div class="w-5/10 mx-auto p-6 m-10 relative shadow-md sm:rounded-lg bg-white  ">
                <div>
                    <h1 class="flex text-gray-500 font-bold text-2xl justify-center py-6">Add a New User</h1>
                </div>
                <form method="POST" action="{{ isset($user_one) ? route('update_user', ['userid' => $user_one->id]) : route('register') }}" enctype="multipart/form-data">
                    @csrf
                    @if(isset($user_one))
                    @method('PUT')
                    @endif
                    <!-- first_name -->
                    <div>
                        <x-input-label for="first_name" :value="__('First Name')" />
                        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name', isset($user_one) ? $user_one->first_name : '')" autofocus autocomplete="first_name" />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

                    <!-- last_name -->
                    <div>
                        <x-input-label for="last_name" :value="__('Last Name')" />
                        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name', isset($user_one) ? $user_one->last_name : '')" autofocus autocomplete="last_name" />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                    <!-- mobile -->
                    <div>
                        <x-input-label for="mobile" :value="__('Mobile')" />
                        <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile', isset($user_one) ? $user_one->mobile : '')" autofocus autocomplete="mobile" />
                        <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                    </div>

                    <!-- Address_1 -->
                    <div>
                        <x-input-label for="Address_1" :value="__('Address 1')" />
                        <x-text-input id="Address_1" class="block mt-1 w-full" type="text" name="Address_1" :value="old('Address_1', isset($user_one) ? $user_one->Address_1 : '')" autofocus autocomplete="Address_1" />
                        <x-input-error :messages="$errors->get('Address_1')" class="mt-2" />
                    </div>

                    <!-- Address_2 -->
                    <div>
                        <x-input-label for="Address_2" :value="__('Address 2')" />
                        <x-text-input id="Address_2" class="block mt-1 w-full" type="text" name="Address_2" :value="old('Address_2', isset($user_one) ? $user_one->Address_2 : '')" autofocus autocomplete="Address_2" />
                        <x-input-error :messages="$errors->get('Address_2')" class="mt-2" />
                    </div>

                    <!-- city -->
                    <div>
                        <x-input-label for="city" :value="__('City')" />
                        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city', isset($user_one) ? $user_one->city : '')" autofocus autocomplete="city" />
                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                    </div>

                    <!-- zip -->
                    <div>
                        <x-input-label for="zip" :value="__('ZIP')" />
                        <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip', isset($user_one) ? $user_one->zip : '')" autofocus autocomplete="zip" />
                        <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                    </div>

                    <!-- driving_license -->
                    <div>
                        <x-input-label for="driving_license" :value="__('Driving License')" />
                        <x-text-input id="driving_license" class="block mt-1 w-full" type="text" name="driving_license" :value="old('driving_license', isset($user_one) ? $user_one->driving_license : '')" autofocus autocomplete="driving_license" />
                        <x-input-error :messages="$errors->get('driving_license')" class="mt-2" />
                    </div>

                    <!-- driving_license_expire_year -->
                    <div>
                        <x-input-label for="driving_license_expire_year" :value="__('Driving License Expiry Year')" />
                        <x-text-input id="driving_license_expire_year" class="block mt-1 w-full" type="text" name="driving_license_expire_year" :value="old('driving_license_expire_year', isset($user_one) ? $user_one->driving_license_expire_year : '')" autofocus autocomplete="driving_license_expire_year" />
                        <x-input-error :messages="$errors->get('driving_license_expire_year')" class="mt-2" />
                    </div>

                    <!-- driving_license_expire_month -->
                    <div>
                        <x-input-label for="driving_license_expire_month" :value="__('Driving License Expiry Month')" />
                        <x-text-input id="driving_license_expire_month" class="block mt-1 w-full" type="text" name="driving_license_expire_month" :value="old('driving_license_expire_month', isset($user_one) ? $user_one->driving_license_expire_month : '')" autofocus autocomplete="driving_license_expire_month" />
                        <x-input-error :messages="$errors->get('driving_license_expire_month')" class="mt-2" />
                    </div>

                    <!-- driving_license_expire_date -->
                    <div>
                        <x-input-label for="driving_license_expire_date" :value="__('Driving License Expiry Date')" />
                        <x-text-input id="driving_license_expire_date" class="block mt-1 w-full" type="text" name="driving_license_expire_date" :value="old('driving_license_expire_date', isset($user_one) ? $user_one->driving_license_expire_date : '')" autofocus autocomplete="driving_license_expire_date" />
                        <x-input-error :messages="$errors->get('driving_license_expire_date')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', isset($user_one) ? $user_one->email : '')" autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <script>
                        function previewImage(event) {
                            var image = document.getElementById('preview');

                            if (event.target.files.length > 0) {
                                image.src = URL.createObjectURL(event.target.files[0]);
                                image.style.display = 'block';
                            } else if ('{{ $user['
                                image '] }}' !== '') {
                                image.src = '{{ asset($user['
                                image ']) }}'; // Set default image path
                                image.style.display = 'block';
                            } else {
                                image.style.display = 'none';
                            }
                        }
                    </script>

                    <!-- Profile Picture -->
                    <div class="mb-6">
                        <label for="image" class="block text-gray-700 font-semibold mb-2">{{ __('Profile Picture')
                            }}</label>
                        <div class="relative rounded-lg border-dashed border-2 border-gray-300 p-6 bg-white">
                            <div class="overflow-hidden bg-cover p-4 bg-white text-center flex flex-col items-center justify-center">
                                <h2 class="mb-2">Preview:</h2>
                                <img id="preview" class="object-cover min-w-[300px] max-w-[300px] min-h-[200px] max-h-[200px]" style="display: none;">
                            </div>

                            <label for="image" class="cursor-pointer text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 48 48">
                                    <path d="M19.406 4L16 7.406l5.297 5.297H8v7.828h5.297L16 25.594 19.406 29l6-6-6-6zm9.188 27.172a6.95 6.95 0 0 0 0-9.84l-2.48-2.48 1.416-1.414 2.478 2.478a4.95 4.95 0 0 1 0 7.007 4.95 4.95 0 0 1-7.008 0l-2.478-2.478-1.414 1.414 2.48 2.48a6.95 6.95 0 0 0 9.838 0z" />
                                    <path d="M24 12a6 6 0 1 1 0 12 6 6 0 0 1 0-12zm0 2a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                                </svg>
                                <p class="mt-1 text-sm text-gray-600">{{ __('Drag and drop an image here or click to
                                    browse.') }}</p>
                            </label>
                            <input id="image" class="hidden" type="file" name="image" onchange="previewImage(event)" />
                        </div>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
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