<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    
</head>
<body>
    <!-- start sidebar -->
    @include('layouts.navigation')
    <!-- end sidbar -->
    <div class="main-banner">
        <h1 class="text-white text-5xl font-bold">Your Key to <span class="text-amber-600">Unforgettable</span> Journeys</h1>
        <p class="text-white text-2xl font-medium mt-5">Rent a Car for Your Next Adventure with Our Convenient <br> and Reliable Services</p>
    </div>
    <div class="text-center">
        <h1 class="text-5xl font-bold text-emerald-600">Why Choose Us</h1>
        <p class="text-lg text-gray-500 mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div class="whychoose-section">
        <div class="flex items-center justify-center mt-4">
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="bg-white rounded-md border-2 border-emerald-400 p-4 hover:border-t-8 ">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/car-insurance.png')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Wide Range of Vehicles</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="bg-white rounded-md border-2 border-emerald-400 p-4 hover:border-t-8 ">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/offer.png')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Wide Range of Vehicles</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                </div>
            </a>
        </div>
        <div class="flex items-center justify-center mt-10">
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="bg-white rounded-md border-2 border-emerald-400 p-4 hover:border-t-8 ">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/tap.png')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Wide Range of Vehicles</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="bg-white rounded-md border-2 border-emerald-400 p-4 hover:border-t-8 ">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ URL('images/tap (1).png')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Wide Range of Vehicles</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur auctor est a </p>
                </div>
            </a>
        </div>
    </div>
    <div class="text-center mt-12">
        <h1 class="text-5xl font-bold text-emerald-600">Discover Our Latest Cars for Rental</h1>
        <p class="text-lg text-gray-500 mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div class="discover-section">
        <div class="flex items-center justify-center pt-8">
            <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div>
                    <img class="object-cover w-full rounded-t-lg h-100 md:h-auto md:w-50 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 27.png')}}" alt="">
                </div>
            </a>
                <section class="pl-10 slider">
                    <div class="flex justify-items-stretch items-center justify-self-start">
                        <div class="flex ">
                            <div class="text-sm font-medium text-center text-gray-500 dark:text-gray-400 dark:border-gray-700">
                                <ul class="flex flex-wrap -mb-px">
                                    <li class="mr-2">
                                        <a href="#" class="text-base inline-block p-2 text-green-600 border-b-2 border-green-600 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Popular Cars</a>
                                    </li>
                                    <li class="mr-2">
                                        <a href="#" class="text-base inline-block p-2 text-gray-600 border-b-2 border-transparent rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Recent Cars</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="slides mt-2">
                        <div class="slide">
                            <div class="inner_content">
                                <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div>
                                        <img class="object-cover w-full rounded-t-lg h-95 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 27.png')}}" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between p-2 pr-20 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Toyota Crown</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Four Seated Car </p>
                                        <p class="mb-3 text-sm font-semibold font-normal text-green-500 dark:text-gray-400">$ 100 p/day </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="slide">
                        <div class="inner_content">
                                <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div>
                                        <img class="object-cover w-full rounded-t-lg h-95 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 30.png')}}" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between p-2 pr-20 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Toyota Crown</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Four Seated Car </p>
                                        <p class="mb-3 text-sm font-semibold font-normal text-green-500 dark:text-gray-400">$ 100 p/day </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="slide">
                        <div class="inner_content">
                                <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div>
                                        <img class="object-cover w-full rounded-t-lg h-95 md:h-auto md:w-44 md:rounded-none md:rounded-l-lg" src="{{ URL('images/Rectangle 31.png')}}" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between p-2 pr-20 bg-white leading-normal hover:bg-[#EAFED5] border-y-2 border-r-2 border-emerald-400">
                                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-white">Toyota Crown</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Four Seated Car </p>
                                        <p class="mb-3 text-sm font-semibold font-normal text-green-500 dark:text-gray-400">$ 100 p/day </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
    </div>
    <div class="text-center mt-12">
        <h1 class="text-5xl font-bold text-emerald-600">Diverse Vehicle Selection for Every Journey</h1>
        <p class="text-lg text-gray-500 mt-6 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante nec justo eleifend consequat. Curabitur <br> auctor est a orci ultrices, eu bibendum risus tempus. Fusce sollicitudin leo a ullamcorper vulputate. </p>
    </div>
    <div id="app" class="max-w-screen-lg mx-auto px-4 md:px-8 py-12 transition-all duration-500 ease-linear">
		<div class="relative">
			<div class="slides-container h-72 flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-2 rounded scroll-smooth before:w-[45vw] before:shrink-0 after:w-[45vw] after:shrink-0 md:before:w-0 md:after:w-0">
				<div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
					<img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center ">
                        <div class="flex ml-20">
                        <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">Nimshan</h1>
                        </div>
                        <p >Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
				</div>
				<div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
					<img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center">
                        <div class="flex ml-20">
                        <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">Nimshan</h1>
                        </div>
                        <p >Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
				</div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
					<img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center">
                        <div class="flex ml-20">
                        <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">Nimshan</h1>
                        </div>
                        <p >Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
				</div>>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
					<img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center">
                        <div class="flex ml-20">
                        <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">Nimshan</h1>
                        </div>
                        <p >Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
				</div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
					<img src="{{ URL('images/Rectangle 27.png')}}" alt="mountain_image">
                    <div class="grid justify-items-stretch items-center justify-center">
                        <div class="flex ml-20">
                        <h1 class="bg-[#317256] p-2 pl-5 pr-5 text-white -mt-10">Nimshan</h1>
                        </div>
                        <p >Lorem ipsum dolor sit amet, cons ect etur adipis cing elit. </p>
                    </div>
				</div>
			</div>

			<div class="absolute top-0 -left-4 h-full items-center hidden md:flex">
				<button role="button" class="prev px-2 py-2 rounded-full bg-emerald-600 text-neutral-900 group" aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
					</svg>

				</button>
			</div>
			<div class="absolute top-0 -right-4 h-full items-center hidden md:flex">
				<button role="button" class="next px-2 py-2 rounded-full bg-emerald-600 text-neutral-900 group" aria-label="next"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
						<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
					</svg>
				</button>
			</div>
		</div>
	</div>
</body>
</html>