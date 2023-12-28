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
    <script type="text/javascript">
        function getData() {
            return {
                // Data 
                page: {{($errors->page1->any() ? 1 : 0) ?? ($errors->page2->any() ? 2 : 0) ?? ($errors->page3->any() ? 3 : 0)}},

                // Functions
                nextPage() {
                    if(this.page < 3){
                        this.page += 1;
                        document.documentElement.scrollTop = 0;
                    }
                },
                prevPage() {
                    if(this.page >= 1){
                        this.page -= 1;
                        document.documentElement.scrollTop = 0;
                    }
                },
            };
        }
    </script>
    @include('layouts.navigation')
    <form method="post" enctype="multipart/form-data" class="max-w-screen-xl flex flex-col gap-4 p-4 mx-auto" id="agreement_form" x-data="getData()">
        @csrf
        @php $user = Auth::user() @endphp

        <div class="mt-28">
            @if($errors->any())
            <div class="mx-auto bg-red-100 border border-red-300 text-red-900 p-5 rounded-lg mb-4" id="errorMessage">
                Error:
                {{$errors->first()}}
            </div>
            @endif

            <div x-show="page == 0" class="w-full p-8 border border-gray-300 rounded flex flex-col gap-4">
                <p class="flex justify-center">TERMS AND CONDITIONS OF RENTAL</p>
                <p class="p-5">
                The rental agreement is made upon the detailed terms and conditions of Automobiles Unlimited which will be issued to you at the time of signing the contract
                <br><br>
                1. The renter states that he/she is physically and legally qualified to operate the above described vehicle.
                <br><br>
                2. The driver should be over 25 years of age, possess a valid, unrestricted driver’s license held for at least 12 months.
                <br><br>
                3. Foreign customers should present their valid drivers’ license, bank debit/credit card and any other photo identification.
                <br><br>
                4. Customer must inform the correct residential address and the telephone number at the time of renting and inform our office if anything changes during the rental period.
                <br><br>
                5. Customer and the authorized drivers should be contactable at any time during the rental period.
                <br><br>
                6. Only the customer and the authorized drivers should drive the vehicle.
                <br><br>
                7. The driver should not be under the influence of alcohol or any other illegal drug while driving the vehicle.
                <br><br>
                8. Smoking is not allowed inside the vehicle.
                <br><br>
                9. The vehicle must not be used for any illegal activity.
                <br><br>
                10. Customer is responsible for returning the vehicle on the date and time mentioned in the rental agreement. If there is a delay in returning the vehicle between one to three hours, half a day rate will be charged, and a full day’s rental will be charged for delays over three hours.
                <br><br>
                11. All vehicles must be returned to the office every six weeks for an inspection, and bring the car in for routine servicing when it is due. The customer must make an appointment by calling our office for vehicle servicing. Failure to bring in the car for routine servicing when they become due will make the customer liable for any damage that happens to the car as a result of not servicing on time.
                <br><br>
                12. Customer should return the vehicle in the same condition and cleanliness as it was on the time of commencement of the agreement and if the vehicle is not cleaned properly a $100.00 cleaning fee will be charged. The fuel levels at the time of renting and at the time of returning should be visibly equal. Otherwise an estimated cost for fuel and $10.00 service fee will be charged.
                <br><br>
                13. In the instances where the customer intends to extend the rental period, customer must get prior approval from Automobiles Unlimited. If the vehicle is not returned at the time mentioned in the agreement, actions will be taken considering the has been stolen.
                <br><br>
                14. It is customer’s responsibility to assure the safety of the vehicle. In case of any damage, accident to the vehicle or a third party, during the rental period the authorized drivers must inform all the details to Automobiles Unlimited and the police (if required) at the time of the incident and should follow the instructions of Automobiles Unlimited. Otherwise the customer is fully liable for all the damages and expenses. Any disputes relating to the damages, must be similar to the vehicle condition report.
                <br><br>
                15. In case of an accident, and it is the customer’s fault, the Insurance excess amount of $2,000.00 must be paid by the customer. Unauthorized drivers will not be covered by our insurance. For customers under 25yrs, an age excess of $850.00 will be added on top of the standard excess. Insurance will not cover overhead, under body, tyre, windscreen and water damages to the vehicle.
                <br><br>
                16. In case of a total write-off caused by the driver, the driver is liable to pay the insurance premiums for the remainder of the year. 17. If the rental and the insurance payment have not made in advance at the time of an accident, the insurance may not cover the damages and the customer is liable for all the damages.
                <br><br>
                18. Customer is fully responsible for the toll way charges or any other infringements they get during the rental period. Automobiles Unlimited will have to surrender the customer’s information if the relevant authorities required.
                <br><br>
                19. Customer should pay for the additional kilometers at the rate mentioned in the agreement. If the customer defaults rental or any other payment due, Automobiles Unlimited reserves the right to inform credit rating agencies and other relevant authorities, and to take legal action to recover the due payments through debt collectors.
                <br><br>
                20. In an early return before the contract termination date, Automobiles Unlimited has the right to charge for the full period. If it’s a long term contract an extra one week’s rental will be charged.
                <br><br>
                21. By signing this you acknowledge that you have received and understood the detailed terms and conditions of the Automobiles Unlimited rental agreement
                </p>
            </div>

            <div x-show="page == 1" class="w-full p-8 border border-gray-300 rounded flex flex-col gap-4">
                <p class="flex justify-center">Customer details</p>
                <label>Customer/Company Name: <input class="w-full border-0 border-b" name="customer_name" value="{{$user['first_name']}} {{$user['last_name']}}" type="text" /></label>
                @error('customer_name', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                <label>Phone: <input class="w-full border-0 border-b" name="customer_phone" value="{{ $user['mobile'] }}" type="text" /></label>
                @error('customer_phone', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                <label>Email: <input class="w-full border-0 border-b" name="customer_email" value="{{ $user['email'] }}" type="text" /></label>
                @error('customer_email', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                <label>Address: </label>
                    <input class="w-full border-0 border-b" name="customer_address_line_1" type="text" value="{{ $user['Address_1'] }}" />
                    @error('customer_address_line_1', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                    <input class="w-full border-0 border-b" name="customer_address_line_2" type="text" value="{{ $user['Address_2'] }}" />
                    @error('customer_address_line_2', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                <label>DOB: <input class="w-full border-0 border-b" name="customer_dob" type="text" /></label>
                @error('customer_dob', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                <label>License No.:</label><input class="w-full border-0 border-b" name="customer_license" type="text" value="{{ $user['driving_license'] }}" />
                @error('customer_license', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                <div class="flex gap-4">
                    <div class="w-1/3">
                        <label>Expiry Year: </label>
                        <input class="w-full border-0 border-b" name="customer_license_expiry_year"
                            value="{{$user['driving_license_expire_year']}}" type="text" />
                        @error('customer_license_expiry_year', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                    </div>
                    <div class="w-1/3">
                        <label>Expiry Month: </label>
                        <input class="w-full border-0 border-b" name="customer_license_expiry_month"
                            value="{{$user['driving_license_expire_month']}}" type="text" />
                        @error('customer_license_expiry_month', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                    </div>
                    <div class="w-1/3">
                        <label>Expiry Date: </label>
                        <input class="w-full border-0 border-b" name="customer_license_expiry_date"
                            value="{{$user['driving_license_expire_date']}}" type="text" />
                        @error('customer_license_expiry_date', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                    </div>
                </div>

                <p class="flex justify-center mt-8">Additional Driver details</p>
                <span class="flex justify-center font-light text-center mb-4">Please note that any additional drivers for this vehicle booking must be declared. If there are no additional drivers for this booking, please leave the questions blank</span>
                <label>Additional Driver: <input class="w-full border-0 border-b" name="addtional_driver_name" type="text" /></label>
                @error('addtional_driver_name', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                <label>Contact Number:<input class="w-full border-0 border-b" name="addtional_driver_mobile" type="text" /></label>
                @error('addtional_driver_mobile', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                <label>Address:
                    <input class="w-full border-0 border-b" name="addtional_driver_address_line_1" type="text" />
                    @error('addtional_driver_address_line_1', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                    <input class="w-full border-0 border-b" name="addtional_driver_address_line_2" type="text" />
                    @error('addtional_driver_address_line_2', 'page1')<span class="text-red-600">{{$message}}</span>@enderror
                </label>
            </div>

            <div x-show="page == 2" class="w-full p-8 border border-gray-300 rounded flex flex-col gap-4">
                <p class="flex justify-center">Customer Declaration</p>
                <span class="flex justify-center font-light text-center">I do hereby acknowledge that I have read and understood the terms and conditions of the Automobiles Unlimited rental agreement and agree to abide by all of them.</span>
                <div class="flex gap-4">
                    <div class="w-full">
                        <label for="customer">Customer</label>
                        <input name="customer_signature_name" type="text" placeholder="Customer" class="border-0 border-b w-full">
                        @error('customer_signature_name', 'page2')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                    </div>
                    <div class="w-full">
                        <label for="Date">Date</label>
                        <input name="customer_signature_date" type="date" placeholder="Date" class="border-0 border-b w-full">
                        @error('customer_signature_date', 'page2')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
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
                            @error('driver_signature', 'page2')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-full">
                        <label for="Driver">Additional Driver</label>
                        <input name="driver_signature_name" type="text" placeholder="Driver" class="border-0 border-b w-full">
                        @error('driver_signature_name', 'page2')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                    </div>
                    <div class="w-full ">
                        <label for="Date">Date</label>
                        <input name="driver_signature_date" type="date" placeholder="Date" class="border-0 border-b w-full">
                        @error('driver_signature_date', 'page2')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
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
                            @error('driver_signature', 'page2')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                        </div>
                    </div>
                </div>
            </div>

            <div x-show="page == 3" class="w-full p-8 border border-gray-300 rounded flex flex-col gap-8">
                <p class="flex justify-center">License Images</p>
                <label>Image 01: <input class="w-full" name="license_image_1" type="file" /></label>
                @error('license_image_1', 'page3')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
                <label>Image 02: <input class="w-full" name="license_image_2" type="file" /></label>
                @error('license_image_2', 'page3')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
            </div>

            <div class="flex justify-between items-center">
                <p x-text="(page + 1) + '/4'" class="p-5 text-gray-500 text-lg"></p>      
                <div class="w-full flex justify-end mt-2 gap-4">
                    <button type="button" x-show="page != 0" x-on:click="prevPage()" class="p-3 bg-[#317256] disabled:bg-gray-500 rounded text-white md:mt-2 w-32">Previous</button>
                    <button type="button" x-show="page != 3" x-on:click="nextPage()" class="p-3 bg-[#317256] rounded text-white md:mt-2 w-32">Next</button>
                    <button type="button" x-show="page == 3" onclick="submit_form()" class="p-3 bg-[#317256] rounded text-white md:mt-2 w-32">Submit</button>
                </div>
            </div>
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

            canvas.addEventListener("mouseleave", () => {
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