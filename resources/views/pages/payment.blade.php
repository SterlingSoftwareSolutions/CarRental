<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
    <!-- start navigation -->
    @include('layouts.navigation')
    <!-- end navigation -->
    <!-- section one -->
    <div class="flex md:flex-wrap md:justify-center md:items-start">
        <div class=" p-4 md:w-full lg:w-4/12 grid grid-flow-row mt-24 sm:mt-18">
            <div class="bg-[#F8FFF2] p-8">
                <!-- car image -->
                <div class="w-full">
                    <img class="w-full" src="{{ URL('images/Rectangle 148.png') }}">
                </div>
                <!-- end car image -->
                <!-- pickup details -->
                <table class="w-full table-fixed mt-5">
                    <tbody>
                        <tr>
                            <td class="border-b-2 border-dotted p-2">Title</td>
                            <td class="border-b-2 border-dotted text-right p-2">2008 Toyota Crown</td>
                        </tr>
                        <tr>
                            <td class="border-b-2 border-dotted p-2">Pick-up Date & Time</td>
                            <td class="border-b-2 border-dotted text-right p-2">10/08/2023 At 7.30</td>
                        </tr>
                        <tr>
                            <td class="border-b-2 border-dotted p-2">Drop-off Date & Time</td>
                            <td class="border-b-2 border-dotted text-right p-2">11/08/2023 At 10.00</td>
                        </tr>
                        <tr>
                            <td class="border-b-2 border-dotted p-2">Total Days</td>
                            <td class="border-b-2 border-dotted text-right p-2">1 Day 3 Hours</td>
                        </tr>
                        <tr>
                            <td class="border-b-2 border-dotted p-2">Pick-up Location</td>
                            <td class="border-b-2 border-dotted text-right p-2">Sydney Airport (Metro), SYD</td>
                        </tr>
                        <tr>
                            <td class="p-2">Drop-off Location</td>
                            <td class="text-right p-2">MCG, Melbourne, Victoria</td>
                        </tr>
                    </tbody>
                </table>
                <!-- end pickup details -->
            </div>
            <div class="border-2 border-[#398564] p-8 rounded-xl mt-6">
                <h1 class="text-center text-[#398564] font-semibold text-lg">Order Summary</h1>
                <!-- order summery -->
                <table class="w-full table-fixed mt-5">
                    <tbody>
                        <tr>
                            <td class="border-b-2 border-dotted p-2">SUBTOTAL</td>
                            <td class="border-b-2 border-dotted text-right p-2">AUD 168.00</td>
                        </tr>
                        <tr>
                            <td class="border-b-2 border-dotted p-2">FINES</td>
                            <td class="border-b-2 border-dotted text-right p-2">AUD 0.00</td>
                        </tr>
                        <tr>
                            <td class="border-b-2 border-dotted p-2">INSURANCE</td>
                            <td class="border-b-2 border-dotted text-right p-2">AUD 100.00</td>
                        </tr>
                        <tr>
                            <td class="p-2 mt-2 font-bold">TOTAL</td>
                            <td class="text-right p-2 font-bold">AUD 268.00</td>
                        </tr>
                    </tbody>
                </table>
                <!-- end order summery -->
            </div>
        </div>
        <div class="md:w-full lg:w-4/12 grid grid-flow-row h-screen mt-24 sm:mt-18">
            <!-- payment foam -->
            <div class="bg-[#F8FFF2] grid md:p-8 md:mt-0">
                <h1 class="text-[#707070] text-base">Let's get your personal account set up.</h1>
                <hr>
                <div class>
                    <form action=" /action_page.php">
                        <h1 class="text-black text-sm">Country <span class="text-red-500">*</span></h1>
                        <select class="w-3/6 rounded-md border-none shadow-md" name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                </div>
                <h1 class="text-[#707070] text-base mt-6">Your Personal Information</h1>
                <hr>
                <div class="flex w-full gap-4 mt-5">
                    <div class="flex-1">
                        <h1 class="text-black text-sm">First Name <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Last Name <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                </div>
                <div class="flex w-full gap-4">
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Mobile Number <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Email <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                </div>
                <div class="flex w-full gap-4">
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Address 1 <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Address 2 <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                </div>
                <div class="flex w-full gap-4">
                    <div class="flex-1">
                        <h1 class="text-black text-sm">City <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Zip/Postal Code <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                </div>
                <h1 class="text-[#707070] text-base mt-8">Driver's License Information</h1>
                <p class="text-[#707070] text-sm">We request this information so on your first rental you can skip the airport counter and pick your car up directly at the lot.</p>
                <hr class="">
                <div class="flex w-full gap-4 mt-5">
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Driver's License Number <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Expired Year (YYYY) <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                </div>
                <div class="flex w-full gap-4">
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Expired Month <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Expired Date (DD) <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                </div>
                <h1 class="text-[#707070] text-base mt-8">Credit Card Information</h1>
                <p class="text-[#707070] text-sm">A credit card is required to keep on file for future reservations, no charge for enrolling. Debit Cards can NOT be used online for enrollment or for card updates for Automobex car Rental.</p>
                <hr class="">
                <div class="flex w-full gap-4 mt-5">
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Driver's License Number <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Expired Year (YYYY) <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                </div>
                <div class="flex w-full gap-4">
                    <div class="flex-1">
                        <h1 class="text-black text-sm">Expired Month <span class="text-red-500">*</span></h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                    <div class="flex-1">
                        <h1 class="text-black text-sm">CVC</h1>
                        <input class="w-full rounded-md border-none shadow-md" type="text" name="" id="">
                    </div>
                </div>
                <div class="flex mt-6">
                    <input type="checkbox" id="demoCheckbox" name="checkbox" value="1">&nbsp
                    <p class="text-[#707070] text-sm">I have read and agree to the Terms and Conditions.</p>
                </div>
                <div class="flex justify-start items-start pt-8 w-4/6">
                    <button class="bg-[#317256] p-3 rounded text-white font-semibold" name="cars" id="cars">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
            <!-- end payment foam -->
        </div>
    </div>
    <!-- end section one -->

    <!-- start navigation -->
    <div class="">
        @include('layouts.footer')
    </div>
    <!-- end navigation -->

</body>

</html>