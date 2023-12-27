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

    <!-- banner section -->
    <div class="relative flex -z-20">
        <img src="{{ URL('images/Group 180.png') }}" alt="">
        <h1 class="absolute pl-0 text-2xl font-bold text-center text-white top-2/4 left-4/12 md:pl-56 md:text-4xl">Find Your Dream Ride</h1>
    </div>



    <!-- end banner section -->

    <!-- filtering section -->

    <script type="text/javascript">
        function getData() {
            return {
                // Data 
                selectedMake: '{{request()->make}}',
                selectedModel: '{{request()->model}}',
                models: [],

                // Functions
                fetchModels() {
                    fetch(`/api/models?make=${this.selectedMake}`)
                        .then((res) => res.json())
                        .then((data) => {
                            this.models = data.models;
                            console.log(this.selectedModel);
                        });
                },
            };
        }

    </script>

    <div class="z-10 flex flex-row items-center justify-center -mt-2 md:grid md:grid-flow-row" x-data="getData()">
        <form>
            <div class="flex flex-col md:flex-row border-t-8 border-[#398564] bg-[#D3D3D3] w-full mx-auto">
                <div class="p-0 dropdown md:p-8">
                    <label class="font-bold text-[#707070]" for="">Make</label>
                    <select class="w-full h-12 mt-2 text-gray-500 border-none rounded-md" name="make" id="cars" onchange="this.form.submit()" x-model="selectedMake">
                        <option value="">All Makes</option>
                        @foreach($filters['makes'] as $opt)
                        <option value="{{$opt}}" @selected(request()->make == $opt)>{{$opt}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="dropdown">
                    <label class="font-bold text-[#707070]" for="">Model</label>
                    <select class="w-full h-12 mt-2 text-gray-500 border-none rounded-md" name="model" id="cars" onchange="this.form.submit()" x-model="selectedModel" x-init="fetchModels()">
                        <option value="">All Models</option>
                        <template x-for="(model, index) in models">
                            <option class="text-sm" x-bind:value="model" :selected="selectedModel == model" x-text="model"></option>
                        </template>
                    </select>
                </div>
                <div class="dropdown">
                    <label class="font-bold text-[#707070]" for="">Body Type</label>
                    <select class="w-full h-12 mt-2 text-gray-500 border-none rounded-md" name="body_type" id="cars" onchange="this.form.submit()">
                        <option value="">All Body Types</option>
                        @foreach($filters['body_types'] as $opt)
                        <option value="{{$opt}}" @if(Request()->body_type == $opt) selected @endif>{{$opt}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="dropdown">
                    <label class="font-bold text-[#707070]" for="">Transmission</label>
                    <select class="w-full h-12 mt-2 text-gray-500 border-none rounded-md" name="transmission" id="cars" onchange="this.form.submit()">
                        <option value="">All Transmissions</option>
                        @foreach($filters['transmissions'] as $opt)
                        <option value="{{$opt}}" @if(Request()->transmission == $opt) selected @endif>{{$opt}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="dropdown">
                    <label class="font-bold text-[#707070]" for="">Category</label>
                    <select class="w-full h-12 mt-2 text-gray-500 border-none rounded-md" name="category" id="cars" onchange="this.form.submit()">
                        <option value="" selected>All Category</option>
                        @foreach($filters['categories'] as $opt)
                            <option value="{{$opt}}" @if(Request()->category == $opt) selected @endif>{{$opt}}</option>
                        @endforeach
                    </select>
                </div>                
            </div>
        </form>
    </div>
    <!-- end filtering section -->

    <!-- car list -->
    <div class="grid items-center justify-center p-4">
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($vehicles as $vehicle)
            <!-- Repeat this section for each car item -->
            <div class="bg-[#F8FFF2] grid p-4 rounded-lg shadow-lg transform hover:-translate-y-1 hover:rotate-x-2 hover:shadow-xl transition-transform duration-300">
                <img class="object-cover w-full h-56 rounded md:w-full" src="@if($vehicle->images[0] ??
                            null){{ Storage::url($vehicle->images[0]->file_path)}} @else images/default.png @endif">
                <div class="flex items-center justify-between p-4">
                    <div class="flex w-4/6">
                        <div class="bg-[#F8FFF2] grid">
                            <h1 class="text-sm md:text-lg">{{ $vehicle['make']}} {{ $vehicle['model']}}</h1>
                            <div class="flex items-center space-x-1">
                                @php
                                $rating = $vehicle['rating'];
                                $maxRating = 5; // Maximum rating value (number of stars)
                                @endphp

                                @for ($i = 1; $i <= $maxRating; $i++) <svg class="w-4 h-4 {{ $i <= $rating ? 'text-[#398564]' : 'text-gray-300 dark:text-gray-500' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0
                                        0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365
                                        5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532
                                        0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0
                                        2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    @endfor
                            </div>

                        </div>
                    </div>
                    <div class="bg-[#317256] px-1 rounded md:w-[200px] flex justify-center">
                        <h1 class="text-sm text-white md:text-base">$ {{ $vehicle['price']}} /day</h1>
                    </div>
                </div>
                <hr class="bg-[#317256] h-0.5">
                <div class="flex items-center justify-between p-4">
                    <div class="grid mr-3 text-center w-6/6">
                        <img src="{{ URL('images/seat-belt.png') }}" class="mx-auto">
                        <h1 class="text-center text-sm md:text-lg text-[#317256] font-semibold mt-2">{{
                                    $vehicle['passengers']}} Passengers</h1>
                    </div>

                    <div class="grid mr-3 text-center w-6/6">
                        <img src="{{ URL('images/luggage.png')}}" class="mx-auto">
                        <h1 class="text-center text-sm md:text-lg text-[#317256] font-semibold mt-2">{{
                                    $vehicle['luggage']}} Luggages</h1>
                    </div>
                    <div class="grid text-center w-6/6">
                        <img src="{{ URL('images/manual-transmission.png')}}" class="mx-auto">
                        <h1 class="text-center text-sm md:text-lg text-[#317256] font-semibold mt-2">{{
                                    $vehicle['transmission']}}</h1>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4">
                    <a href="{{ route('vehicles.show', ['vehicle' => $vehicle['id']]) }}" class="text-white bg-[#317256] border-0 py-2 px-6 focus:outline-none hover:bg-[#307449] rounded text-lg">
                        View Vehicle
                    </a>
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