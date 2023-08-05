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
    @if (!auth()->check())
    <x-modal :name="true" :show="true" :maxWidth="'3xl'">
        <div class=" h-full">
            @include('auth.login')
        </div>
    </x-modal>
    @endif
    <!-- start navigation -->
    @include('layouts.navigation')
    <!-- end navigation -->

    <!-- main home banner  -->
    <div class="main-banner">
        <h1 class="text-white text-5xl font-bold">Your Key to <span class="text-amber-600">Unforgettable</span> Journeys</h1>
        <p class="text-white text-2xl font-medium mt-5">Rent a Car for Your Next Adventure with Our Convenient <br> and Reliable Services</p>
        <div class="grid bg-black search-foam w-auto mt-14">
            <div class="text-center">
                <p class="text-white ">Ready to hit the road?</p>
            </div>
            <!-- There are two dropdowns to show multi-menu support -->
            <div class="container mt-4">
                <div class="wrapper-dropdown" id="dropdown">
                    <span class="selected-display" id="destination">Choose Vehicle</span>
                    <svg class="drop-arrow" id="drp-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-all ml-auto rotate-180">
                        <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <ul class="dropdown">
                        <li class="item">Option 1</li>
                        <li class="item">Option 2</li>
                        <li class="item">Option 3</li>
                        <li class="item">Option 4</li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-x-7 mt-4">
                <div>
                    <input type="text" class="bg-transparent date-input" placeholder="Pick Up Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                </div>
                <div>
                    <input type="text" class="bg-transparent date-input mt-3 md:mt-0" placeholder="Pick Up Time" onfocus="(this.type='time')" onblur="(this.type='text')">
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-x-7 mt-5">
                <div>
                    <input type="text" class="bg-transparent date-input" placeholder="Return Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                </div>
                <div>
                    <input type="text" class="bg-transparent date-input mt-3 md:mt-0" placeholder="Return Time" onfocus="(this.type='time')" onblur="(this.type='text')">
                </div>
            </div>
            <div class="flex justify-center mt-7">
                <button type="button" class="text-white w-3/4 bg-emerald-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold text-sm px-5 py-2 text-center md:w-auto md:mr-3 md:mt-0 md:py-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded">
                    <a class="text-lg">Search Now</a>
                </button>
            </div>
        </div>
    </div>

    <!-- end main home banner  -->

    <!-- why choose us section -->
    <div class="text-center">
        <h1 class="text-5xl font-bold text-emerald-600">Why Choose Us</h1>
        <p class="text-lg text-gray-500 mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div class="whychoose-section">
        <div class="flex items-center justify-center mt-4">
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="bg-white rounded-md border-2 border-emerald-400 p-4 hover:border-t-8 ">
                    <img class="object-cover w-full h-64 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/car-insurance.png')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Wide Range of Vehicles</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="bg-white rounded-md border-2 border-emerald-400 p-4 hover:border-t-8 ">
                    <img class="object-cover w-full h-64 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/car-insurance.png')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Wide Range of Vehicles</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                </div>
            </a>
        </div>
        <div class="flex items-center justify-center mt-10">
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="bg-white rounded-md border-2 border-emerald-400 p-4 hover:border-t-8 ">
                    <img class="object-cover w-full h-64 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/car-insurance.png')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Wide Range of Vehicles</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="bg-white rounded-md border-2 border-emerald-400 p-4 hover:border-t-8 ">
                    <img class="object-cover w-full h-64 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/car-insurance.png')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Wide Range of Vehicles</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                </div>
            </a>
        </div>
    </div>
    <!-- end why choose us section -->

    <!-- discover our lates section -->

    <div class="text-center mt-12">
        <h1 class="text-5xl font-bold text-emerald-600">Discover Our Latest Cars for Rental</h1>
        <p class="text-lg text-gray-500 mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div class="discover-section">
        <div class="flex items-center justify-center">
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div>
                    <img class="object-cover w-full rounded-t-lg h-100 md:h-auto md:w-50 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 27.png')}}" alt="">
                </div>
            </a>
            <div>
                <div class="tab pl-4">
                    <input class="tab-input" id="tab1" type="radio" name="tabs" checked>
                    <label class="tab-label" for="tab1">Features</label>
                    <input class="tab-input" id="tab2" type="radio" name="tabs">
                    <label class="tab-label" for="tab2">Specifications</label>

                    <div id="content1">
                        <div class="pl-4 slider">
                            <div class="slides mt-2">
                                <div class="slide">
                                    <div class="inner_content">
                                        <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div>
                                                <img class="object-cover w-full rounded-t-lg h-95 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 27.png')}}" alt="">
                                            </div>
                                            <div class="flex flex-col justify-between p-2 pr-20 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Toyota Crown</h5>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Four Seated Car </p>
                                                <p class="mb-3 text-sm font-semibold font-normal text-green-500 dark:text-gray-400">$ 100 p/day </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="inner_content">
                                        <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div>
                                                <img class="object-cover w-full rounded-t-lg h-95 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 30.png')}}" alt="">
                                            </div>
                                            <div class="flex flex-col justify-between p-2 pr-20 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Toyota Crown</h5>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Four Seated Car </p>
                                                <p class="mb-3 text-sm font-semibold font-normal text-green-500 dark:text-gray-400">$ 100 p/day </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="inner_content">
                                        <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div>
                                                <img class="object-cover w-full rounded-t-lg h-95 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 31.png')}}" alt="">
                                            </div>
                                            <div class="flex flex-col justify-between p-2 pr-20 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Toyota Crown</h5>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Four Seated Car </p>
                                                <p class="mb-3 text-sm font-semibold font-normal text-green-500 dark:text-gray-400">$ 100 p/day </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of section 1 -->
                    <div id="content2">
                        <div class="pl-10 slider">
                            <div class="slides mt-2">
                                <div class="slide">
                                    <div class="inner_content">
                                        <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div>
                                                <img class="object-cover w-full rounded-t-lg h-95 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 27.png')}}" alt="">
                                            </div>
                                            <div class="flex flex-col justify-between p-2 pr-20 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Toyota Crown</h5>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Four Seated Car </p>
                                                <p class="mb-3 text-sm font-semibold font-normal text-green-500 dark:text-gray-400">$ 100 p/day </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="inner_content">
                                        <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div>
                                                <img class="object-cover w-full rounded-t-lg h-95 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 30.png')}}" alt="">
                                            </div>
                                            <div class="flex flex-col justify-between p-2 pr-20 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Toyota Crown</h5>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Four Seated Car </p>
                                                <p class="mb-3 text-sm font-semibold font-normal text-green-500 dark:text-gray-400">$ 100 p/day </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="slide">
                                    <div class="inner_content">
                                        <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div>
                                                <img class="object-cover w-full rounded-t-lg h-95 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 31.png')}}" alt="">
                                            </div>
                                            <div class="flex flex-col justify-between p-2 pr-20 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Toyota Crown</h5>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Four Seated Car </p>
                                                <p class="mb-3 text-sm font-semibold font-normal text-green-500 dark:text-gray-400">$ 100 p/day </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end discover our lates section -->

    <!-- diverse vehicle section -->
    <div class="text-center mt-12">
        <h1 class="text-5xl font-bold text-emerald-600">Diverse Vehicle Selection for Every Journey</h1>
        <p class="text-lg text-gray-500 mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div id="app" class="max-w-screen-lg mx-auto px-4 md:px-8 py-12 transition-all duration-500 ease-linear">
        <div class="relative">
            <div class="slides-container h-72 flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-2 rounded scroll-smooth before:w-[45vw] before:shrink-0 after:w-[45vw] after:shrink-0 md:before:w-0 md:after:w-0">
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden shadow-xl hover:bg-[#EAFED5] hover:bg-opacity-3=50 ">
                    <img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center ">
                        <div class="flex ml-20">
                            <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">Nimshan</h1>
                        </div>
                        <p class="p-2">Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden shadow-xl hover:bg-[#EAFED5] hover:bg-opacity-3=50 ">
                    <img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center">
                        <div class="flex ml-20">
                            <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">Nimshan</h1>
                        </div>
                        <p class="p-2">Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden shadow-xl hover:bg-[#EAFED5] hover:bg-opacity-3=50 ">
                    <img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center">
                        <div class="flex ml-20">
                            <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">Nimshan</h1>
                        </div>
                        <p class="p-2">Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden shadow-xl hover:bg-[#EAFED5] hover:bg-opacity-3=50 ">
                    <img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center">
                        <div class="flex ml-20">
                            <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">Nimshan</h1>
                        </div>
                        <p class="p-2">Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden shadow-xl hover:bg-[#EAFED5] hover:bg-opacity-3=50 ">
                    <img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center">
                        <div class="flex ml-20">
                            <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10 hover:hide">Nimshan</h1>
                        </div>
                        <p class="p-2">Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 -left-4 h-full items-center hidden md:flex">
                <button role="button" class="prev px-2 py-2 rounded-full bg-emerald-600 text-neutral-900 group" aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>

                </button>
            </div>
            <div class="absolute top-0 -right-4 h-full items-center hidden md:flex">
                <button role="button" class="next px-2 py-2 rounded-full bg-emerald-600 text-neutral-900 group" aria-label="next"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button type="button" class="text-white bg-emerald-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold text-sm px-5 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded">
            <a class="text-lg">+ View All</a>
        </button>
    </div>
    <!-- end diverse vehicle section -->

    <!-- car rental section -->
    <div class="bg-emerald-600 mt-20">
        <div class="flex flex-col items-center justify-center mt-4 md:flex-row">
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div>
                    <img class="object-cover rounded-lg" src="{{ URL('images/roland-denes-EWf48MRVUNE-unsplash.png')}}" alt="">
                </div>
                <div class="pl-5">
                    <img class="object-cover rounded-lg" src="{{ URL('images/nate-johnston-obOin8-m5sw-unsplash.png')}}" alt="">
                </div>
            </a>
            <a href="#" class="items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="grid p-4 md:p-8">
                    <h1 class="text-white font-semibold text-xl md:text-3xl">Car Rental Experts You Trust</h1>
                    <p class="text-white mt-3 md:mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate.</p>
                </div>
                <div class="container mt-3 md:mt-0">
                    <div class="counter-container grid grid-cols-1 md:grid-cols-3">
                        <div class="counter text-center md:last:border-0">
                            <h3 data-target="12" class="text-amber-300 font-semibold text-2xl md:text-5xl count">0</h3>
                            <p class="text-white">Years Experience</p>
                        </div>
                        <div class="counter text-center md:last:border-0">
                            <h3 data-target="62" class="text-amber-300 font-semibold text-2xl md:text-5xl count">0</h3>
                            <p class="text-white">Rental Cars</p>
                        </div>
                        <div class="counter text-center">
                            <h3 data-target="156" class="text-amber-300 font-semibold text-2xl md:text-5xl count">0</h3>
                            <p class="text-white">Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3 ml-8 md:mt-5 pb-5">
                    <button class="bg-white p-2 rounded">+ Read More</button>
                </div>
            </a>
        </div>
    </div>
    <!-- end car rental section -->

    <!-- happy customert section -->
    <div class="text-center mt-20">
        <h1 class="text-5xl font-bold text-emerald-600">Happy Customers, Memorable Journeys</h1>
        <p class="text-lg text-gray-500 mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div class="flex">
        <div id="app" class="max-w-screen-lg mx-auto md:px-8 py-12 transition-all duration-500 ease-linear">
            <div class="content-wrapper">

                <div class="wrapper-for-arrows">
                    <div style="opacity: 0;" class="chicken"></div>
                    <div id="reviewWrap" class="review-wrap">
                        <div id="imgDiv" class="">
                        </div>
                        <div id="personName"></div>
                        <div id="profession"></div>
                        <div id="description" class="-mt-5 h-96 px-12 pb-4">
                        </div>
                    </div>
                    <div id="surpriseMeBtn" class="surprise-me-btn">Surprise me</div>
                    <div class="left-arrow-wrap arrow-wrap">
                        <div class="arrow" id="leftArrow"></div>
                    </div>
                    <div class="right-arrow-wrap arrow-wrap">
                        <div class="arrow" id="rightArrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="app" class="max-w-screen-lg mx-auto px-4 md:px-8 py-12 transition-all duration-500 ease-linear">
            <img class="object-cover" src="{{ URL('images/Group 126.png')}}" alt="">
        </div>
    </div>

    <!-- happy customert section -->

    <!-- start navigation -->
    @include('layouts.footer')
    <!-- end navigation -->

</body>

</html>
