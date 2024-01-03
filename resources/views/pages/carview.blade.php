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
    <div class="flex flex-wrap h-full md:max-h-full md:justify-center md:items-start">
        <div class="md:w-full lg:w-2/6">
            <!-- image carosol -->
            <div class="border-2 md:mt-[100px] mt-28 md:p-0 p-4 justify-between">
                <div class="mySlides">
                    <img src="{{ Storage::url($vehicle->images[0]->file_path ?? null) }}" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="{{ Storage::url($vehicle->images[1]->file_path ?? null) }}" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="{{ Storage::url($vehicle->images[2]->file_path ?? null) }}" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="{{ Storage::url($vehicle->images[3]->file_path ?? null) }}" style="width:100%">
                </div>

                {{-- <a class="prev md:-ml-6" onclick="plusSlides(-1)">❮</a> --}}
                {{-- <a class="next md:mr-[650px]" onclick="plusSlides(1)">❯</a> --}}

                <div class="flex">
                    <div class="row">
                        <div class="column">
                            <img class="demo cursor" src="{{ Storage::url($vehicle->images[0]->file_path ?? null)}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="{{ Storage::url($vehicle->images[1]->file_path ?? null)}}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="{{ Storage::url($vehicle->images[2]->file_path ?? null)}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="{{ Storage::url($vehicle->images[3]->file_path ?? null)}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                        </div>
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
        <div class="grid w-full grid-flow-row mt-0 md:p-2 md:mt-24 md:w-full lg:w-2/6">
            <!-- pickup foam -->
            <div class="bg-[#F8FFF2] grid md:p-8 p-4">
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
                        <div class="w-full -ml-14 md:ml-0">
                            <input class="w-full border-none rounded-md shadow-md" type="datetime-local" id="pickup_time" min="{{today()->addDay()}}" name="pickup_time">
                        </div>
                    </div>

                    <p class="mt-2 font-semibold text-[#707070]">Drop-off Date & Time</p>

                    <div class="flex items-center justify-center gap-4">
                        <div class="w-full -ml-14 md:ml-0">
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
            <div class="flex items-center justify-center">
                <div class="bg-[#317256] rounded text-center w-full p-4">
                    <h1 class="text-2xl font-semibold text-white">Call Us</h1>
                    <div class="flex items-center justify-center mt-3">
                        <a href="" class="flex hover:underline">
                            <img class="w-10 h-10 " src="{{ URL('images/telephone (1).png')}}" alt="Telephone Icon">&nbsp;
                            <span class="text-3xl font-semibold text-white">+ 8801 738 5678 64</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end conatct number section -->
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