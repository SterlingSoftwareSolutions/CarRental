@php
$user = Auth::user();
$bookings = $user->bookings;
@endphp

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- start navigation -->
    @include('layouts.navigation')
    <!-- end navigation -->

    <!-- banner section -->
    <div class="relative">
        <img src="{{ URL('images/Group 180.png')}}" alt="" srcset="">
    </div>
    <!-- end banner section -->

    <div class="grid justify-center items-center p-4">
        @yield('content')
    </div>

    <!-- start navigation -->
    @include('layouts.footer')
    <!-- end navigation -->
</body>

</html>