<!doctype html> <html>

<head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> <link
        rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com"
        crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
        @vite('resources/css/app.css') @vite('resources/js/app.js') </head>

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
            <div class="bg-[#F8FFF2] grid md:p-8 md:mt-0 p-4">
                <h1 class="text-[#317256] font-semibold text-xl">{{ $vehicle['year']}} {{ $vehicle['make']}} {{
                    $vehicle['model']}} {{ $vehicle['body_type']}}</h1>
                <p class="mt-2 font-semibold text-[#707070] whitespace-normal">{{ $vehicle['short_Description']}}</p>
                <div class="flex items-center justify-right">
                    <div class="bg-[#317256] p-2 rounded">
                        <h1 class="text-white">$ {{ $vehicle['price']}} /day</h1>
                    </div>
                </div>
                <form method="post" action="{{ route('bookvehicle') }}">
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
                            <option value="LocationOne">Location One</option>
                            <option value="LocationTwo">Location two</option>
                            <option value="LocationThree">Location Three</option>
                            <option value="LocationFour">Location four</option>
                        </select>

                    </div>

                    <!-- Drop Off Location  -->
                    <div>
                        <p class="mt-2 font-semibold text-[#707070]">Drop-off Location</p>
                        <select class="w-full border-none rounded-md shadow-md" name="dropoff" id="dropoff">
                            <option value="LocationOne">Location One</option>
                            <option value="LocationTwo">Location two</option>
                            <option value="LocationThree">Location Three</option>
                            <option value="LocationFour">Location four</option>
                        </select>
                    </div>

                    <p class="mt-2 font-semibold text-[#707070]">Pick-up Date & Time</p>

                    <div class="flex items-center justify-center w-full gap-4">
                        <div class="w-full -ml-14 md:ml-0">
                            <input class="w-full border-none rounded-md shadow-md" type="datetime-local"
                                id="pickup_time" name="pickup_time">
                        </div>

                    </div>

                    <p class="mt-2 font-semibold text-[#707070]">Drop-off Date & Time</p>

                    <div class="flex items-center justify-center gap-4">
                        <div class="w-full -ml-14 md:ml-0">
                            <input class="w-full border-none rounded-md shadow-md" type="datetime-local"
                                name="dropoff_time" id="dropoff_time">
                        </div>

                    </div>

                    <div class="flex items-center justify-center pt-8">
                        <button type="submit"
                            class="w-full bg-[#317256] p-3 rounded text-white font-semibold hover:bg-[#307449]"
                            name="cars" id="cars">
                            Book Now
                        </button>

                    </div>
                </form>
            </div>
            <!-- end pickup foam -->

            <!-- conatct number section -->
            <div class="flex items-center justify-center mt-4">
                <div class="bg-[#317256] rounded text-center w-10/12 p-4">
                    <h1 class="text-2xl font-semibold text-white">Call Us</h1>
                    <div class="flex items-center justify-center mt-3">
                        <a href="" class="flex hover:underline">
                            <img class="w-10 h-10 " src="{{ URL('images/telephone (1).png')}}"
                                alt="Telephone Icon">&nbsp;
                            <span class="text-3xl font-semibold text-white">+ 8801 738 5678 64</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end conatct number section -->

            {{-- COMMENTS SECTION
            <!-- review section -->
            <div class="p-8">
                <h1>1 Comment</h1>
                <div class="flex items-center space-x-1">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                </div>
            </div>
            <div class="flex items-center justify-center pl-8">
                <p class="text-black"> <span class="text-[#317256]">hasi_nimantha</span> Excellent service, clean cars,
                    and helpful staff. Highly recommend for car rentals</p>
            </div>
            <!-- end review section -->

            <!--  rating foam -->
            <div class="p-8">
                <div>
                    <h1 class="text-lg font-semibold text-gray-500">Add a Review</h1>
                </div>
                <hr class="border-1 border-gary-600">
                <div class="mt-4">
                    <h1 class="text-sm text-gray-500">Your Email Address Will Not Be Published.</h1>
                    <form>
                        <fieldset class="p-0 mt-5">
                            <h1 class="text-sm text-black">Your Ratings <span class="text-red-500">*</span></h1>
                            <span class="p-0 star-cb-group">
                                <input type="radio" id="rating-5" name="rating" value="5" /><label
                                    for="rating-5">5</label>
                                <input type="radio" id="rating-4" name="rating" value="4" /><label
                                    for="rating-4">4</label>
                                <input type="radio" id="rating-3" name="rating" value="3" /><label
                                    for="rating-3">3</label>
                                <input type="radio" id="rating-2" name="rating" value="2" /><label
                                    for="rating-2">2</label>
                                <input type="radio" id="rating-1" name="rating" value="1" /><label
                                    for="rating-1">1</label>
                                <input type="radio" id="rating-0" name="rating" value="0" checked="checked"
                                    class="star-cb-clear" /><label for="rating-0">0</label>
                            </span>
                        </fieldset>
                        <h1 class="text-sm text-black">Name <span class="text-red-500">*</span></h1>
                        <input class="w-full border-none rounded-md shadow-md bg-slate-300" type="text" name="" id="">
                        <h1 class="text-sm text-black">Email <span class="text-red-500">*</span></h1>
                        <input class="w-full border-none rounded-md shadow-md bg-slate-300" type="text" name="" id="">
                        <h1 class="text-sm text-black">Your Review <span class="text-red-500">*</span></h1>
                        <textarea class="w-full border-none rounded-md shadow-md bg-slate-300" name="" id="" cols="30"
                            rows="10"></textarea>
                        <div class="flex items-start justify-start w-4/6 pt-8">
                            <button class="bg-[#317256] p-3 rounded text-white font-semibold" name="cars" id="cars">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end rating foam -->
            COMMENTS SECTION --}}

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
    // Add event listener to the pick-up date & time input
    const pickupTimeInput = document.getElementById('pickup_time');
    pickupTimeInput.addEventListener('input', validatePickupDateTime);

    // Add event listener to the drop-off date & time input
    const dropoffTimeInput = document.getElementById('dropoff_time');
    dropoffTimeInput.addEventListener('input', validateDropoffDateTime);

    function validatePickupDateTime() {
        const selectedPickupTime = new Date(pickupTimeInput.value);
        const currentDate = new Date();

        if (selectedPickupTime < currentDate) {
            alert('Pick-up date and time cannot be in the past.');
            pickupTimeInput.value = ''; // Clear the input
        }
    }

    function validateDropoffDateTime() {
        const selectedDropoffTime = new Date(dropoffTimeInput.value);
        const currentDate = new Date();

        if (selectedDropoffTime < currentDate) {
            alert('Drop-off date and time cannot be in the past.');
            dropoffTimeInput.value = ''; // Clear the input
        }
    }
</script>

        </body>

        </html>