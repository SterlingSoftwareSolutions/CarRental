<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
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
                        <button class=" m-4 px-4 py-2 bg-main-green rounded-lg text-white">Update User</button>
                    </div>
                </div>
                <!-- fines vehicle list  -->
                <h1 class="p-4 font-semibold text-lg text-[#707070]">Fines & Tolls</h1>
                <div class="flex justify-center items-center">
                    <div class=" overflow-auto w-4/6 max-h-96 ">
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

                                @for ($i = 0; $i < 10; $i++) <tr class="bg-white border-b">


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
                                            <button type="button" class="text-white bg-[#08C561] hover:bg-[#4ade80] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <img class="w-5 h-5 mr-2" src="{{ URL('images/credit-card.png')}}" alt="" srcset="">
                                                Pay Now
                                            </button>
                                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <img class="w-5 h-5" src="{{ URL('images/eye.png')}}" alt="" srcset="">
                                                <span class="sr-only">Icon description</span>
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

                            @for ($i = 0; $i < 40; $i++) <tr class="bg-white border-b">


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
    <!-- end main section -->
</body>

</html>