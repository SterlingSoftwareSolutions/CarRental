<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="p-4 bg-gray-100">
        <div class="container max-w-xl p-4 mx-auto bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold text-gray-700">Contact Information</h1>
            <p class="mt-4 text-base text-gray-600">Name: {{ $user->name }}</p>
            <p class="text-base text-gray-600">Phone: {{ $user->phone }}</p>
            <p class="text-base text-gray-600">Email: {{ $user->email }}</p>
            <p class="text-base text-gray-600">Message: {{ $user->message }}</p>
        </div>
    </div>
</body>

</html>
