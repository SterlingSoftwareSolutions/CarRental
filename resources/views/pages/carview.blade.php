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
    @vite('resources/css/app.css') @vite('resources/js/app.js')
</head>

<body> <!-- start navigation -->
    @include('layouts.navigation')
    <!-- end navigation -->

    <!-- section one -->
    <div>
        <div>
            *
        </div>
        <div class="mt-24 md:flex max-w-screen-xl mx-auto p-4 gap-4">            
            <div class="md:w-1/2">
                <!-- image carosol -->
                <div class="border-2 p-4 justify-between">
                    <div class="mySlides">
                        <img src="{{ Storage::url($vehicle->images[0]->file_path ?? null) }}" class="w-full aspect-[3/2] object-cover hover:object-contain">
                    </div>

                    <div class="mySlides">
                        <img src="{{ Storage::url($vehicle->images[1]->file_path ?? null) }}" class="w-full aspect-[3/2] object-cover hover:object-contain">
                    </div>

                    <div class="mySlides">
                        <img src="{{ Storage::url($vehicle->images[2]->file_path ?? null) }}" class="w-full aspect-[3/2] object-cover hover:object-contain">
                    </div>

                    <div class="mySlides">
                        <img src="{{ Storage::url($vehicle->images[3]->file_path ?? null) }}" class="w-full aspect-[3/2] object-cover hover:object-contain">
                    </div>

                    <div class="flex">
                        <div class="w-1/4">
                            <img class="demo cursor w-full aspect-[3/2] object-cover" src="{{ Storage::url($vehicle->images[0]->file_path ?? null)}}" onclick="currentSlide(1)">
                        </div>
                        <div class="w-1/4">
                            <img class="demo cursor w-full aspect-[3/2] object-cover" src="{{ Storage::url($vehicle->images[1]->file_path ?? null)}}" onclick="currentSlide(2)">
                        </div>
                        <div class="w-1/4">
                            <img class="demo cursor w-full aspect-[3/2] object-cover" src="{{ Storage::url($vehicle->images[2]->file_path ?? null)}}" onclick="currentSlide(3)">
                        </div>
                        <div class="w-1/4">
                            <img class="demo cursor w-full aspect-[3/2] object-cover" src="{{ Storage::url($vehicle->images[3]->file_path ?? null)}}" onclick="currentSlide(4)">
                        </div>
                    </div>
                </div>
                <!-- end image carosol -->

                <!-- vehicle details section -->
                <div class="flex items-center justify-between p-4">
                    <div class="grid text-center w-6/6">
                        <img src="{{ URL('images/seat-belt.png') }}" class="mx-auto">
                        <h1 class="text-center text-[#317256] font-semibold mt-2">{{ $vehicle['passengers']}} Passengers</h1>
                    </div>

                    <div class="grid text-center w-6/6">
                        <img src="{{ URL('images/luggage.png')}}" class="mx-auto">
                        <h1 class="text-center text-[#317256] font-semibold mt-2">{{ $vehicle['luggage']}} Luggages</h1>
                    </div>
                    <div class="grid text-center w-6/6">
                        <img src="{{ URL('images/manual-transmission.png')}}" class="mx-auto">
                        <h1 class="text-center text-[#317256] font-semibold mt-2">{{ $vehicle['transmission']}}</h1>
                    </div>
                </div>
                <!-- end vehicle details section -->

                <!-- vehicle spesification section -->
                <div class="p-4 md:p-0">
                    <div>
                        <h1 class="text-lg font-semibold text-gray-500">Vehicle Details</h1>
                    </div>
                    <hr class="border-1 border-gary-600">
                    <div class="flex w-full">
                        <div class="flex justify-between w-full">
                            <div class="flex flex-col w-full md:flex-col md:flex-wrap">
                                <div class="flex mt-5 space-y-2 md:space-y-0 md:space-x-10">
                                    <ul>
                                        <li>Make:</li>
                                        <li>Model:</li>
                                        <li>Body Type:</li>
                                        <li>Year:</li>
                                        <li>Fuel:</li>
                                    </ul>
                                    <ul class="pl-16 md:pl-0">
                                        <li>{{ $vehicle['make']}}</li>
                                        <li>{{ $vehicle['model']}}</li>
                                        <li>{{ $vehicle['body_type']}}</li>
                                        <li>{{ $vehicle['year']}}</li>
                                        <li>{{ $vehicle['fuel_type']}}</li>
                                    </ul>
                                </div>
                                <div class="flex pl-0 mt-5 space-y-2 md:space-y-0 md:space-x-12 md:pl-5 md:-ml-5">
                                    <ul>
                                        <li>VIN:</li>
                                        <li>Mileage:</li>
                                        <li>Transmission:</li>
                                        <li>Color:</li>
                                        <li>Doors:</li>
                                    </ul>
                                    <ul class="pl-16 md:pl-0">
                                        <li>{{ $vehicle['vin']}}</li>
                                        <li>{{ $vehicle['mileage']}}</li>
                                        <li>{{ $vehicle['transmission']}}</li>
                                        <li>{{ $vehicle['color']}}</li>
                                        <li>{{ $vehicle['doors']}}</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- end vehicle spesification section -->

                <!-- vehicle description section -->
                <div class="p-4 mt-8 md:p-0">
                    <div>
                        <h1 class="text-lg font-semibold text-gray-500">Vehicle Details</h1>
                    </div>
                    <hr class="border-1 border-gary-600">
                    <div class="mt-4 whitespace-normal">
                        {{ $vehicle['description']}}
                    </div>
                </div>
                <!-- end vehicle description section -->
            </div>
            <div class="md:w-1/2">
                <!-- pickup foam -->
                <div class="bg-[#F8FFF2] flex flex-col p-4 gap-4">
                    <h1 class="text-[#317256] font-semibold text-xl">{{ $vehicle['year']}} {{ $vehicle['make']}} {{
                        $vehicle['model']}} {{ $vehicle['body_type']}}</h1>
                    <p class="mt-2 font-semibold text-[#707070] whitespace-normal">{{ $vehicle['short_Description']}}</p>
                    <div class="flex items-center justify-right">
                        <div class="bg-[#317256] p-2 rounded">
                            <h1 class="text-white">$ {{ $vehicle['price']}} /day</h1>
                        </div>
                    </div>
                    <form method="post" action="{{ route('bookings.store') }}">
                        @csrf
                        @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {!! implode('', $errors->all('<div class="text-red-500">:message</div>')) !!}
                        </div>
                        @endif
                        <input class="hidden" type="text" id="vehicle_id" name="vehicle_id" value="{{$vehicle['id']}}">
                        <!-- Pickup Location  -->
                        <div>
                            <p class="mt-2 font-semibold text-[#707070]">Pick-up Location</p>
                                <select class="w-full border-none rounded-md shadow-md" name="pickup" id="pickup">
                                    <option value="Location One">Location One</option>
                                    <option value="Location Two">Location Two</option>
                                    <option value="Location Three">Location Three</option>
                                    <option value="Location Four">Location Four</option>
                                </select>
                        </div>

                        <!-- Drop Off Location  -->
                        <div>
                            <p class="mt-2 font-semibold text-[#707070]">Drop-off Location</p>
                                <select class="w-full border-none rounded-md shadow-md" name="dropoff" id="dropoff">
                                    <option value="Location One">Location One</option>
                                    <option value="Location Two">Location Two</option>
                                    <option value="Location Three">Location Three</option>
                                    <option value="Location Four">Location Four</option>
                                </select>
                        </div>

                        <p class="mt-2 font-semibold text-[#707070]">Pick-up Date & Time</p>

                        <div class="flex items-center justify-center w-full gap-4">
                            <div class="w-full">
                                <input class="w-full border-none rounded-md shadow-md" type="datetime-local" id="pickup_time" min="{{today()->addDay()}}" name="pickup_time">
                            </div>
                        </div>

                        <p class="mt-2 font-semibold text-[#707070]">Drop-off Date & Time</p>

                        <div class="flex items-center justify-center gap-4">
                            <div class="w-full">
                                <input class="w-full border-none rounded-md shadow-md" type="datetime-local" name="dropoff_time" id="dropoff_time">
                            </div>
                        </div>

                        <div class="flex items-center justify-center pt-8">
                            <button type="submit" class="w-full bg-[#317256] p-3 rounded text-white font-semibold hover:bg-[#307449]" name="cars" id="cars">
                                Book Now
                            </button>
                        </div>
                    </form>
                </div>
                <!-- end pickup form -->

                <!-- conatct number section -->
                <a href="#" class="flex items-center justify-center p-4">
                    <div class="bg-[#317256] rounded text-center w-full p-2">
                        <h1 class="text-xl font-semibold text-white">Call Us</h1>
                        <div class="flex items-center justify-center">
                            <img class="w-8" src="{{ URL('images/telephone (1).png')}}" alt="Telephone Icon">&nbsp;
                            <p class="text-xl font-semibold text-white">+ 8801 738 5678 64</p>
                        </div>
                    </div>
                </a>
                <!-- end conatct number section -->
            </div>
        </div>
    </div>
    <!-- end section one -->
    <!-- end vehicle details section -->

    <!-- start navigation -->
    <div class="mt-20 md:mt-40">
        @include('layouts.footer')
    </div>
    <!-- end navigation -->
    <script>
        // single car view js
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }

        // end single car view js
    </script>
    <script>
        const pickupTimeElement = document.getElementById('pickup_time');
        const dropOffTimeElement = document.getElementById('dropoff_time');

        pickupTimeElement.addEventListener('change', function() {
          const pickupTime = new Date(pickupTimeElement.value);
          pickupTime.setDate(pickupTime.getDate() + 1);
          dropOffTimeElement.min = pickupTime.toISOString().slice(0, 16);
        });
    </script>
</body>
</html>