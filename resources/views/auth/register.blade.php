<div class="grid sm:grid-cols-2 h-full">
    <!-- First Column -->
    <div class="pt-4 md:pt-10 grid  place-items-center">

        <div class="flex items-center justify-center">
            <h2 class="text-main-green p-4 font-extrabold text-lg md:text-3xl text-center">{{ __("Register to Automobex Car Rental") }}</h2>
        </div>

        <div class="h-full sm:p-10 mx-auto w-full">
            <!-- Content for the First column -->
            <form method="POST" action="{{ route('register_new') }}">
                @csrf


                <!-- Name -->
                <div>
                    <label for="name" class="font-bold text-gray-500 pl-4 pb-5 ">Name</label>
                    <x-text-input id="name" class="block w-5/6 md:w-full bg-neutral-300" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>


                <!-- Email -->
                <div class="mt-4">
                    <label for="email" class="font-bold text-gray-500 pl-4 pb-5 ">Email</label>
                    <x-text-input id="email" class="block w-5/6 md:w-full bg-neutral-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>



                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="font-bold text-gray-500 pl-4 pb-5 ">Password</label>
                    <x-text-input id="password" class="block w-5/6 md:w-full bg-neutral-300" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password" class="font-bold text-gray-500 pl-4 pb-5 ">Confirm Password</label>
                    <x-text-input id="password_confirmation" class="block w-5/6 md:w-full bg-neutral-300" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- SignIn Button  -->
                <div class="md:flex items-center justify-center md:justify-end mt-6 p-6">
                    <button type="submit" class="w-full md:w-full bg-main-green py-2 text-white font-medium text-base rounded-md"> {{ __('REGISTER') }}</button>
                </div>
                <!-- forget password and new Account links  -->
                <div class="flex items-center justify-center md:mt-11">

                    <a class=" text-base text-main-green hover:text-gray-900 font-bold" href="{{ route('login') }}">
                        {{ __('Already have an Account ?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Second Column -->
    <div class="p-0 m-0 hidden md:block">
        <img src="{{ URL('images/login_car.jpg')}}" alt="" class="w-full h-full object-cover">
    </div>
</div>