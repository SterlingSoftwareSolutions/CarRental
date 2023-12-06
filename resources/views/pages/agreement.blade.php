<!DOCTYPE html>
<html lang="en">

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
</head>
            
<body>
    @include('layouts.navigation')
    <form method="post" enctype="multipart/form-data" class="max-w-screen-xl flex flex-col gap-4 p-4 mx-auto" id="agreement_form">
        @csrf
        <div class="w-full p-8 border border-gray-300 rounded mt-28 flex justify-between items-center">
            <div class="">
                <label class="font-bold text-[#707070]" for="pdf_file">Upload Filled Agreement Form</label>
                <p class="">Please complete the following PDF form and upload it below and after filled.</p>
                <input type="file" name="agreement" id="pdf_file" accept=".pdf">
                @error('agreement')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
            </div>
            <a href="{{route('bookings.pdf', ['booking' => $booking])}}" target="_blank" class="p-3 h-fit bg-[#317256] rounded text-white">Download Agreement Form</a>
        </div>
        <div class="w-full p-8 border border-gray-300 rounded flex flex-col gap-4">
            <p class="flex justify-center">Customer Declaration</p>
            <span class="flex justify-center font-light text-center">I do hereby acknowledge that I have read and understood the terms and conditions of the Automobiles Unlimited rental agreement and agree to abide by all of them.</span>
            <div class="flex gap-4">
                <div class="w-full">
                    <label for="customer">Customer</label>
                    <input name="customer" type="text" placeholder="Customer" class="border-0 border-b w-full">
                    @error('customer')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                </div>
                <div class="w-full">
                    <label for="Date">Date</label>
                    <input name="customer_date" type="date" placeholder="Date" class="border-0 border-b w-full">
                    @error('customer_date')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                </div>

                <!-- First Signature Field -->
                <div class="w-full flex justify-end">
                    <div class="w-[300px]">
                        <div class="flex justify-between">
                            <label for="Signature">Signature</label>
                            <button type="button" id="clearSignature">Clear</button>
                        </div>
                        <canvas id="signatureCanvas" class="border border-black rounded w-full"></canvas>
                        <input type="file" name="customer_signature" id="customer_signature" class="hidden">
                        @error('driver_signature')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                    </div>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="w-full">
                    <label for="Driver">Authorized Driver</label>
                    <input name="driver" type="text" placeholder="Driver" class="border-0 border-b w-full">
                    @error('driver')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                </div>
                <div class="w-full ">
                    <label for="Date">Date</label>
                    <input name="driver_date" type="date" placeholder="Date" class="border-0 border-b w-full">
                    @error('driver_date')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                </div>
                <!-- Second Signature Field -->
                <div class="w-full flex justify-end">
                    <div class="w-[300px]">
                        <div class="flex justify-between">
                            <label for="Signature2">Signature</label>
                            <button type="button" id="clearSignature2">Clear</button>
                        </div>
                        <canvas id="signatureCanvas2" class="border border-black rounded w-full"></canvas>
                        <input type="file" name="driver_signature" id="driver_signature" class="hidden">
                        @error('driver_signature')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-end mt-2">
            <button type="button" onclick="submit_form()" class="p-3 bg-[#317256] rounded text-white md:mt-2 w-32">Submit</button>
        </div>
    </form>
    @include('layouts.footer')

    <script>
        // JavaScript code for handling both signature canvases
        const canvas1 = document.getElementById("signatureCanvas");
        const ctx1 = canvas1.getContext("2d");
        let drawing1 = false;

        const canvas2 = document.getElementById("signatureCanvas2");
        const ctx2 = canvas2.getContext("2d");
        let drawing2 = false;

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
        drawing2 = handleDrawing(canvas2, ctx2, drawing2);

        document.getElementById("clearSignature").addEventListener("click", () => {
            ctx1.clearRect(0, 0, canvas1.width, canvas1.height);
        });

        document.getElementById("clearSignature2").addEventListener("click", () => {
            ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
        });

        function setFile(input, file) {
            const dataTransfer = new DataTransfer()
            dataTransfer.items.add(file)
            input.files = dataTransfer.files
        }

        async function submit_form() {

            // Customer Signature
            const customer_signature_input = document.getElementById('customer_signature');
            const customer_signature_blob = await (await fetch(canvas1.toDataURL('image/png'))).blob();
            setFile(customer_signature_input, new File([customer_signature_blob], 'customer_signature.png', {type: "image/png"}));

            // Driver Signature
            const driver_signature_input = document.getElementById('driver_signature');
            const driver_signature_blob = await (await fetch(canvas2.toDataURL('image/png'))).blob();
            setFile(driver_signature_input, new File([driver_signature_blob], 'driver_signature.png', {type: "image/png"}));

            document.getElementById('agreement_form').submit();
        }
    </script>
</body>

</html>