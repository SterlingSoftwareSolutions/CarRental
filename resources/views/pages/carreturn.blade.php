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
    <div class="p-6 rounded">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-md rounded">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Username</th>
                    <th scope="col" class="px-6 py-3">Vehicle Name</th>
                    <th scope="col" class="px-6 py-3">Vehicle Type</th>
                    <th scope="col" class="px-6 py-3">Rental Date</th>
                    <th scope="col" class="px-6 py-3">Return Date</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($vehicles as $vehicle) --}}
                <tr class="bg-white">
                    <td class="px-6 py-4">
                        <select class="w-full border rounded p-2">
                            <option value="Example">Example</option>
                        </select>
                    </td>
                    <td class="px-6 py-4">
                        <select class="w-full border rounded p-2">
                            <option value="Example">Example</option>
                        </select>
                    </td>
                    <td class="px-6 py-4">
                        <select class="w-full border rounded p-2">
                            <option value="Example">Example</option>
                        </select>
                    </td>
                    <td class="px-6 py-4">1-1-23</td>
                    <td class="px-6 py-4">10-1-23</td>
                    <td class="px-6 py-4">
                        {{-- <button type="submit" class="bg-gray-500 text-white px-2 py-1 rounded">Edit</button> --}}
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                    </td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</body>
</html>