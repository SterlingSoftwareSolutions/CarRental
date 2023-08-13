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
    @include('layouts.navigation')
    <!-- end navigation -->

    <!-- banner section -->
    <div class="relative -z-30">
        <img src="{{ URL('images/Group 180.png')}}" alt="" srcset="">
        <h1 class="absolute top-60 left-60 text-white text-4xl font-bold inline-block" text-4xl">Find Your Dream Ride</h1>
    </div>
    <!-- end banner section -->

    <!-- filtering section -->
    <div class="flex justify-center md:grid md:grid-flow-row -mt-2 z-10">
        <div class="flex flex-col md:flex-row border-t-8 border-[#398564] bg-[#ECE3E3] md:justify-center w-full">
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Figma</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Framer</li>
                    <li>Sketch</li>
                    <li>Invision Studio</li>
                    <li class="active">Figma</li>
                    <li>Adobe XD</li>
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Figma</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Framer</li>
                    <li>Sketch</li>
                    <li>Invision Studio</li>
                    <li class="active">Figma</li>
                    <li>Adobe XD</li>
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Figma</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Framer</li>
                    <li>Sketch</li>
                    <li>Invision Studio</li>
                    <li class="active">Figma</li>
                    <li>Adobe XD</li>
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Figma</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Framer</li>
                    <li>Sketch</li>
                    <li>Invision Studio</li>
                    <li class="active">Figma</li>
                    <li>Adobe XD</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end filtering section -->

    <!-- car list -->
    <div class="grid justify-center items-center p-4">
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($vehicles as $vehicle)
            <!-- Repeat this section for each car item -->
            <div class="bg-[#F8FFF2] grid p-4">
                <img class="rounded h-56" src="{{ Storage::url($vehicle->images[0]->file_path) }}">
                <div class="flex justify-between items-center p-4">
                    <div class="flex w-4/6">
                        <div class="bg-[#F8FFF2] grid">
                            <h1>{{ $vehicle['make']}} {{ $vehicle['model']}}</h1>
                            <div class="flex items-center space-x-1">
                                @php
                                $rating = $vehicle['rating'];
                                $maxRating = 5; // Maximum rating value (number of stars)
                                @endphp

                                @for ($i = 1; $i <= $maxRating; $i++) <svg class="w-4 h-4 {{ $i <= $rating ? 'text-yellow-300' : 'text-gray-300 dark:text-gray-500' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    @endfor
                            </div>

                        </div>
                    </div>
                    <div class="bg-emerald-600 px-1 rounded">
                        <h1 class="text-white">$ {{ $vehicle['price']}} /hour</h1>
                    </div>
                </div>
                <div class="flex justify-between items-center p-4">
                    <div class="grid w-6/6 text-center">
                        <img src="{{ URL('images/seat-belt.png') }}" class="mx-auto">
                        <h1 class="text-center text-[#317256] font-semibold mt-2">{{ $vehicle['passengers']}} Passengers</h1>
                    </div>

                    <div class="grid w-6/6 text-center">
                        <img src="{{ URL('images/luggage.png')}}" class="mx-auto">
                        <h1 class="text-center text-[#317256] font-semibold mt-2">{{ $vehicle['luggage']}} Luggages</h1>
                    </div>
                    <div class="grid w-6/6 text-center">
                        <img src="{{ URL('images/manual-transmission.png')}}" class="mx-auto">
                        <h1 class="text-center text-[#317256] font-semibold mt-2">{{ $vehicle['transmission']}}</h1>
                    </div>
                </div>
                <div class="flex justify-center items-center p-4">
                    <a href="{{ route('booknow', ['id' => $vehicle['id']]) }}" class="text-white bg-emerald-600 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 hover:text-white rounded text-lg">Book Now</a>
                </div>


            </div>
            <!-- End of repeating section -->

            @endforeach
        </div>
    </div>
    <!-- end car list -->

    <!-- start navigation -->
    <div class="-mt-30">
        @include('layouts.footer')
    </div>
    <!-- end navigation -->

</body>

</html>