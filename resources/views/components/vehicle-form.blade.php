@props([
    'vehicle_one' => null
])

<form method="POST" action="{{ isset($vehicle_one) ? route('vehicle_update', ['vehicle_id' => $vehicle_one->id]) : route('vehicles.all') }}" enctype="multipart/form-data">
    @csrf

    @if(isset($vehicle_one))
    @method('PUT')
    @endif

    <!-- Make -->
    <div>
        <x-input-label for="make" :value="__('Make')" />
        <x-text-input id="make" class="block w-full mt-1" type="text" name="make" :value="$vehicle_one['make'] ?? old('make')" autofocus />
        <x-input-error :messages="$errors->get('make')" class="mt-2" />
    </div>

    <!-- Model -->
    <div>
        <x-input-label for="model" :value="__('Model')" />
        <x-text-input id="model" class="block w-full mt-1" type="text" name="model" :value="$vehicle_one['model'] ?? old('model')" autofocus />
        <x-input-error :messages="$errors->get('model')" class="mt-2" />
    </div>

    <!-- VIN -->
    <div>
        <x-input-label for="vin" :value="__('VIN')" />
        <x-text-input id="vin" class="block w-full mt-1" type="text" name="vin" :value="$vehicle_one['vin'] ?? old('vin')" autofocus />
        <x-input-error :messages="$errors->get('vin')" class="mt-2" />
    </div>

    <!-- Reg No -->
    <div>
        <x-input-label for="reg_no" :value="__('Registration Number')" />
        <x-text-input id="reg_no" class="block w-full mt-1" type="text" name="reg_no" :value="$vehicle_one['reg_no'] ?? old('reg_no')" autofocus />
        <x-input-error :messages="$errors->get('reg_no')" class="mt-2" />
    </div>

    <!-- Body Type -->
    <div>
        <x-input-label for="body_type" :value="__('Body Type')" />
        <select id="body_type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" name="body_type" autofocus>
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
        <x-text-input id="year" class="block w-full mt-1" type="text" name="year" :value="$vehicle_one['year'] ?? old('year')" autofocus />
        <x-input-error :messages="$errors->get('year')" class="mt-2" />
    </div>

    <!-- Fuel Type -->
    <div>
        <x-input-label for="fuel_type" :value="__('Fuel Type')" />
        <select id="fuel_type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" name="fuel_type" autofocus>
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
        <select id="transmission" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" name="transmission" autofocus>
            <option value="Auto" {{ old('transmission') === 'Automatic' ? 'selected' : '' }}>Automatic</option>
            <option value="Manual" {{ old('transmission') === 'Manual' ? 'selected' : '' }}>Manual</option>
        </select>
        <x-input-error :messages="$errors->get('transmission')" class="mt-2" />
    </div>


    <!-- Mileage -->
    <div>
        <x-input-label for="mileage" :value="__('Mileage')" />
        <x-text-input id="mileage" class="block w-full mt-1" type="text" name="mileage" :value="$vehicle_one['mileage'] ?? old('mileage')" autofocus />
        <x-input-error :messages="$errors->get('mileage')" class="mt-2" />
    </div>

    <!-- Color -->
    <div>
        <x-input-label for="color" :value="__('Color')" />
        <x-text-input id="color" class="block w-full mt-1" type="text" name="color" :value="$vehicle_one['color'] ?? old('color')" autofocus />
        <x-input-error :messages="$errors->get('color')" class="mt-2" />
    </div>

    <!-- Luggage -->
    <div>
        <x-input-label for="luggage" :value="__('Luggage')" />
        <x-text-input id="luggage" class="block w-full mt-1" type="text" name="luggage" :value="$vehicle_one['luggage'] ?? old('luggage')" autofocus />
        <x-input-error :messages="$errors->get('luggage')" class="mt-2" />
    </div>

    <!-- Doors -->
    <div>
        <x-input-label for="doors" :value="__('Doors')" />
        <x-text-input id="doors" class="block w-full mt-1" type="text" name="doors" :value="$vehicle_one['doors'] ?? old('doors')" autofocus />
        <x-input-error :messages="$errors->get('doors')" class="mt-2" />
    </div>

    <!-- Passengers -->
    <div>
        <x-input-label for="passengers" :value="__('Passengers')" />
        <x-text-input id="passengers" class="block w-full mt-1" type="text" name="passengers" :value="$vehicle_one['passengers'] ?? old('passengers')" />
        <x-input-error :messages="$errors->get('passengers')" class="mt-2" />
    </div>

    <!-- Price -->
    <div>
        <x-input-label for="price" :value="__('Price')" />
        <x-text-input id="price" class="block w-full mt-1" type="text" name="price" :value="$vehicle_one['price'] ?? old('price')" autofocus />
        <x-input-error :messages="$errors->get('price')" class="mt-2" />
    </div>

    <!-- short_Description -->
    <div>
        <x-input-label for="short_Description" :value="__('Short Description')" />
        <textarea id="editor" name="short_Description" rows="8" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{$vehicle_one['short_Description'] ?? old('short_Description')}}</textarea>
        <x-input-error :messages="$errors->get('short_Description')" class="mt-2" />
    </div>

    <!-- Description -->
    <div>
        <x-input-label for="description" :value="__('Description')" />
        <textarea id="editor" name="description" rows="8" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{$vehicle_one['description'] ?? old('description')}}</textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <!-- Images -->
    <div class="grid gap-10 mt-10 sm:grid-cols-4">
        <script>
            function previewImage(index) {
                var image = document.getElementById('preview_' + index);
                image.src = URL.createObjectURL(event.target.files[0]);
                image.style.display = 'block';
            }
        </script>

        @for($i = 1; $i <= 4; $i++)
        <div class="mb-6">
            <label for="image_{{$i}}" class="block mb-2 font-semibold text-gray-700">{{ __('Image ' . $i) }}</label>
            <div class="relative p-6 bg-white border-2 border-gray-300 border-dashed rounded-lg">
                <div class="flex flex-col items-center justify-center p-4 overflow-hidden text-center bg-white bg-cover">
                    <h2 class="mb-2">Preview:</h2>
                    <img id="preview_{{$i}}" class="object-cover min-w-[300px] max-w-[300px] min-h-[200px] max-h-[200px]" @if(isset($vehicle_one->images[$i-1])) src="{{ Storage::url($vehicle_one->images[$i-1]->file_path) }}" @else style="display:none" @endif>
                </div>
                <label for="image_{{$i}}" class="text-center cursor-pointer">
                    <svg class="w-12 h-12 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 48 48">
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

    <div class="flex items-center w-full justify-start mt-4">
        <x-primary-button>
            {{ isset($vehicle_one) ? __('Update') : __('Add')}}
        </x-primary-button>
    </div>
</form>