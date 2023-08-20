<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="sm:ml-64 p-6">

        <!-- Top Grid  -->
        <div class="grid grid-cols-4 gap-10">
            <!-- Total Vehicles  -->
            <div class="grid lg:grid-cols-2 bg-white p-4 rounded-lg">
                <div class="">
                    <p class="text-gray-500">Vehicles</p>
                    <p class="text-gray-600 text-2xl font-bold"> @php
                        echo count($vehicles);
                        @endphp</p>
                    <p class="text-gray-400 text-sm ">Total Vehicles</p>
                </div>

                <div class="flex justify-end">
                    <svg class="w-11 h-11 p-3 rounded-md text-main-green bg-main-green dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </div>
            </div>

        </div>

        <div class="mt-10">
            <div class="relative shadow-md sm:rounded-lg bg-white ">
                <div class="flex justify-end items-center">
                    <div>
                        <!-- Search bar  -->
                        <form class="">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="border-none w-full p-4 pl-10 text-sm text-gray-500 bg-transparent focus:ring-0" placeholder="Search">
                            </div>
                        </form>
                    </div>



                </div>
                <!-- Vehicle List  -->
                <div class="overflow-auto max-h-[600px] ">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Vehicle
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    VIN
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Body Type
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Price
                                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Availability
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <span class="items-center text-center">Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($vehicles as $vehicle)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                    <a href="/admin/vehicles/{{ $vehicle['id']}}">
                                        <div class="flex items-center">
                                            <div class="me-3">
                                                @if(isset($vehicle) && isset($vehicle->images) && $vehicle->images->count() > 0)
                                                <img src="{{ Storage::url($vehicle->images[0]->file_path) }}" alt="vehicle Image" class="rounded-full w-10 h-10">
                                                @else
                                                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80" alt="User Image" class="rounded-full w-10 h-10">
                                                @endif
                                            </div>
                                            <div>
                                                <p>{{ $vehicle['make']}} {{ $vehicle['model']}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $vehicle['vin']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['body_type']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['color']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle['price']}}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $vehicle['availability'] ? 'Available' : 'Not Available' }}

                                </td>
                                <td class="flex px-6 py-4">
                                    <a href="/admin/vehicles/{{ $vehicle['id']}}/edit" class="bg-[#2563ea] hover:bg-[#77c6fc] p-1 rounded-lg"><img class="w-5 h-5" src="{{ URL('images/editing.png')}}" alt=""></a>
                                    <span class="text-xl">&nbsp/&nbsp</span>
                                    <form action="/admin/vehicle/{{ $vehicle['id'] }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-[#c81e1e] hover:bg-[#e28c8b] p-1 rounded-lg" onclick="return confirm('Are you sure you want to delete this Vehicle?')"><img class="w-5 h-5" src="{{ URL('images/delete.png')}}" alt=""></button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>

            <div class="w-5/10 mx-auto p-6 m-10 relative shadow-md sm:rounded-lg bg-white ">
                <div>
                    <h1 class="flex text-gray-500 font-bold text-2xl justify-center py-6" id="addcar">Add a New Vehicle</h1>
                </div>
                <form method="POST" action="{{ isset($vehicle_one) ? route('vehicle_update', ['vehicle_id' => $vehicle_one->id]) : route('vehicles.all') }}" enctype="multipart/form-data">
                    @csrf

                    @if(isset($vehicle_one))
                    @method('PUT')
                    @endif

                    <!-- Make -->
                    <div>
                        <x-input-label for="make" :value="__('Make')" />
                        <x-text-input id="make" class="block mt-1 w-full" type="text" name="make" :value="$vehicle_one['make'] ?? old('make')" autofocus />
                        <x-input-error :messages="$errors->get('make')" class="mt-2" />
                    </div>

                    <!-- Model -->
                    <div>
                        <x-input-label for="model" :value="__('Model')" />
                        <x-text-input id="model" class="block mt-1 w-full" type="text" name="model" :value="$vehicle_one['model'] ?? old('model')" autofocus />
                        <x-input-error :messages="$errors->get('model')" class="mt-2" />
                    </div>

                    <!-- VIN -->
                    <div>
                        <x-input-label for="vin" :value="__('VIN')" />
                        <x-text-input id="vin" class="block mt-1 w-full" type="text" name="vin" :value="$vehicle_one['vin'] ?? old('vin')" autofocus />
                        <x-input-error :messages="$errors->get('vin')" class="mt-2" />
                    </div>

                    <!-- Body Type -->
                    <div>
                        <x-input-label for="body_type" :value="__('Body Type')" />
                        <select id="body_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="body_type" autofocus>
                            <option value="Sedan" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Sedan' ? 'selected' : '' }}>Sedan</option>
                            <option value="SUV" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'SUV' ? 'selected' : '' }}>SUV</option>
                            <option value="Coupe" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Coupe' ? 'selected' : '' }}>Coupe</option>
                            <option value="Hatchback" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Hatchback' ? 'selected' : '' }}>Hatchback</option>
                            <option value="Convertible" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Convertible' ? 'selected' : '' }}>Convertible</option>
                            <option value="Minivan" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Minivan' ? 'selected' : '' }}>Minivan</option>
                            <option value="Pickup Truck" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Pickup Truck' ? 'selected' : '' }}>Pickup Truck</option>
                            <option value="Wagon" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Wagon' ? 'selected' : '' }}>Wagon</option>
                            <option value="Crossover" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Crossover' ? 'selected' : '' }}>Crossover</option>
                            <option value="Van" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Van' ? 'selected' : '' }}>Van</option>
                            <option value="Truck" {{ old('body_type', $vehicle_one['body_type'] ?? '') === 'Truck' ? 'selected' : '' }}>Truck</option>
                            <!-- Add more body types as needed with the same `old()` check -->
                        </select>
                        <x-input-error :messages="$errors->get('body_type')" class="mt-2" />
                    </div>


                    <!-- Year -->
                    <div>
                        <x-input-label for="year" :value="__('Year')" />
                        <x-text-input id="year" class="block mt-1 w-full" type="text" name="year" :value="$vehicle_one['year'] ?? old('year')" autofocus />
                        <x-input-error :messages="$errors->get('year')" class="mt-2" />
                    </div>

                    <!-- Fuel Type -->
                    <div>
                        <x-input-label for="fuel_type" :value="__('Fuel Type')" />
                        <select id="fuel_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="fuel_type" autofocus>
                            <option value="Gasoline" {{ old('fuel_type', $vehicle_one['fuel_type'] ?? '') === 'Gasoline' ? 'selected' : '' }}>Gasoline</option>
                            <option value="Diesel" {{ old('fuel_type', $vehicle_one['fuel_type'] ?? '') === 'Diesel' ? 'selected' : '' }}>Diesel</option>
                            <option value="Electric" {{ old('fuel_type', $vehicle_one['fuel_type'] ?? '') === 'Electric' ? 'selected' : '' }}>Electric</option>
                            <option value="Hybrid" {{ old('fuel_type', $vehicle_one['fuel_type'] ?? '') === 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                            <!-- Add more fuel types as needed with the same `old()` check -->
                        </select>
                        <x-input-error :messages="$errors->get('fuel_type')" class="mt-2" />
                    </div>


                    <!-- Transmission -->
                    <div>
                        <x-input-label for="transmission" :value="__('Transmission')" />
                        <select id="transmission" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="transmission" autofocus>
                            <option value="Auto" {{ old('transmission') === 'Automatic' ? 'selected' : '' }}>Automatic</option>
                            <option value="Manual" {{ old('transmission') === 'Manual' ? 'selected' : '' }}>Manual</option>
                        </select>
                        <x-input-error :messages="$errors->get('transmission')" class="mt-2" />
                    </div>


                    <!-- Mileage -->
                    <div>
                        <x-input-label for="mileage" :value="__('Mileage')" />
                        <x-text-input id="mileage" class="block mt-1 w-full" type="text" name="mileage" :value="$vehicle_one['mileage'] ?? old('mileage')" autofocus />
                        <x-input-error :messages="$errors->get('mileage')" class="mt-2" />
                    </div>

                    <!-- Color -->
                    <div>
                        <x-input-label for="color" :value="__('Color')" />
                        <x-text-input id="color" class="block mt-1 w-full" type="text" name="color" :value="$vehicle_one['color'] ?? old('color')" autofocus />
                        <x-input-error :messages="$errors->get('color')" class="mt-2" />
                    </div>

                    <!-- Luggage -->
                    <div>
                        <x-input-label for="luggage" :value="__('Luggage')" />
                        <x-text-input id="luggage" class="block mt-1 w-full" type="text" name="luggage" :value="$vehicle_one['luggage'] ?? old('luggage')" autofocus />
                        <x-input-error :messages="$errors->get('luggage')" class="mt-2" />
                    </div>

                    <!-- Doors -->
                    <div>
                        <x-input-label for="doors" :value="__('Doors')" />
                        <x-text-input id="doors" class="block mt-1 w-full" type="text" name="doors" :value="$vehicle_one['doors'] ?? old('doors')" autofocus />
                        <x-input-error :messages="$errors->get('doors')" class="mt-2" />
                    </div>

                    <!-- Passengers -->
                    <div>
                        <x-input-label for="passengers" :value="__('Passengers')" />
                        <x-text-input id="passengers" class="block mt-1 w-full" type="text" name="passengers" :value="$vehicle_one['passengers'] ?? old('passengers')" />
                        <x-input-error :messages="$errors->get('passengers')" class="mt-2" />
                    </div>

                    <!-- Price -->
                    <div>
                        <x-input-label for="price" :value="__('Price')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="$vehicle_one['price'] ?? old('price')" autofocus />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                    <!-- short_Description -->
                    <div>
                        <x-input-label for="short_Description" :value="__('Short Description')" />
                        <textarea id="editor" name="short_Description" rows="8" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{$vehicle_one['short_Description'] ?? old('short_Description')}}</textarea>
                        <x-input-error :messages="$errors->get('short_Description')" class="mt-2" />
                    </div>

                    <!-- Description -->
                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <textarea id="editor" name="description" rows="8" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{$vehicle_one['description'] ?? old('description')}}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- Images -->
                    <div class="grid sm:grid-cols-4 gap-10 mt-10">
                        <script>
                            function previewImage(index) {
                                var image = document.getElementById('preview_' + index);
                                image.src = URL.createObjectURL(event.target.files[0]);
                                image.style.display = 'block';
                            }
                        </script>

                        @for($i = 1; $i <= 4; $i++)
                        <div class="mb-6">
                            <label for="image_{{$i}}" class="block text-gray-700 font-semibold mb-2">{{ __('Image ' . $i) }}</label>
                            <div class="relative rounded-lg border-dashed border-2 border-gray-300 p-6 bg-white">
                                <div class="overflow-hidden bg-cover  p-4 bg-white text-center flex flex-col items-center justify-center">
                                    <h2 class="mb-2">Preview:</h2>
                                    <img id="preview_{{$i}}" class="object-cover min-w-[300px] max-w-[300px] min-h-[200px] max-h-[200px]" @if(isset($vehicle_one->images[$i-1])) src="{{ Storage::url($vehicle_one->images[$i-1]->file_path) }}" @else style="display:none" @endif>
                                </div>
                                <label for="image_{{$i}}" class="cursor-pointer text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 48 48">
                                        <path d="M19.406 4L16 7.406l5.297 5.297H8v7.828h5.297L16 25.594 19.406 29l6-6-6-6zm9.188 27.172a6.95 6.95 0 0 0 0-9.84l-2.48-2.48 1.416-1.414 2.478 2.478a4.95 4.95 0 0 1 0 7.007 4.95 4.95 0 0 1-7.008 0l-2.478-2.478-1.414 1.414 2.48 2.48a6.95 6.95 0 0 0 9.838 0z" />
                                        <path d="M24 12a6 6 0 1 1 0 12 6 6 0 0 1 0-12zm0 2a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                                    </svg>
                                    <p class="mt-1 text-sm text-gray-600">{{ __('Drag and drop an image here or click to browse.') }}</p>
                                </label>
                                <input id="image_{{$i}}" class="hidden" type="file" name="image_{{$i}}" onchange="previewImage({{$i}})" />
                            </div>
                            <x-input-error :messages="$errors->get('image_' . $i)" class="mt-2" />
                        </div>
                        @endfor

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Create Vehicle') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>