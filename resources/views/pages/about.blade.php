<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @include('layouts.navigation')
</head>

<body>
    <div>

        <!-- car and about us -->
        <div>
            <img src="{{ URL('images/Group 180.png') }}">
        </div>

        <div class="flex md:flex-wrap items-center justify-center p-10">
            <img src="{{ URL('images/greencar.png') }}" class="w-2/6">
            <div class="w-2/6 pl-8">
                <h1 class="text-[#317256] font-bold text-4xl md:text-5xl text-left pb-5">About Us</h1>
                <p class="text-gray-500 md:">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate.
                </p>
            </div>
        </div>

        <!-- end car and about us -->

        <!-- care about safety -->

        <div class="text-center">
            <h1 class="text-5xl font-bold text-[#317256]">We Care About Your Safety</h1>
            <p class="text-lg text-gray-500 mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-center mt-8">
            <div class="relative group mx-2 mb-32 md:mb-0">
                <img src="{{ URL('images/Group 149.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 z-10 relative">
                <div class="absolute top-0 lg:left-0 md:left-4 sm:left-0 w-full bg-[#317256] rounded-2xl flex flex-col justify-end " style="margin-top: 100px; height: 90%; transition: height 0.3s; overflow: hidden; ">
                    <div class="relative">
                        <h1 class="text-white font-bold text-xl text-center pb-7">Deals for every budget</h1>
                    </div>
                </div>
            </div>
            <div class="relative group mx-2 mb-32 md:mb-0">
                <img src="{{ URL('images/Group 149.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 z-10 relative">
                <div class="absolute top-0 lg:left-0 md:left-4 sm:left-0 w-full bg-[#317256] rounded-2xl flex flex-col justify-end " style="margin-top: 100px; height: 90%; transition: height 0.3s; overflow: hidden; ">
                    <div class="relative">
                        <h1 class="text-white font-bold text-xl text-center pb-7">Deals for every budget</h1>
                    </div>
                </div>
            </div>
            <div class="relative group mx-2 mb-32 md:mb-0">
                <img src="{{ URL('images/Group 149.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 z-10 relative">
                <div class="absolute top-0 lg:left-0 md:left-4 sm:left-0 w-full bg-[#317256] rounded-2xl flex flex-col justify-end " style="margin-top: 100px; height: 90%; transition: height 0.3s; overflow: hidden; ">
                    <div class="relative">
                        <h1 class="text-white font-bold text-xl text-center pb-7">Deals for every budget</h1>
                    </div>
                </div>
            </div>
            <div class="relative group mx-2 mb-32 md:mb-0">
                <img src="{{ URL('images/Group 149.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 z-10 relative">
                <div class="absolute top-0 lg:left-0 md:left-4 sm:left-0 w-full bg-[#317256] rounded-2xl flex flex-col justify-end " style="margin-top: 100px; height: 90%; transition: height 0.3s; overflow: hidden; ">
                    <div class="relative">
                        <h1 class="text-white font-bold text-xl text-center pb-7">Deals for every budget</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end care about safety -->

    <div class="text-center mt-28">
        <h1 class="text-5xl font-bold text-[#317256]">Our Trusted Brands</h1>
        <p class="text-lg text-gray-500 mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div class="flex flex-col md:flex-row justify-center mb-14 w-full">
        <img src="{{ URL('images/Group 151.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
        <img src="{{ URL('images/Group 152.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
        <img src="{{ URL('images/Group 153.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
        <img src="{{ URL('images/Group 154.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
    </div>



    <!-- start navigation -->
    <div class="mt-40">
        @include('layouts.footer')
    </div>
    <!-- end navigation -->

</body>

</html>