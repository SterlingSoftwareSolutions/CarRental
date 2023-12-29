@php
$statuses = [
'booked',
'unpaid',
'paid',
'returned'
];
@endphp

<x-app-layout>
    <!-- Side BAr  -->
    <x-admin-sidebar />

    <div class="p-6 sm:ml-64">
        <div class="max-w-screen-lg mx-auto mt-7">
            <!-- booking List  -->
            <h1 class="p-2 font-semibold text-lg text-[#707070]">Review Booking</h1>
            <div class="p-8 m-2 overflow-auto bg-white rounded">
                @if(session()->has('message'))
                <div class="p-4 text-green-800 bg-green-100 rounded">
                    {{ session()->get('message') }}
                </div>
                @endif
                <form action="/admin/bookings/{{$booking->id}}/review" enctype="multipart/form-data" method="post" id="review_form">
                    @csrf
                    <div>
                        @if($booking->agreement)
                            <p class="flex justify-center text-xl font-bold">Customer details</p>
                            <hr class="my-4 border-green-900">
                            <label class="font-bold">Customer/Company Name:</label>
                            <p class="mb-4">{{$booking->agreement->customer_name }}</p>
                            <label class="font-bold">Phone:</label>
                            <p class="mb-4">{{$booking->agreement->customer_phone }}</p>
                            <label class="font-bold">Email:</label>
                            <p class="mb-4">{{$booking->agreement->customer_email }}</p>
                            <label class="font-bold">Address: </label>
                            <p class="mb-4">{{$booking->agreement->customer_address_line_1 }}</p>
                            <p class="mb-4">{{$booking->agreement->customer_address_line_2 }}</p>
                            <label class="font-bold">DOB:</label>
                            <p class="mb-4">{{$booking->agreement->customer_dob}}"</p>
                            <label class="font-bold">License No.:</label> <p class="mb-4">{{$booking->agreement->customer_license }}</p></label>
                            <div class="flex gap-4">
                                <div class="w-1/3">
                                    <label class="font-bold">Expiry Year: </label>
                                    <p class="mb-4">{{$booking->agreement->customer_license_expiry_year}}</p>
                                </div>
                                <div class="w-1/3">
                                    <label class="font-bold">Expiry Month: </label>
                                    <p class="mb-4">{{$booking->agreement->customer_license_expiry_month}}</p>
                                </div>
                                <div class="w-1/3">
                                    <label class="font-bold">Expiry Date: </label>
                                    <p class="mb-4">{{$booking->agreement->customer_license_expiry_date}}</p>
                                </div>
                            </div>
                            <p class="flex justify-center text-xl font-bold mt-12">Additional Driver details</p>
                            <hr class="my-4 border-green-900">
                            <label class="font-bold">Additional Driver: </label>
                            <p class="mb-4">{{$booking->agreement->addtional_driver_name}}"</p>
                            <label class="font-bold">Contact Number: </label>
                            <p class="mb-4">{{$booking->agreement->addtional_driver_mobile}}"</p>
                            <label class="font-bold">Address: </label>
                            <p class="mb-4">{{$booking->agreement->addtional_driver_address_line_1}}"</p</p>
                            <p class="mb-4">{{$booking->agreement->addtional_driver_address_line_2}}"</p</p>
                            <p class="flex justify-center text-xl font-bold mt-12">License Images</p>
                            <hr class="my-4 border-green-900">
                            <div class="flex mt-4 gap-4">
                                <div class="w-1/2">
                                    <label class="font-bold">Front</label>
                                    <img src="@if($booking->agreement->license_image_front)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->agreement->license_image_front)))}} @else /images/blank.png @endif" class="rounded w-full object-cover border" alt="">
                                </div>
                                <div class="w-1/2">
                                    <label class="font-bold">Back</label>
                                    <img src="@if($booking->agreement->license_image_back)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->agreement->license_image_back)))}} @else /images/blank.png @endif" class="rounded w-full object-cover border" alt="">
                                </div>
                            </div>
                        @else
                            <p class="text-red-500">Customer hasn't completed the agreement form.</p>
                        @endif
                    </div>
                    <p class="flex justify-center text-xl font-bold mt-12">Signatures</p>
                    <hr class="my-4 border-green-900">
                    <div class="flex mt-12 gap-4">
                        <div>
                            <h4 class="text-lg font-bold">Customer Signature</h4>
                            <img src="@if($booking->agreement->customer_signature)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->agreement->customer_signature)))}} @else /images/blank.png @endif" class="rounded w-[250px] h-[125px] object-cover border border-black" alt="">
                            <p class="mt-1">Name: {{$booking->agreement->customer_signature_name}}</p>
                            <p class="mt-1">Date: {{$booking->agreement->customer_signature_date}}</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold">Driver Signature</h4>
                            <img src="@if($booking->agreement->driver_signature)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->agreement->driver_signature)))}} @else /images/blank.png @endif" class="rounded w-[250px] h-[125px] object-cover border border-black" alt="">
                            <p class="mt-1">Name: {{$booking->agreement->driver_signature_name}}</p>
                            <p class="mt-1">Date: {{$booking->agreement->driver_signature_date}}</p>
                        </div>

                        <div class="ml-auto">
                            <h4 class="text-lg font-bold">Admin Signature</h4>
                            <canvas id="signatureCanvas" class="border border-black rounded w-[250px] h-[125px]"></canvas>
                            <input type="file" name="admin_signature" id="admin_signature" class="hidden">
                        </div>
                    </div>
                    <div class="flex justify-end w-full md:mt-12">
                        <button type="submit" name="reject" class="px-4 py-2 text-white bg-red-500 rounded-lg ms-2">Reject</button>
                        <button type="button" class="px-4 py-2 text-white rounded-lg ms-2 bg-main-green" onclick="submit_form()">Approve</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // JavaScript code for handling both signature canvases
        const canvas1 = document.getElementById("signatureCanvas");
        const ctx1 = canvas1.getContext("2d");
        let drawing1 = false;

        // Function to handle drawing on canvas
        function handleDrawing(canvas, ctx, drawing) {
            canvas.addEventListener("mousedown", () => {
                drawing = true;
                ctx.beginPath();
            });

            canvas.addEventListener("mousemove", (e) => {
                if (!drawing) return;
                ctx.lineWidth = 2;
                ctx.lineCap = "round";
                ctx.strokeStyle = "black";

                // Adjust the mouse position based on the scroll offset
                const rect = canvas.getBoundingClientRect();
                const mouseX = e.clientX - rect.left;
                const mouseY = e.clientY - rect.top;

                // Draw a line
                ctx.lineTo(mouseX, mouseY);
                ctx.stroke();
            });

            canvas.addEventListener("mouseup", () => {
                drawing = false;
                ctx.closePath();
            });

            return drawing;
        }

        drawing1 = handleDrawing(canvas1, ctx1, drawing1);

        document.getElementById("clearSignature").addEventListener("click", () => {
            ctx1.clearRect(0, 0, canvas1.width, canvas1.height);
        });


        function setFile(input, file) {
            const dataTransfer = new DataTransfer()
            dataTransfer.items.add(file)
            input.files = dataTransfer.files
        }

        async function submit_form() {
            // Admin Signature
            const admin_signature_input = document.getElementById('admin_signature');
            const admin_signature_blob = await (await fetch(canvas1.toDataURL('image/png'))).blob();
            setFile(admin_signature_input, new File([admin_signature_blob], 'admin_signature.png', {
                type: "image/png"
            }));

            document.getElementById('review_form').submit();
        }
    </script>

</x-app-layout>