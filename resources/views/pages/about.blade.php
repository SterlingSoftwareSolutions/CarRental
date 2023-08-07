<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @include('layouts.navigation')
</head>

<body>
    <div>

        <!-- Car and Abous us Row -->

        <img src="{{ URL('images/Group 180.png') }}">

        <div class="flex flex-col items-center md:flex-col lg:flex-row">
            <img src="{{ URL('images/greencar.png') }}">
            <div class="w-full flex-col flex items-center justify-center">
                <h1 class="text-green-700 font-bold text-4xl md:text-5xl text-center pb-5">About Us</h1>
                <p class="text-gray-500 md:text-3xl  lg:text-4xl mt-10 md:w-5/6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate.
                </p>
            </div>
        </div>

        <!-- Car and Abous us Row -->

        <!-- We care about your Safety part-->

        <div class="w-full flex-col flex items-center justify-center mt-5">
            <h1 class="text-green-700 font-bold text-4xl md:text-5xl text-center pb-5">We Care About Your Safety</h1> <!-- Increase the heading size for larger screens -->
            <p class="text-gray-500 md:text-3xl pb-5 text-center w-10/12 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
        </div>

        <!-- We care about your Safety -->

        <!--Hover related Images part -->

        <div class="flex flex-col items-center pb-12 md:flex-row md:justify-center  lg:mr-0 md:mr-16 sm:mr-0">

            <!-- hover row 1-->

            <div class="relative group mx-2  mb-32 md:mb-0">
                <img src="{{ URL('images/Group 148.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 z-10 relative">
                <div class="absolute top-0 lg:left-0 md:left-4 sm:left-0 w-full bg-green-800 rounded-2xl flex flex-col justify-end " style="margin-top: 100px; height: 100%; transition: height 0.3s; overflow: hidden; ">
                    <div class="relative">
                        <h1 class="text-white text-center">Deals for every budget</h1>
                        <h1 class="md:block lg:hidden text-white text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur</h1>
                    </div>
                    <!--
We used md:block to show the second <h1> element on medium screens (md).
We used lg:hidden to hide the second <h1> element on large screens (lg).
-->

                </div>
            </div>
            <!-- hover row 1 end -->

            <!-- hover row 2-->
            <div class="relative group mx-2 mb-32 md:mb-0">
                <img src="{{ URL('images/Group 149.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 z-10 relative">
                <div class="absolute top-0  lg:left-0 md:left-4 sm:left-0 w-full bg-green-800 rounded-2xl flex flex-col justify-end " style="margin-top: 100px; height: 100%; transition: height 0.3s; overflow: hidden;">
                    <div class="relative">
                        <h1 class="text-white text-center">Deals for every budget</h1>
                        <h1 class="md:block lg:hidden text-white text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur</h1>
                    </div>

                </div>
            </div>
            <!-- hover row 2 end-->

            <!-- hover row 3-->
            <div class="relative group mx-2  mb-32 md:mb-0">
                <img src="{{ URL('images/Group 150.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 z-10 relative">
                <div class="absolute top-0  lg:left-0 md:left-4 sm:left-0 w-full bg-green-800 rounded-2xl flex flex-col justify-end" style="margin-top: 100px; height: 100%; transition: height 0.3s; overflow: hidden;">
                    <div class="relative">
                        <h1 class="text-white text-center">Deals for every budget</h1>
                        <h1 class="md:block lg:hidden text-white text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur</h1>
                    </div>


                </div>
            </div>
            <!-- hover row 3-->

            <!-- hover row 4-->
            <div class="relative group">
                <img src="{{ URL('images/Group 156.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 z-10 relative">
                <div class="absolute top-0  lg:left-0 md:left-4 sm:left-0 w-full bg-green-800 rounded-2xl flex flex-col justify-end" style="margin-top: 100px; height: 100%; transition: height 0.3s; overflow: hidden;">
                    <div class="relative">
                        <h1 class="text-white text-center">Deals for every budget</h1>
                        <h1 class="md:block lg:hidden text-white text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur</h1>
                    </div>

                </div>
            </div>

            <!-- hover row 4 end-->
        </div>

        <!-- Our Trusted Brand  Part-->

        <div class="w-full flex-col flex items-center justify-center mt-20">
            <h1 class="text-green-700 font-bold text-4xl md:text-4xl text-center pb-2">Our Trusted Brands</h1> <!-- Increase the heading size for larger screens -->
            <p class="text-gray-500 md:text-3xl pb-16 text-center w-10/12 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
        </div>
        <!-- Our Trusted Brand  Part End-->

        <!-- Vehicle Icon Part-->
        <div class="flex flex-col md:flex-row justify-center mb-14 w-full ">
            <img src="{{ URL('images/Group 151.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
            <img src="{{ URL('images/Group 152.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
            <img src="{{ URL('images/Group 153.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
            <img src="{{ URL('images/Group 154.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
        </div>
        <!-- Vehicle Icon Part End-->

    </div>
    @include('layouts.footer')

</body>

</html>