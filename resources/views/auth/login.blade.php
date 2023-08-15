<div class="grid sm:grid-cols-2 h-full">
    <!-- First Column -->
    <div class="p-16 grid  place-items-center">

        <div class="flex items-center justify-center">
            <h2 class="text-main-green font-extrabold text-3xl">{{ __("Sign Into Automobex Car Rental") }}</h2>
        </div>

        <div class="h-full sm:p-10 mx-auto">
            <!-- Content for the First column -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="font-bold text-gray-500 pl-4 pb-5 ">Email</label>
                    <x-text-input id="email" class="block w-full bg-neutral-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="font-bold text-gray-500 pl-4 pb-5 ">Password</label>

                    <x-text-input id="password" class="block w-full bg-neutral-300" type="password" name="password" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- SignIn Button  -->
                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="w-full bg-main-green py-2 text-white font-medium text-base rounded-md"> {{ __('SIGN IN') }}</button>
                </div>

                <!-- forget password and new Account links  -->
                <div class="flex items-center justify-center mt-12">
                  
                    <a class=" text-base text-main-green hover:text-gray-900 font-bold" href="{{ route('register') }}">
                        {{ __('Create an Account ?') }}
                    </a>
                

                    <a class="text-2xl mx-10">|</a>

                    <a class="text-base text-main-green hover:text-gray-900 font-bold" href="{{ route('password.request') }}">
                        {{ __('Forgot password') }}
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Second Column -->
    <div class="bg-blue-500 p-0 m-0">
        <img src="{{ URL('images/login_car.jpg')}}" alt="" class="w-full h-full object-cover">
    </div>
</div>