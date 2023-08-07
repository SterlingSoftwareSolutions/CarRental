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

    <!-- image carosol -->
    <div class="flex justify-center items-center">
        <div class="w-2/6">
            <div class="container">
                <div class="mySlides">
                    <img src="{{ URL('images/Rectangle 27.png')}}" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="{{ URL('images/Group 126.png')}}" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="{{ URL('images/Group 126.png')}}" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="{{ URL('images/Group 126.png')}}" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="flex justify-center items-center">
                    <div class="row">
                        <div class="column">
                            <img class="demo cursor" src="{{ URL('images/Rectangle 27.png')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="{{ URL('images/Group 126.png')}}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="{{ URL('images/Group 126.png')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="{{ URL('images/Group 126.png')}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end image carosol -->

        <!-- pickup foam -->
        <div class="bg-[#F8FFF2] grid p-12 mt-24">
            <h1 class="text-emerald-600 font-semibold text-xl">2008 Toyota Crown Sedan Athlete</h1>
            <p class="mt-2 font-semibold text-[#707070]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis<br> ante nec justo eleifend consequat. </p>
            <div class="flex items-center justify-right">
                <div class="bg-emerald-600 p-2 rounded">
                    <h1 class="text-white">$ 180 /hour</h1>
                </div>
            </div>
            <div>
                <p class="mt-2 font-semibold text-[#707070]">Pick-up Location</p>
                <form action="/action_page.php">
                    <select class="w-full" name="cars" id="cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </form>
            </div>
            <div>
                <p class="mt-2 font-semibold text-[#707070]">Drop-off Location</p>
                <form action="/action_page.php">
                    <select class="w-full" name="cars" id="cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </form>
            </div>
            <p class="mt-2 font-semibold text-[#707070]">Pick-up Date & Time</p>
            <div class="flex justify-center items-center gap-4 w-full">
                <div class="w-full">
                    <form action="/action_page.php">
                        <input class="w-full" type="date" id="birthday" name="birthday">
                    </form>
                </div>
                <div class="w-full">
                    <form action="/action_page.php">
                        <input class="w-full" type="date" id="birthday" name="birthday">
                    </form>
                </div>
            </div>
            <p class="mt-2 font-semibold text-[#707070]">Drop-off Date & Time</p>
            <div class="flex items-center gap-4">
                <div class="w-full">
                    <form action="/action_page.php">
                        <input class="w-full" type="time" name="" id="">
                    </form>
                </div>
                <div class="w-full">
                    <form action="/action_page.php">
                        <input class="w-full" type="time" name="" id="">
                    </form>
                </div>
            </div>
            <div class="flex justify-center items-center p-4">
                <button class="text-white bg-emerald-600 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 hover:text-white rounded text-lg">Book Now</button>
            </div>
        </div>
        <!-- end pickup foam -->
    </div>



    <!-- start navigation -->
    @include('layouts.footer')
    <!-- end navigation -->

    <script>
        // single car view js
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }

        // end single car view js
    </script>

</body>

</html>