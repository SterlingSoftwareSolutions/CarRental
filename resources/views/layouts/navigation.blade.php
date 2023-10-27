<nav class="z-50 w-full nav">
	<div class="z-50 flex items-center justify-end p-10 logo md:pl-0 md:w-2/12">
		<a href="{{ route('home') }}">
			<img class="w-full md:w-full" src="{{ URL('images/flg_logo11079.png')}}" alt="Logo Image">
		</a>
	</div>	
	<div class="p-4 cursor-pointer hamburger">
		<div class="w-6 h-1 mb-1 bg-white line1"></div>
		<div class="w-6 h-1 mb-1 bg-white line2"></div>
		<div class="w-6 h-1 bg-white line3"></div>
	</div>
	<ul class="flex items-center justify-between w-2/6 p-4 mx-auto nav-links">
		<li><a class="text-white font-semibold hover:text-[#E0AA87]" href="{{route('home')}}">HOME</a></li>
		<li><a class="text-white font-semibold hover:text-[#E0AA87]" href="{{route('carlist')}}">VEHICLE LIST</a></li>
		<li><a class="text-white font-semibold hover:text-[#E0AA87]" href="{{route('about')}}">ABOUT US</a></li>
		<li><a class="text-white font-semibold hover:text-[#E0AA87]" href="{{route('contact')}}">CONTACT US</a></li>
		@if(Auth::check())
		<li>
			<div x-data="{dropdownMenu: false}" class="relative">
			    <!-- Dropdown toggle button -->
			    <img
			    	
                    src="@if(isset(Auth::user()->images[0])){{ Storage::url(Auth::user()->images[0]->file_path) }}@else /images/avatar.png @endif"
					class="object-cover w-12 h-12 rounded-full cursor-pointer"
					alt="Avatar"
					@click="dropdownMenu = ! dropdownMenu"
				/>
			    <!-- Dropdown list -->
				<div x-show="dropdownMenu" class="absolute right-0 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 md:bottom-auto bottom-12">
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
    	<li><a class="font-semibold text-white login-button" href="{{ route('login') }}">Login</a></li>
		@endif
	</ul>
</nav>