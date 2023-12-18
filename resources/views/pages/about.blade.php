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
        <div class="flex flex-wrap items-center justify-center p-8 md:flex-wrap">
            <div class="w-full mb-5 md:w-2/6 md:mb-0">
                <img src="{{ URL('images/aboutus.jpg') }}" class="w-full rounded-xl">
            </div>
            <div class="w-full md:w-2/6 md:pl-8">
                <h1 class="text-center md:text-left pb-5 text-3xl md:text-5xl font-bold text-[#317256] md:-mt-20">About Us</h1>
                <p class="text-gray-500 md:">
                    With a proud legacy spanning over 8 years, AutoMobex has established itself as a trusted name in the car rental industry. We take pride in providing our customers with reliable vehicles, ensuring they embark on their journeys with ease and confidence. Offering a diverse fleet of over 60 cars, we aim to meet the varied needs of our valued customers
                </p>
            </div>
        </div>

        <!-- end car and about us -->

        <!-- care about safety -->

        <div class="text-center">
            <h1 class="text-3xl md:text-5xl font-bold text-[#317256] p-2">What Sets Us Apart</h1>
        </div>

        <div class="flex flex-col items-center justify-center mt-8 md:flex-row md:gap-4">
            <div class="relative mx-2 mb-32 group md:mb-0">
                <img src="{{ URL('images/photo-1.jpg') }}" class="relative mx-auto mb-4 h-[200px] w-[250px] md:mb-20 md:mx-4 rounded-3xl">
                <div class="absolute top-0 lg:left-0 md:left-4 sm:left-0 w-full bg-[#317256] rounded-2xl flex flex-col justify-end" style="margin-top: 100px; height: 90%; transition: height 0.3s; overflow: hidden; z-index: -1;">
                    <div class="relative">
                        <h1 class="text-xl font-bold text-center text-white pb-7">Choose from 60+ Cars, Tailored to Your Budget and Style</h1>
                    </div>
                </div>
            </div>
            <div class="relative mx-2 mb-32 group md:mb-0">
                <img src="{{ URL('images/photo-2.jpg') }}" class="relative mx-auto mb-4 md:mb-20 md:mx-4 h-[200px] w-[250px] rounded-3xl">
                <div class="absolute top-0 lg:left-0 md:left-4 sm:left-0 w-full bg-[#317256] rounded-2xl flex flex-col justify-end" style="margin-top: 100px; height: 90%; transition: height 0.3s; overflow: hidden; z-index: -1;">
                    <div class="relative">
                        <h1 class="text-xl font-bold text-center text-white pb-7">Tailored Solutions with Flexible Rentals – Daily, Weekly, Monthly, to suit your needs</h1>
                    </div>
                </div>
            </div>

            <div class="relative mx-2 mb-32 group md:mb-0">
                <img src="{{ URL('images/photo-3.jpg') }}" class="relative mx-auto mb-4 md:mb-20 md:mx-4 h-[200px] w-[250px] rounded-3xl">
                <div class="absolute top-0 lg:left-0 md:left-4 sm:left-0 w-full bg-[#317256] rounded-2xl flex flex-col justify-end" style="margin-top: 100px; height: 90%; transition: height 0.3s; overflow: hidden; z-index: -1;">
                    <div class="relative">
                        <h1 class="text-xl font-bold text-center text-white pb-7">New to Melbourne? We got you ! At AutoMobex we offer a solution to all to meet your requirements</h1>
                    </div>
                </div>
            </div>

            <div class="relative mx-2 mb-32 group md:mb-0">
                <img src="{{ URL('images/photo-4.jpeg') }}" class="relative mx-auto mb-4 md:mb-20 md:mx-4 h-[200px] w-[250px] rounded-3xl">
                <div class="absolute top-0 lg:left-0 md:left-4 sm:left-0 w-full bg-[#317256] rounded-2xl flex flex-col justify-end" style="margin-top: 100px; height: 90%; transition: height 0.3s; overflow: hidden; z-index: -1;">
                    <div class="relative">
                        <h1 class="text-xl font-bold text-center text-white pb-7">Drive Your Dreams Without Breaking the Bank. Affordable Rentals are front and centre at AutoMobex</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- end care about safety -->

    <div class="text-center md:mt-28">
        <h1 class="text-3xl md:text-5xl font-bold text-[#317256]">Our Trusted Brands</h1>
        {{-- <p class="p-2 mt-6 mb-16 text-gray-500 md:text-lg"></p> --}}
    </div>
    <div id="app" class="w-4/5 px-0 py-0 mx-auto mt-3 transition-all duration-500 ease-linear md:px-8 md:pb-12">
        <div class="relative">
            <div class="slides-container h-full md:h-full flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-4 rounded scroll-smooth before:w-[45vw] before:shrink-0 after:w-[45vw] after:shrink-0 md:before:w-0 md:after:w-0 md:py-12">
                <img src="{{ URL('images/Group 151.png') }}" class="flex-shrink-0 mx-auto my-16 mb-4 rounded-lg shadow-2xl h-60 slide aspect-square h-11/12 snap-center md:mb-0 md:mx-2 lg:w-80 md:w-40 md:m-16">
                <img src="{{ URL('images/Group 152.png') }}" class="flex-shrink-0 mx-auto my-16 mb-4 rounded-lg shadow-2xl h-60 slide aspect-square snap-center md:mb-0 md:mx-2 lg:w-80 md:w-40 md:m-16">
                <img src="{{ URL('images/Group 153.png') }}" class="flex-shrink-0 mx-auto my-16 mb-4 rounded-lg shadow-2xl h-60 slide aspect-square snap-center md:mb-0 md:mx-2 lg:w-80 md:w-40 md:m-16">
                <img src="{{ URL('images/Group 154.png') }}" class="flex-shrink-0 mx-auto my-16 mb-4 rounded-lg shadow-2xl h-60 slide aspect-square snap-center md:mb-0 md:mx-2 lg:w-80 md:w-40 md:m-16">
            </div>
            <div class="absolute top-0 items-center h-full -left-4">
                <button role="button" class="prev px-2 py-2 rounded-full bg-[#317256] text-neutral-900 group" aria-label="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transition-all duration-200 ease-linear group-active:-translate-x-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
            </div>
            <div class="absolute top-0 items-center h-full -right-4">
                <button role="button" class="next px-2 py-2 rounded-full bg-[#317256] text-neutral-900 group" aria-label="next">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transition-all duration-200 ease-linear group-active:translate-x-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
        
    </div>

    <!-- start navigation -->
    <div class="mt-32">
        @include('layouts.footer')
    </div>
    <!-- end navigation -->

</body>

</html>