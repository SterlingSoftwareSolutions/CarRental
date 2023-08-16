@php
$user = Auth::user();
@endphp
<div class="px-6 pt-3 sm:ml-64">
    <div class="grid grid-cols-1 gap-4 mb-4">
        <div class="h-24 bg-gray-50 dark:bg-white rounded-2xl items-center drop-shadow-lg flex px-4 mt-24">

            <div class="w-5/6">
                <!-- Search bar  -->
                <form class="">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 ml-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="border-none w-full p-4 pl-10 text-sm text-white bg-transparent focus:ring-0" placeholder="Search" required>
                </form>
            </div>

            <div class="w-1/6 flex">
                <div class="w-1/5">

                </div>
                <div class="w-1/5">

                </div>
                <div class="w-1/5">

                </div>
                <div class="w-1/5">

                </div>
                <div class="w-1/5">
                    <!-- Profile imgage  -->
                    <img src="{{ Storage::url($user->images[0]->file_path ?? null) }}" class="rounded-full w-14 h-14 object-cover cursor-pointer" alt="Logo Image" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My Profile</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Billings</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                            </li>
                        </ul>
                    </div>

                    <!-- This form is to send the post request to the logout route  -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>