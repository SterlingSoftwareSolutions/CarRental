<nav class="nav w-full z-50">
	<div class="logo p-10 md:pl-0 md:w-2/12 flex justify-end items-center z-50">
		<img class="w-full md:w-full" src="{{ URL('images/flg_logo11079.png')}}" alt="Logo Image">
	</div>
	<div class="hamburger p-4 cursor-pointer">
		<div class="line1 bg-white h-1 w-6 mb-1"></div>
		<div class="line2 bg-white h-1 w-6 mb-1"></div>
		<div class="line3 bg-white h-1 w-6"></div>
	</div>
	<ul class="nav-links w-2/6 flex justify-between items-center p-4 mx-auto">
		<li><a class="text-white font-semibold hover:text-[#E0AA87]" href="{{route('home')}}">HOME</a></li>
		<li><a class="text-white font-semibold hover:text-[#E0AA87]" href="{{route('carlist')}}">VEHICLE LIST</a></li>
		<li><a class="text-white font-semibold hover:text-[#E0AA87]" href="{{route('about')}}">ABOUT US</a></li>
		<li><a class="text-white font-semibold hover:text-[#E0AA87]" href="{{route('contact')}}">CONTACT US</a></li>
		@if(Auth::check())
		<li>
			<div x-data="{dropdownMenu: false}" class="relative">
			    <!-- Dropdown toggle button -->
			    <img
					src="{{ Storage::url($user->images[0]->file_path ?? 'user_images/sample_image.jpg') }}"
					class="rounded-full w-14 h-14 object-cover cursor-pointer"
					alt="Avatar"
					@click="dropdownMenu = ! dropdownMenu"
				/>
			    <!-- Dropdown list -->
			    <div x-show="dropdownMenu" class="absolute right-0 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                        <li>
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My Profile</a>
                        </li>
                        <li>
                            <a href=@if(Auth::user()->role == 'admin') "/admin/dashboard/" @else "/user/dashboard/" @endif class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                        </li>
                    </ul>
			    </div>
		        <!-- This form is to send the post request to the logout route  -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
			</div>
		</li>
		@else
    	<li><a class="text-white font-semibold login-button" href="{{ route('login') }}">Login</a></li>
		@endif
	</ul>
</nav>