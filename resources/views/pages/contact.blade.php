    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>

    <body>
        <!-- start navigation -->
        @include('layouts.navigation')
        <!-- end navigation -->

        <!-- banner section -->
        <div>
            <img src="{{ URL('images/Group 180.png')}}" alt="" srcset="">
        </div>
        <!-- end banner section -->

        <!-- map section -->
        <div class="mt-10 text-center">
            <h1 class="text-3xl md:text-5xl font-bold text-[#317256]">Feel Free to Contact Us</h1>
        </div>
        <div class="relative w-5/6 px-4 mx-auto mt-10 sm:px-8 -z-40">
            <div class="overflow-hidden rounded-lg shadow-md">
                <iframe class="w-full h-64 sm:h-96" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12080.73732861526!2d-74.0059418!3d40.7127847!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM40zMDA2JzEwLjAiTiA3NMKwMjUnMzcuNyJX!5e0!3m2!1sen!2sus!4v1648482801994!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
        <!-- end map section -->

        <!-- contact infomation section -->
        <div class="flex flex-col w-4/6 gap-4 p-4 mx-auto -mt-20 sm:flex-row sm:gap-8 sm:p-0" style="z-index: -1;">
            <div class="bg-[#317256] p-4 rounded-lg text-center flex-1">
                <a href="#" class="inline-flex items-center justify-center hover:underline"><img src="{{ URL('images/bigloc.png')}}" class="w-12 h-12 sm:w-16 sm:h-16" alt="Location"></a>
                <h1 class="text-base font-semibold text-white sm:text-lg">Our Location</h1>
                <a href="https://www.google.com/maps/@-26.7738869,134.7806741,12.75z?entry=ttu" class="block mt-2 text-white hover:underline">5th Floor, AH Building, Melbourne, Australia</a>
            </div>
            <div class="bg-[#317256] p-4 rounded-lg text-center flex-1">
                <a href="#" class="inline-flex items-center justify-center hover:underline"><img src="{{ URL('images/bigmail.png')}}" class="w-12 h-12 sm:w-16 sm:h-16" alt="Email"></a>
                <h1 class="text-base font-semibold text-white sm:text-lg">Email</h1>
                <a href="mailto:info@carrental.com" class="block mt-2 text-white hover:underline">Info@Carrental.Com</a>
            </div>
            <div class="bg-[#317256] p-4 rounded-lg text-center flex-1">
                <a href="#" class="inline-flex items-center justify-center hover:underline"><img src="{{ URL('images/bigsell.png')}}" class="w-12 h-12 sm:w-16 sm:h-16" alt="Phone"></a>
                <h1 class="text-base font-semibold text-white sm:text-lg">Phone</h1>
                <a href="tel:8801 738 5678 64" class="block mt-2 text-white hover:underline">+8801 738 5678 64</a>
            </div>
        </div>
        <!-- end contact infomation section -->

        <!-- send message section -->
        <div class="bg-[#317256] mt-20 mb-20 h-100">
            <div class="flex justify-center mt-4 w-12/12">
                <a class="flex flex-col items-center h-full md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div>
                        <img class="hidden object-cover h-96 md:block" src="{{ URL('images/roland-denes-EWf48MRVUNE-unsplash.png')}}" alt="">
                    </div>
                    <div class="pl-5">
                        <img class="hidden object-cover h-96 md:block" src="{{ URL('images/nate-johnston-obOin8-m5sw-unsplash.png')}}" alt="">
                    </div>
                </a>
                <div class="items-center w-4/6 md:flex-row md:max-w-xl">
                    <form action="{{route('contact.email')}}" method="POST">
                        @csrf
                        <div class="grid py-3.5 pl-0 md:pl-5">
                            <h1 class="mb-4 text-lg font-semibold text-white md:text-2xl">Send us a Message</h1>
                            <div class="flex w-full mx-auto">
                                <div class="relative flex flex-col w-full md:ml-auto send_message">
                                    <div class="relative mb-4">
                                        @error('name')<span class="text-sm text-red-900">{{$message}}</span> @enderror
                                        <input value="{{old('name')}}" type="text" placeholder="Your Name *" id="name" name="name" class="w-full placeholder-[#317256] bg-white border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                    <div class="relative mb-4">
                                        @error('phone')<span class="text-sm text-red-900">{{$message}}</span> @enderror
                                        <input value="{{old('phone')}}" type="text" placeholder="Your Phone *" id="phone" name="phone" class="w-full placeholder-[#317256] bg-white border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                    <div class="relative mb-4">
                                        @error('email')<span class="text-sm text-red-900">{{$message}}</span> @enderror
                                        <input value="{{old('email')}}" type="email" placeholder="Your Email *" id="email" name="email" class="w-full placeholder-[#317256] bg-white border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> 
                                    </div>
                                    <div class="relative mb-4">
                                        @error('message')<span class="text-sm text-red-900">{{$message}}</span> @enderror
                                        <textarea value="{{old('message')}}" id="message" placeholder="Message" name="message" class="w-full h-12 bg-white placeholder-[#317256] border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                    </div>
                                    <button type="submit" class="text-[#317256] w-2/6 font-bold bg-white border-0 py-2 px-4 focus:outline-none hover:bg-[#e0aa87] hover:text-white rounded text-lg">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>

        <!-- end send message section -->
        <!-- start navigation -->
        <div class="-mt-30">
            @include('layouts.footer')
        </div>
        <!-- end navigation -->

    </body>

    </html>