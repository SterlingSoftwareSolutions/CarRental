    <!-- get off section -->
    <div class="flex getoff-section top-3">
        <div class="max-w-screen-lg mx-auto md:px-12 py-12 transition-all duration-500 ease-linear flex items-center">
            <div>
                <h1 class="text-white pl-5 md:pl-0 text-xl md:text-3xl font-extrabold inline-block">Get 15% Off Your Rental ! Choose Your Model</h1>
            </div>
        </div>
        <div class="max-w-screen-lg mx-auto px-4 md:px-8 py-12 transition-all duration-500 ease-linear flex items-center">
            <div>
                <button class="bg-white p-2 px-10 rounded mt-3 text-lg font-bold text-[#317256] hover:bg-[#e0aa87] hover:text-white" onclick="window.location.href='{{ route('carlist') }}';">Book Now</button>
            </div>
        </div>
    </div>
    <!-- end get off section -->
    <footer class="bg-[#317256] md:-mt-4 -mt-6" style="z-index: -999;">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-16 lg:py-16">
            <div class="md:flex md:justify-between mt-5">
                <div class="mb-6 md:mb-0">
                    <a href="" class="grid justify-center items-center">
                        <div class=" w-2/12 flex justify-end items-center ">
                            <img class="w-full h-full" src="{{ URL('images/flg_logo11079.png')}}" alt="Logo Image">
                        </div>
                        <p class="text-white">Lorem Ipsum Dolor Sit Amet, Consectetur <br> Adipiscing Elit. Sed Non Risus. Suspendisse <br> Lectus Tortor, Dignissim Sit Amet, </p>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-6">
                    <div>
                        <h2 class="mb-6 text-lg font-semibold text-[#E0AA87] uppercase dark:text-white">Quick Links</h2>
                        <ul class="text-white dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="{{route('home')}}" class="hover:underline">Home</a>
                            </li>
                            <li>
                                <a href="{{route('carlist')}}" class="hover:underline">Vehicle List</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}" class="hover:underline">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}" class="hover:underline">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-lg font-semibold text-[#E0AA87] uppercase dark:text-white">Find Us</h2>
                        <ul class="text-white dark:text-gray-400 font-medium">
                            <li class="mb-4 flex">
                                <a href="https://www.google.com/maps/@-26.7738869,134.7806741,12.75z?entry=ttu" class="hover:underline flex "><img class="w-5 h-5" src="{{ URL('images/location.png')}}">&nbsp; 5Th Floor, AH Building Melbourne, Australia</a>
                            </li>
                            <li class="mb-4 flex">
                                <a href="mailto:info@carrental.com" class="hover:underline flex"><img class="w-5 h-5" src="{{ URL('images/email.png')}}">&nbsp; info@carrental.com</a>
                            </li>
                            <li class="mb-4 flex">
                                <a href="tel:8801 738 5678 64" class="hover:underline flex"><img class="w-5 h-5" src="{{ URL('images/telephone.png')}}">&nbsp; + 8801 738 5678 64</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="flex items-center justify-center">
                <div class="flex-1">
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                </div>
                <div class="mx-3">
                    <a href="https://www.instagram.com/" class="bg-white p-1.5 rounded-lg text-[#317256] hover:text-gray-500">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                </div>
                <div class="mx-3">
                    <a href="https://twitter.com/" class="bg-white p-1.5 rounded-lg text-[#317256] hover:text-gray-500">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                </div>
                <div class="mx-3">
                    <a href="https://www.facebook.com/" class="bg-white p-1.5 rounded-lg text-[#317256] hover:text-gray-500">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                </div>
                <div class="flex-1">
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                </div>
            </div>

            <div class="text-sm text-white sm:text-center dark:text-gray-400 text-center sm:flex sm:justify-center">
                <span>© Copyright 2023 <a href="" class="hover:underline">by Automobex Car Rental</a></span>
            </div>

        </div>
    </footer>