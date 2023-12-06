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
        <div class="mt-7 max-w-screen-lg mx-auto">
            <!-- booking List  -->
            <h1 class="p-2 font-semibold text-lg text-[#707070]">Review Booking</h1>
            <div class="p-4 m-2 overflow-auto bg-white rounded">
                @if(session()->has('message'))
                    <div class="p-4 text-green-800 bg-green-100 rounded">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="/admin/bookings/{{$booking->id}}/review" enctype="multipart/form-data" method="post" class="flex flex-wrap gap-4" id="review_form">
                    @csrf
                    <embed
                        src="@if($booking->agreement)data:application/pdf;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->agreement)))}}@endif"
                        class="w-full h-[500px] m-2 rounded border-2 border-black"
                    />

                    <div class="p-2">
                        <h4 class="text-lg font-bold">Customer Signature</h4>
                        <img
                            src="@if($booking->customer_signature)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->customer_signature)))}} @else /images/blank.png @endif"
                            class="rounded w-[250px] h-[125px] object-cover"
                            alt=""
                        >
                    </div>

                    <div class="p-2">
                        <h4 class="text-lg font-bold">Driver Signature</h4>
                        <img
                            src="@if($booking->driver_signature)data:image/png;base64,{{base64_encode(file_get_contents(storage_path( 'app/' . $booking->driver_signature)))}} @else /images/blank.png @endif"
                            class="rounded w-[250px] h-[125px] object-cover"
                            alt=""
                        >
                    </div>

                    <div class="p-2 ml-auto">
                        <h4 class="text-lg font-bold">Admin Signature</h4>
                        <canvas id="signatureCanvas" class="border border-black rounded w-[250px] h-[125px]"></canvas>
                        <input type="file" name="admin_signature" id="admin_signature" class="">
                        @error('admin_signature')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                    </div>

                    <div class="flex justify-end w-full p-2">
                        <button type="submit" name="reject" class="px-4 py-2 ms-2 text-white bg-red-500 rounded-lg">Reject</button>
                        <button type="button" class="px-4 py-2 ms-2 text-white bg-main-green rounded-lg" onclick="submit_form()">Approve</button>
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
                ctx.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
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
            setFile(admin_signature_input, new File([admin_signature_blob], 'admin_signature.png', {type: "image/png"}));

            document.getElementById('review_form').submit();
        }
    </script>

</x-app-layout>