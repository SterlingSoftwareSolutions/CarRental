<x-app-layout>
    @include('layouts.user-navigation')
    <!-- main section -->
    <div class="p-6">
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
                    <div>
                        <button class=" m-4 px-4 py-2 bg-main-green rounded-lg text-white" onclick="document.getElementById('add-user-modal')._x_dataStack[0].show = true;">Update User</button>
                    </div>
                </div>
                <!-- fines vehicle list  -->
                <h1 class="p-4 font-semibold text-lg text-[#707070]">Fines & Tolls</h1>
                <div class="">
                    <div class="overflow-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Vehicle Id
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Troll/Fines Price
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Action
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 1; $i++) 
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="me-3">
                                                <img src="{{ URL('images/Rectangle 148.png')}}" class="rounded w-15 h-12" alt="Logo Image" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                                            </div>
                                            <div>
                                                <p>Nissan Sky-liner (Make + Model)</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        #SB123456
                                    </td>
                                    <td class="px-6 py-4">
                                        03/08/2023
                                    </td>
                                    <td class="px-6 py-4">
                                        $ 150.00
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex">
                                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <img class="w-5 h-5" src="{{ URL('images/eye.png')}}" alt="" srcset="">
                                                <span class="sr-only">Icon description</span>
                                            </button>
                                            <button type="button" class="text-white bg-[#08C561] hover:bg-[#4ade80] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <img class="w-5 h-5 mr-2" src="{{ URL('images/credit-card.png')}}" alt="" srcset="">
                                                Pay Now
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end fines vehicle list  -->
                <!-- customer vehicle list  -->
                <h1 class="p-4 font-semibold text-lg text-[#707070] mt-7">Vehicle History</h1>
                <hr>
                <div class=" max-h-96 ">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Vehicle Id
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Vehicle
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    VIN
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Price
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            @for ($i = 0; $i < 1; $i++) <tr class="bg-white border-b">


                                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="me-3">
                                            <img src="{{ URL('images/Rectangle 148.png')}}" class="rounded w-15 h-12" alt="Logo Image" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                                        </div>
                                        <div>
                                            <p>Nissan Sky-liner (Make + Model)</p>
                                        </div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    #SB123456
                                </td>
                                <td class="px-6 py-4">
                                    03/08/2023
                                </td>
                                <td class="px-6 py-4">
                                    Toyota Crown
                                </td>
                                <td class="px-6 py-4">
                                    A123456789
                                </td>
                                <td class="px-6 py-4">
                                    $ 450.00
                                </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <!-- end customer vehicle list  -->
            </div>
        </div>
    </div>

    <x-modal :show="false" :name="true" :id="'add-user-modal'" :maxWidth="'3xl'">
        <section class=" py-1 bg-blueGray-50">
            <div class="w-full lg:w-8/12 lg:h-full px-4 mx-auto mt-6">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                My account
                            </h6>
                        </div>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                        <form>
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                User Information
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            First Name
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="lucky.jesse">
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Last Name
                                        </label>
                                        <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="jesse@example.com">
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Mobile Number
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Email
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                                    </div>
                                </div>
                            </div>

                            <hr class="mt-6 border-b-1 border-blueGray-300">

                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Contact Information
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Address
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            City
                                        </label>
                                        <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="New York">
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Country
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Postal Code
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Postal Code">
                                    </div>
                                </div>
                            </div>

                            <hr class="mt-6 border-b-1 border-blueGray-300">

                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Card Information
                            </h6>
                            <div class="flex flex-wrap">
                                <label class="relative w-full flex flex-col">
                                    <span class="font-bold mb-3">Card number</span>
                                    <input class="rounded-md peer pl-12 pr-2 py-2 border-2 border-gray-200 placeholder-gray-300" type="text" name="card_number" placeholder="0000 0000 0000" inputmode="numeric" pattern="[0-9]*" />
                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                    </svg>
                                </label>

                                <label class="relative flex-1 flex flex-col">
                                    <span class="font-bold mb-3">Expire date</span>
                                    <input class="rounded-md peer pl-12 pr-2 py-2 border-2 border-gray-200 placeholder-gray-300" type="text" name="expire_date" placeholder="MM/YY" />
                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </label>

                                <label class="relative flex-1 flex flex-col">
                                    <span class="font-bold flex items-center gap-3 mb-3">
                                        CVC/CVV
                                        <span class="relative group">
                                            <span class="hidden group-hover:flex justify-center items-center px-2 py-1 text-xs absolute -right-2 transform translate-x-full -translate-y-1/2 w-max top-1/2 bg-black text-white"> Hey ceci est une infobulle !</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </span>
                                    </span>
                                    <input class="rounded-md peer pl-12 pr-2 py-2 border-2 border-gray-200 placeholder-gray-300" type="text" name="card_cvc" placeholder="&bull;&bull;&bull;" />
                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </label>
                            </div>
                            <div>
                                <button class=" m-4 px-4 py-2 bg-main-green rounded-lg text-white">Update Details</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </x-modal>
    <!-- end main section -->
</x-app-layout>