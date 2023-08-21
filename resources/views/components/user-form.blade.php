@props([
    'user' => null,
])

<form method="POST" action="{{ isset($user) ? route('users.update', ['user' => $user]) : route('users.store') }}" enctype="multipart/form-data">
    @csrf
    @if(isset($user))
        @method('put')
    @endif

    <!-- first_name -->
    <div>
        <x-input-label for="first_name" :value="__('First Name')" />
        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name', isset($user) ? $user->first_name : '')" autofocus autocomplete="first_name" />
        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
    </div>

    <!-- last_name -->
    <div>
        <x-input-label for="last_name" :value="__('Last Name')" />
        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name', isset($user) ? $user->last_name : '')" autofocus autocomplete="last_name" />
        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
    </div>

    <!-- mobile -->
    <div>
        <x-input-label for="mobile" :value="__('Mobile')" />
        <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile', isset($user) ? $user->mobile : '')" autofocus autocomplete="mobile" />
        <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
    </div>

    <!-- Address_1 -->
    <div>
        <x-input-label for="Address_1" :value="__('Address 1')" />
        <x-text-input id="Address_1" class="block mt-1 w-full" type="text" name="Address_1" :value="old('Address_1', isset($user) ? $user->Address_1 : '')" autofocus autocomplete="Address_1" />
        <x-input-error :messages="$errors->get('Address_1')" class="mt-2" />
    </div>

    <!-- Address_2 -->
    <div>
        <x-input-label for="Address_2" :value="__('Address 2')" />
        <x-text-input id="Address_2" class="block mt-1 w-full" type="text" name="Address_2" :value="old('Address_2', isset($user) ? $user->Address_2 : '')" autofocus autocomplete="Address_2" />
        <x-input-error :messages="$errors->get('Address_2')" class="mt-2" />
    </div>

    <!-- city -->
    <div>
        <x-input-label for="city" :value="__('City')" />
        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city', isset($user) ? $user->city : '')" autofocus autocomplete="city" />
        <x-input-error :messages="$errors->get('city')" class="mt-2" />
    </div>

    <!-- zip -->
    <div>
        <x-input-label for="zip" :value="__('ZIP')" />
        <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip', isset($user) ? $user->zip : '')" autofocus autocomplete="zip" />
        <x-input-error :messages="$errors->get('zip')" class="mt-2" />
    </div>

    <!-- driving_license -->
    <div>
        <x-input-label for="driving_license" :value="__('Driving License')" />
        <x-text-input id="driving_license" class="block mt-1 w-full" type="text" name="driving_license" :value="old('driving_license', isset($user) ? $user->driving_license : '')" autofocus autocomplete="driving_license" />
        <x-input-error :messages="$errors->get('driving_license')" class="mt-2" />
    </div>

    <!-- driving_license_expire_year -->
    <div>
        <x-input-label for="driving_license_expire_year" :value="__('Driving License Expiry Year')" />
        <x-text-input id="driving_license_expire_year" class="block mt-1 w-full" type="text" name="driving_license_expire_year" :value="old('driving_license_expire_year', isset($user) ? $user->driving_license_expire_year : '')" autofocus autocomplete="driving_license_expire_year" />
        <x-input-error :messages="$errors->get('driving_license_expire_year')" class="mt-2" />
    </div>

    <!-- driving_license_expire_month -->
    <div>
        <x-input-label for="driving_license_expire_month" :value="__('Driving License Expiry Month')" />
        <x-text-input id="driving_license_expire_month" class="block mt-1 w-full" type="text" name="driving_license_expire_month" :value="old('driving_license_expire_month', isset($user) ? $user->driving_license_expire_month : '')" autofocus autocomplete="driving_license_expire_month" />
        <x-input-error :messages="$errors->get('driving_license_expire_month')" class="mt-2" />
    </div>

    <!-- driving_license_expire_date -->
    <div>
        <x-input-label for="driving_license_expire_date" :value="__('Driving License Expiry Date')" />
        <x-text-input id="driving_license_expire_date" class="block mt-1 w-full" type="text" name="driving_license_expire_date" :value="old('driving_license_expire_date', isset($user) ? $user->driving_license_expire_date : '')" autofocus autocomplete="driving_license_expire_date" />
        <x-input-error :messages="$errors->get('driving_license_expire_date')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', isset($user) ? $user->email : '')" autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <!-- Profile Picture -->
    <div class="mb-6">
        <label for="image" class="block text-gray-700 font-semibold mb-2">{{ __('Profile Picture')
            }}</label>
        <div class="relative rounded-lg border-dashed border-2 border-gray-300 p-6 bg-white">
            <div class="overflow-hidden bg-cover p-4 bg-white text-center flex flex-col items-center justify-center">
                <h2 class="mb-2">Preview:</h2>
                <img id="avatar_preview" class="object-cover min-w-[300px] max-w-[300px] min-h-[200px] max-h-[200px]" style="display: none;">
            </div>

            <label for="image" class="cursor-pointer text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 48 48">
                    <path d="M19.406 4L16 7.406l5.297 5.297H8v7.828h5.297L16 25.594 19.406 29l6-6-6-6zm9.188 27.172a6.95 6.95 0 0 0 0-9.84l-2.48-2.48 1.416-1.414 2.478 2.478a4.95 4.95 0 0 1 0 7.007 4.95 4.95 0 0 1-7.008 0l-2.478-2.478-1.414 1.414 2.48 2.48a6.95 6.95 0 0 0 9.838 0z" />
                    <path d="M24 12a6 6 0 1 1 0 12 6 6 0 0 1 0-12zm0 2a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                </svg>
                <p class="mt-1 text-sm text-gray-600">{{ __('Drag and drop an image here or click to
                    browse.') }}</p>
            </label>
            <input id="image" class="hidden" type="file" name="image" onchange="preview_image('avatar_preview')" />
        </div>
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        @if(isset($user))
            <x-primary-button class="ml-4">
                {{ __('Update') }}
            </x-primary-button>
        @else
            <x-primary-button class="ml-4">
                {{ __('Create') }}
            </x-primary-button>
        @endif
    </div>
</form>

<script type="text/javascript">
    function preview_image(previewer) {
        var image = document.getElementById(previewer);

        if (event.target.files.length > 0) {
            image.src = URL.createObjectURL(event.target.files[0]);
            image.style.display = 'block';
        } else {
            image.style.display = 'none';
        }
    }
</script>