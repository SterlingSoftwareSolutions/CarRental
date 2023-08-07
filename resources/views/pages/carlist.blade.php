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
    <div class="relative -z-30">
        <img src="{{ URL('images/Group 148.png')}}" alt="" srcset="">
        <h1 class="absolute top-60 left-60 text-white text-4xl font-bold inline-block" text-4xl">Find Your Dream Ride</h1>
    </div>
    <!-- end banner section -->

    <!-- filtering section -->
    <div class="flex justify-center md:grid md:grid-flow-row -mt-2 z-10">
        <div class="flex flex-col md:flex-row border-t-8 border-[#398564] bg-[#ECE3E3] md:justify-center w-full">
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Figma</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Framer</li>
                    <li>Sketch</li>
                    <li>Invision Studio</li>
                    <li class="active">Figma</li>
                    <li>Adobe XD</li>
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Figma</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Framer</li>
                    <li>Sketch</li>
                    <li>Invision Studio</li>
                    <li class="active">Figma</li>
                    <li>Adobe XD</li>
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Figma</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Framer</li>
                    <li>Sketch</li>
                    <li>Invision Studio</li>
                    <li class="active">Figma</li>
                    <li>Adobe XD</li>
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Figma</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Framer</li>
                    <li>Sketch</li>
                    <li>Invision Studio</li>
                    <li class="active">Figma</li>
                    <li>Adobe XD</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end filtering section -->

    <!-- car list -->
    
    <!-- end car list -->


    <!-- start navigation -->
    @include('layouts.footer')
    <!-- end navigation -->

</body>

</html>