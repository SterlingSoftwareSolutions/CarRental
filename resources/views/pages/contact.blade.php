    <!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <img src="{{ URL('images/Group 148.png')}}" alt="" srcset="">
        </div>
        <!-- end banner section -->

        <!-- map section -->
        <div class="text-center mt-10">
            <h1 class="text-5xl font-bold text-emerald-600">Feel Free to Contact Us</h1>
        </div>
        <div class="relative w-5/6 mx-auto mt-10 px-4 sm:px-8 -z-40">
        <div class="overflow-hidden rounded-lg shadow-md">
            <iframe class="w-full h-64 sm:h-96"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12080.73732861526!2d-74.0059418!3d40.7127847!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM40zMDA2JzEwLjAiTiA3NMKwMjUnMzcuNyJX!5e0!3m2!1sen!2sus!4v1648482801994!5m2!1sen!2sus"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
    </div>
        <!-- end map section -->
        
        <!-- contact infomation section -->
        <div class="flex flex-col sm:flex-row w-4/6 mx-auto gap-4 sm:gap-8 p-4 sm:p-0 -mt-20 z-50">
        <div class="bg-emerald-600 p-4 rounded-lg text-center flex-1">
            <a href="#" class="hover:underline inline-flex items-center justify-center"><img src="{{ URL('images/bigloc.png')}}" class="w-12 h-12 sm:w-16 sm:h-16" alt="Location"></a>
            <h1 class="text-white font-semibold text-base sm:text-lg">Our Location</h1>
            <a href="#" class="text-white hover:underline block mt-2">5th Floor, AH Building, Melbourne, Australia</a>
        </div>
        <div class="bg-emerald-600 p-4 rounded-lg text-center flex-1">
            <a href="#" class="hover:underline inline-flex items-center justify-center"><img src="{{ URL('images/bigmail.png')}}" class="w-12 h-12 sm:w-16 sm:h-16" alt="Email"></a>
            <h1 class="text-white font-semibold text-base sm:text-lg">Email</h1>
            <a href="#" class="text-white hover:underline block mt-2">Info@Carrental.Com</a>
        </div>
        <div class="bg-emerald-600 p-4 rounded-lg text-center flex-1">
            <a href="#" class="hover:underline inline-flex items-center justify-center"><img src="{{ URL('images/bigsell.png')}}" class="w-12 h-12 sm:w-16 sm:h-16" alt="Phone"></a>
            <h1 class="text-white font-semibold text-base sm:text-lg">Phone</h1>
            <a href="#" class="text-white hover:underline block mt-2">+8801 738 5678 64</a>
        </div>
    </div>
        <!-- end contact infomation section -->

        <!-- send message section -->
        <div class="bg-emerald-600 mt-20 mb-20">
            <div class="flex justify-center mt-4 w-full">
                <a href="#" class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div>
                        <img class="object-cover h-96" src="{{ URL('images/roland-denes-EWf48MRVUNE-unsplash.png')}}" alt="">
                    </div>
                    <div class="pl-5">
                        <img class="object-cover h-96" src="{{ URL('images/nate-johnston-obOin8-m5sw-unsplash.png')}}" alt="">
                    </div>
                </a>
                <div class="items-center md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="grid py-3.5 pl-5">
                    <h1 class="text-white font-semibold text-3xl mb-4">Send us a Message</h1>
                    <div class="container mx-auto flex">
        <div class="rounded-lg flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        <div class="relative mb-4">
            <input type="text" placeholder="Your Name *" id="name" name="name" class="w-full placeholder-emerald-600 bg-white border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
            <input type="number" placeholder="Your Phone *" id="phone" name="phone" class="w-full placeholder-emerald-600 bg-white border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
            <input type="email" placeholder="Your Email *" id="email" name="email" class="w-full placeholder-emerald-600 bg-white border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
            <textarea id="message" placeholder="Message" name="message" class="w-full bg-white placeholder-emerald-600 border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-emerald-600 bg-white border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 hover:text-white rounded text-lg">Submit</button>
        </div>
    </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end send message section -->
        <!-- start navigation -->
        @include('layouts.footer')
        <!-- end navigation -->

    </body>
    </html>