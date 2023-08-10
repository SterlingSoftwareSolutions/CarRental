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
    <!-- start navigation -->
    @include('components.user-navigation')
    <!-- end navigation -->

    <!-- main Content  -->
    <div class="sm:ml-64">
        <div class="p-6 bg-gray-50">
            <div class="flex items-center justify-start mb-4 rounded border-b-2 border-solid dark:bg-gray-800">
                <h1 class="text-gray-500 font-bold text-right">Vehicle History</h1>
            </div>
            <table class="w-full table-fixed">
                <thead>
                    <tr class="bg-gray-200 h-10">
                        <th>#</th>
                        <th>Vehicle Id</th>
                        <th>Date</th>
                        <th>Vehicle</th>
                        <th>VIN</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b-2 border-solid p-2 text-center">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                    </tr>
                    <tr>
                        <td class="border-b-2 border-solid p-2 text-center">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                    </tr>
                    <tr>
                        <td class="border-b-2 border-solid p-2 text-center">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                    </tr>
                    <tr>
                        <td class="border-b-2 border-solid p-2 text-center">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                    </tr>
                    <tr>
                        <td class="border-b-2 border-solid p-2 text-center">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-6 bg-gray-50">
            <div class="flex items-center justify-start mb-4 rounded border-b-2 border-solid dark:bg-gray-800">
                <h1 class="text-gray-500 font-bold text-right">Fines & Tolls</h1>
            </div>
            <table class="w-full table-fixed">
                <thead>
                    <tr class="bg-gray-200 h-10">
                        <th>#</th>
                        <th>Vehicle Id</th>
                        <th>Date</th>
                        <th>Vehicle</th>
                        <th>VIN</th>
                        <th>Price</th>
                        <th>Toll/Fine</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b-2 border-solid p-2 text-center">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                        <td class="border-b-2 border-solid text-center p-2"></td>
                        <td class="border-b-2 border-solid text-center p-2">
                            <button type="button" class="text-white bg-emerald-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold text-sm px-5 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded">
                                <a class="text-lg">Pay</a>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b-2 border-solid p-2 text-center">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                        <td class="border-b-2 border-solid text-center p-2"></td>
                        <td class="border-b-2 border-solid text-center p-2">
                            <button type="button" class="text-white bg-emerald-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold text-sm px-5 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded">
                                <a class="text-lg">Pay</a>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b-2 border-solid p-2 text-center">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                        <td class="border-b-2 border-solid text-center p-2"></td>
                        <td class="border-b-2 border-solid text-center p-2">
                            <button type="button" class="text-white bg-emerald-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold text-sm px-5 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded">
                                <a class="text-lg">Pay</a>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b-2 border-solid p-2 text-center">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                        <td class="border-b-2 border-solid text-center p-2"></td>
                        <td class="border-b-2 border-solid text-center p-2">
                            <button type="button" class="text-white bg-emerald-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold text-sm px-5 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded">
                                <a class="text-lg">Pay</a>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class=" p-2 text-center border-b-2 border-solid">
                            <img src="{{ URL('images/Rectangle 83.png') }}" alt="" srcset="">
                        </td>
                        <td class="border-b-2 border-solid text-center p-2">#SB123456</td>
                        <td class="border-b-2 border-solid text-center p-2">03/08/2023</td>
                        <td class="border-b-2 border-solid text-center p-2">Toyota Crown</td>
                        <td class="border-b-2 border-solid text-center p-2">A123456789</td>
                        <td class="border-b-2 border-solid text-center p-2">$ 450.00</td>
                        <td class="border-b-2 border-solid text-center p-2"></td>
                        <td class="border-b-2 border-solid text-center p-2">
                            <button type="button" class="text-white bg-emerald-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold text-sm px-5 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded">
                                <a class="text-lg">Pay</a>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>