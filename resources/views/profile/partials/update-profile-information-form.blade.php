<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div>
            <label for="avatar" class="w-full">
                <img
                    src="@if(isset(Auth::user()->images[0])){{ Storage::url(Auth::user()->images[0]->file_path) }}@else /images/avatar.png @endif"
                    class="object-cover w-32 h-32 mx-auto rounded-full cursor-pointer"
                    alt="Avatar"
                    for="avatar"
                    id="avatar-preview"
                />
                <div class="w-32 p-1 mx-auto mt-3 text-center text-white bg-gray-800 rounded cursor-pointer">Change Avatar</div>
            </label>
            <input type="file" id="avatar" name="avatar"  class="hidden mt-1" autofocus autocomplete="avatar" onchange="previewImage()" />
            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />

            <script>
                function previewImage() {
                    var image = document.getElementById('avatar-preview');
                    image.src = URL.createObjectURL(event.target.files[0]);
                }
            </script>
        </div>

        <div class="flex gap-2">
            <div class="w-1/2">
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-text-input id="first_name" name="first_name" type="text" class="block w-full mt-1" :value="old('first_name', $user->first_name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
            </div>

            <div class="w-1/2">
                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-text-input id="last_name" name="last_name" type="text" class="block w-full mt-1" :value="old('last_name', $user->last_name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
            </div>
        </div>

        <div>
            <x-input-label for="mobile" :value="__('Phone Number')" />
            <x-text-input id="mobile" name="mobile" type="text" class="block w-full mt-1" :value="old('mobile', $user->mobile)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('mobile')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="mt-2 text-sm text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="Address_1" :value="__('Address Line 1')" />
            <x-text-input id="Address_1" name="Address_1" type="text" class="block w-full mt-1" :value="old('Address_1', $user->Address_1)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('Address_1')" />
        </div>

        <div>
            <x-input-label for="Address_2" :value="__('Address Line 2')" />
            <x-text-input id="Address_2" name="Address_2" type="text" class="block w-full mt-1" :value="old('Address_2', $user->Address_2)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('Address_2')" />
        </div>

        <div class="flex gap-2">
            <div class="w-1/2">
                <x-input-label for="city" :value="__('City')" />
                <x-text-input id="city" name="city" type="text" class="block w-full mt-1" :value="old('city', $user->city)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('city')" />
            </div>

            <div class="w-1/2">
                <x-input-label for="zip" :value="__('ZIP')" />
                <x-text-input id="zip" name="zip" type="text" class="block w-full mt-1" :value="old('zip', $user->zip)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('zip')" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 5000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
