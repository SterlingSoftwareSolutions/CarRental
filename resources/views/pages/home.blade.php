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
    @php
    $currentRoute = Route::currentRouteName(); // Get the current route name
    $loggedIn = auth()->check(); // Check if the user is logged in
    @endphp


  @if ($currentRoute === 'login' && !$loggedIn)

    <x-modal :name="true" :show="true" :maxWidth="'3xl'">
        <div class="h-full">
            @include('auth.login')
        </div>
    </x-modal>
    @elseif ($currentRoute === 'register' && !$loggedIn)
    <x-modal :name="true" :show="true" :maxWidth="'3xl'">
        <div class="h-full">
            @include('auth.register')
        </div>
    </x-modal>
    @elseif (!$loggedIn)
    <x-modal :name="true" :show="true" :maxWidth="'3xl'">
        <div class="h-full">
            @include('auth.login')
        </div>
    </x-modal>
    @endif

    <!-- start navigation -->
    @include('layouts.navigation')
    <!-- end navigation -->

    <!-- main home banner  -->
    <div class="main-banner flex justify-right items-center px-4 py-8 md:py-22">
        <div class="grid justify-center items-center align-middle md:pl-32 pl-1">
            <h1 class="text-white text-3xl md:text-5xl font-bold mb-2 md:mb-4">Your Key to <span class="text-amber-600">Unforgettable</span> Journeys</h1>
            <p class="text-white text-sm md:text-lg font-bold ">Rent a Car for Your Next Adventure with Our Convenient <br class="hidden md:inline"> and Reliable Services</p>
            <div class="flex flex-col md:flex-row gap-4 mt-12 md:mt-10 md:w-1/2">
                <div class="grid bg-black rounded-lg search-foam w-full lg:w-auto">
                    <div class="text-center">
                        <p class="text-white text-sm md:text-lg font-bold mt-2 md:mt-4">Ready to hit the road?</p>
                    </div>
                    @php
                        $filters = App\Http\Controllers\VehiclesController::filters();
                    @endphp
                    <form action="/carlist">                           
                        <label class="font-bold text-[#707070]" for="">Make</label>
                        <select class="w-full h-12 mt-2 rounded-md border-none" name="make" id="cars">
                            <option value="">All Makes</option>
                            @foreach($filters['makes'] as $opt)
                            <option value="{{$opt}}" @if(Request()->make == $opt) selected @endif>{{$opt}}</option>
                            @endforeach
                        </select>
                        <label class="font-bold text-[#707070]" for="">Model</label>
                        <select class="w-full h-12 mt-2 rounded-md border-none" name="model" id="cars">
                            <option value="">All Models</option>
                            @foreach($filters['models'] as $opt)
                            <option value="{{$opt}}" @if(Request()->model == $opt) selected @endif>{{$opt}}</option>
                            @endforeach
                        </select>

                        <label class="font-bold text-[#707070]" for="">Body Type</label>
                        <select class="w-full h-12 mt-2 rounded-md border-none" name="body_type" id="cars">
                            <option value="">All Body Types</option>
                            @foreach($filters['body_types'] as $opt)
                            <option value="{{$opt}}" @if(Request()->body_type == $opt) selected @endif>{{$opt}}</option>
                            @endforeach
                        </select>
                        <label class="font-bold text-[#707070]" for="">Transmission</label>
                        <select class="w-full h-12 mt-2 rounded-md border-none" name="transmission" id="cars">
                            <option value="">All Transmissions</option>
                            @foreach($filters['transmissions'] as $opt)
                                <option value="{{$opt}}" @if(Request()->transmission == $opt) selected @endif>{{$opt}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="text-white w-full bg-[#317256] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold text-sm md:text-base py-2 rounded mt-3">
                            <span class="text-base">Search Now</span>
                        </button>
                    </form>
{{--                     <form method="post" action="{{ route('search_vehicle') }}" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <input type="text" hidden name="availability" value="1">
                        <div class="container-search mt-2 md:mt-4">
                            <span class="selected-display text-white" id="destination">Choose Vehicle</span>
                            <select class="w-full text-black h-12 rounded-md border-none" name="make" id="make">
                                <option value="Toyota" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Toyota' ? 'selected' : '' }}>Toyota</option>
                                <option value="BMW" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'BMW' ? 'selected' : '' }}>BMW</option>
                                <option value="Benz" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Benz' ? 'selected' : '' }}>Benz</option>
                                <option value="Audi" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Audi' ? 'selected' : '' }}>Audi</option>
                                <option value="Sedan" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Sedan' ? 'selected' : '' }}>Sedan</option>
                                <option value="Truck" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Truck' ? 'selected' : '' }}>Truck</option>
                                <!-- Add more body types as needed with the same `old()` check -->
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 md:flex-row md:gap-x-4 mt-3 md:mt-5">
                            <div>
                                <p class="mt-2 font-semibold text-[#707070]">Pick-up Date & Time</p>
                                <input class="date-input rounded-md text-sm w-full md:text-base" type="datetime-local" id="pickup_time" name="pickup_time">
                            </div>
                            <div>
                                <p class="mt-2 font-semibold text-[#707070]">Dropp Off Date & Time</p>
                                <input class="date-input rounded-md text-sm w-full md:text-base" type="datetime-local" id="dropoff_time" name="dropoff_time">
                            </div>
                        </div>

                        <div class="flex justify-center mt-4 md:mt-6">
                            <button type="submit" class="text-white w-full bg-[#317256] hover:bg-blue-800 font-bold text-sm md:text-base py-2 rounded">
                                <span class="text-base">Search Now</span>
                            </button>
                        </div>
                    </form>
--}}
                </div>
            </div>
        </div>
    </div>
    <!-- end main home banner  -->

    <!-- why choose us section -->
    <div class="text-center">
        <h1 class="text-3xl md:text-5xl font-bold text-[#317256]">Why Choose Us</h1>
        <p class="text-base md:text-lg text-gray-500 mt-4 md:mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div class="whychoose-section w-full">
        <div class="flex items-center justify-center mt-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a class="flex flex-col items-center justify-center md:flex-row md:max-w-xl">
                    <div class="bg-white rounded-md border-2 border-[#317256] p-4 hover:border-t-8 ">
                        <img class="object-cover w-14 h-14 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg " src="{{ URL('images/car-insurance.png')}}" alt="">
                    </div>
                    <div class="flex flex-col justify-center md:justify-between p-4 leading-normal text-center md:text-left">
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Wide Range of Vehicles</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                    </div>
                </a>
                <a class="flex flex-col items-center justify-center md:flex-row md:max-w-xl">
                    <div class="bg-white rounded-md border-2 border-[#317256] p-4 hover:border-t-8 ">
                        <img class="object-cover w-14 h-14 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/offer.png')}}" alt="">
                    </div>
                    <div class="flex flex-col justify-center md:justify-between p-4 leading-normal text-center md:text-left">
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Competitive Prices</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex items-center justify-center mt-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a class="flex flex-col items-center justify-center md:flex-row md:max-w-xl">
                    <div class="bg-white rounded-md border-2 border-[#317256] p-4 hover:border-t-8 ">
                        <img class="object-cover w-14 h-14 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/tap.png')}}" alt="">
                    </div>
                    <div class="flex flex-col justify-center md:justify-between p-4 leading-normal text-center md:text-left">
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Easy Booking Process</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                    </div>

                </a>
                <a class="flex flex-col items-center justify-center md:flex-row md:max-w-xl">
                    <div class="bg-white rounded-md border-2 border-[#317256] p-4 hover:border-t-8 ">
                        <img class="object-cover w-14 h-14 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/tap (1).png')}}" alt="">
                    </div>
                    <div class="flex flex-col justify-center md:justify-between p-4 leading-normal text-center md:text-left">
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Flexible Rental Options</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end why choose us section -->

    <!-- discover our lates section -->
    <div class="text-center mt-12">
        <h1 class="text-3xl md:text-5xl font-bold text-[#317256]">Discover Our Latest Cars for Rental</h1>
        <p class="text-base md:text-lg text-gray-500 mt-4 md:mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div class="discover-section">
        <div class="flex items-center justify-center">
            <div class=" mb-4 md:mb-0 ">
                <a href="" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div>
                        <img class="hidden md:block object-cover md:h-96 md:w-50 w-full h-full md:rounded-none md:rounded-l-lg mt-12" src="{{ URL('images/Rectangle 27.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div>
                <div class="tab pl-4">
                    <input class="tab-input" id="tab1" type="radio" name="tabs" checked>
                    <label class="tab-label" for="tab1">Features</label>
                    <input class="tab-input" id="tab2" type="radio" name="tabs">
                    <label class="tab-label" for="tab2">Specifications</label>

                    <div id="content1">
                        <div class="px-2 md:px-0 slider">
                            <div class="slides mt-2">
                                @if (isset($vehicles))
                                @foreach ($vehicles as $vehicle)
                                <div class="slide">
                                    <div class="inner_content">
                                        <a href="#" class="flex flex-row items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div>
                                                @if ($vehicle->images->count() > 0)
                                                @php
                                                $firstImage = $vehicle->images[0];
                                                @endphp
                                                <img class="object-cover w-96 md:h-auto md:w-52 md:rounded-none md:rounded-l-lg" src="{{ Storage::url($firstImage->file_path) }}" alt="">
                                                @else
                                                <img class="object-cover w-72 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ asset('path-to-default-image.jpg') }}" alt="Default Image">
                                                @endif
                                            </div>
                                            <div class="flex flex-col justify-between p-2 w-96 h-36 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                                @if (!empty($vehicle['make']) && !empty($vehicle['model']))
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500">{{ $vehicle['make']}} {{ $vehicle['model']}}</h5>
                                                @else
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500">Vehicle Details Missing</h5>
                                                @endif

                                                @if (!empty($vehicle['passengers']))
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $vehicle['passengers']}} Seated Car </p>
                                                @endif

                                                @if (!empty($vehicle['price']))
                                                <p class="mb-3 text-sm font-semibold text-green-500 dark:text-gray-400">$ {{ $vehicle['price']}} p/day </p>
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <p>No vehicles available.</p>
                                @endif

                            </div>
                        </div>
                    </div>
                    <!-- end of section 1 -->
                    <div id="content2">
                        <div class="slider">
                            <div class="slides mt-2">
                                @if (isset($vehicles))
                                @foreach ($vehicles as $vehicle)
                                <div class="slide">
                                    <div class="inner_content">
                                        <a href="#" class="flex flex-row items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div>
                                                @if ($vehicle->images->count() > 0)
                                                @php
                                                $firstImage = $vehicle->images[0];
                                                @endphp
                                                <img class="object-cover w-96 md:h-auto md:w-52 md:rounded-none md:rounded-l-lg" src="{{ Storage::url($firstImage->file_path) }}" alt="">
                                                @else
                                                <img class="object-cover w-72 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ asset('path-to-default-image.jpg') }}" alt="Default Image">
                                                @endif
                                            </div>
                                            <div class="flex flex-col justify-between p-2 w-96 h-36 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                                @if (!empty($vehicle['make']) && !empty($vehicle['model']))
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500">{{ $vehicle['make']}} {{ $vehicle['model']}}</h5>
                                                @else
                                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500">Vehicle Details Missing</h5>
                                                @endif

                                                @if (!empty($vehicle['passengers']))
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $vehicle['passengers']}} Seated Car </p>
                                                @endif

                                                @if (!empty($vehicle['price']))
                                                <p class="mb-3 text-sm font-semibold text-green-500 dark:text-gray-400">$ {{ $vehicle['price']}} p/day </p>
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <p>No vehicles available.</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end discover our lates section -->

    <!-- diverse vehicle section -->
    <div class="text-center mt-12 sm:mt-20">
        <h1 class="text-3xl md:text-5xl font-bold text-[#317256]">Diverse Vehicle Selection for Every Journey</h1>
        <p class="text-base md:text-lg text-gray-500 mt-4 md:mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div id="app" class="w-4/6 mx-auto px-4 md:px-8 py-12 transition-all duration-500 ease-linear">
        <div class="relative">
            <div class="slides-container h-80 flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-4 rounded scroll-smooth before:w-[45vw] before:shrink-0 after:w-[45vw] after:shrink-0 md:before:w-0 md:after:w-0">
                @if (isset($vehicles))
                @foreach ($vehicles as $vehicle)
                <div class="slide aspect-square rounded-lg h-full flex-shrink-0 snap-center overflow-hidden shadow-2xl hover:bg-[#EAFED5] hover:bg-opacity-3=50 ">
                    <img class="w-full" src="{{ Storage::url($firstImage->file_path ?? null) }}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center ">
                        <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">{{ $vehicle['make']}}</h1>
                        <p class="p-2">{{ $vehicle['short_Description']}} </p>
                    </div>
                </div>
                @endforeach
                @else
                <p>No vehicles available.</p>
                @endif
                <!-- Add similar slide elements for the remaining images -->
            </div>
            <div class="absolute top-0 -left-4 h-full items-center">
                <button role="button" class="prev px-2 py-2 rounded-full bg-[#317256] text-neutral-900 group" aria-label="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
            </div>
            <div class="absolute top-0 -right-4 h-full items-center">
                <button role="button" class="next px-2 py-2 rounded-full bg-[#317256] text-neutral-900 group" aria-label="next">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
    <div class="text-center">
        <button type="button" class="text-white bg-[#317256] font-bold hover:bg-blue-800 px-6 py-3 text-center mr-3 md:mr-0 rounded" onclick="window.location.href='{{ route('carlist') }}';">
            View All
        </button>
    </div>
    <!-- end diverse vehicle section -->

    <!-- car rental section -->
    <div class="bg-[#317256] mt-20">
        <div class="flex justify-center mt-4 w-12/12">
            <a href="#" class="flex flex-row items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <a href="#" class="flex flex-col h-full items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div>
                        <img class="object-cover h-96 hidden md:block" src="{{ URL('images/roland-denes-EWf48MRVUNE-unsplash.png')}}" alt="">
                    </div>
                    <div class="pl-5">
                        <img class="object-cover h-96 hidden md:block" src="{{ URL('images/nate-johnston-obOin8-m5sw-unsplash.png')}}" alt="">
                    </div>
                </a>
            </a>
            <a href="#" class="grid items-center md:flex-row md:max-w-xl">
                <div class="grid p-2 md:p-8">
                    <h1 class="text-white font-semibold text-xl md:text-3xl">Car Rental Experts You Trust</h1>
                    <p class="text-white mt-3 md:mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate.</p>
                </div>
                <div class="container mt-3 md:mt-0">
                    <div class="counter-container grid grid-cols-1 md:grid-cols-3">
                        <div class="counter text-center md:last:border-0">
                            <div class="flex">
                                <h3 data-target="12" class="text-[#e0aa87] font-semibold text-2xl md:text-5xl count">0</h3><span class="text-[#e0aa87] font-semibold text-2xl md:text-5xl">+</span>
                            </div>
                            <p class="text-white">Years Experience</p>
                        </div>
                        <div class="counter text-center md:last:border-0">
                            <div class="flex">
                                <h3 data-target="66" class="text-[#e0aa87] font-semibold text-2xl md:text-5xl count">0</h3><span class="text-[#e0aa87] font-semibold text-2xl md:text-5xl">+</span>
                            </div>
                            <p class="text-white">Rental Cars</p>
                        </div>
                        <div class="counter text-center">
                            <div class="flex">
                                <h3 data-target="172" class="text-[#e0aa87] font-semibold text-2xl md:text-5xl count">0</h3><span class="text-[#e0aa87] font-semibold text-2xl md:text-5xl">+</span>
                            </div>
                            <p class="text-white">Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3 ml-8 md:mt-5 pb-5">
                    <button class="bg-white p-2 rounded text-[#317256] font-bold hover:bg-[#e0aa87]" onclick="window.location.href='{{ route('about') }}';">Read More</button>
                </div>
            </a>
        </div>
    </div>
    <!-- end car rental section -->

    <!-- happy customert section -->
    <div class="text-center mt-20">
        <h1 class="text-3xl md:text-5xl font-bold text-[#317256]">Happy Customers, Memorable Journeys</h1>
        <p class="text-base md:text-lg text-gray-500 mt-4 md:mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div class="flex">
        <div id="app" class="max-w-screen-lg mx-auto md:px-8 py-12 transition-all duration-500 ease-linear">
            <div class="content-wrapper flex justify-center w-full">
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
            <img class="object-cover hidden md:block" src="{{ URL('images/Group 126.png')}}" alt="">
        </div>
    </div>
    <!-- happy customert section -->

    <!-- start navigation -->
    <div class="-mt-40">
        @include('layouts.footer')
    </div>
    <!-- end navigation -->


</body>

</html>