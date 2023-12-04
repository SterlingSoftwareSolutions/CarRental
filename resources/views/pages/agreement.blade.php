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
    <style>
        .header{
            border: 1px solid #000;
            width: 95%;
            margin-left: 50px;
        }
        .header-1{
            justify-content: center;
            display: flex;
            font-size: 45px;
        }
        .contact{
            margin-left: 30%;
            display: flex;
        }
        .text-h{
            margin-left: 168px;
        }
        .text-g{
            margin-left: 120px;
        }
        .second-text{
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        label {
            flex: 1 1 45%; /* Adjust the percentage to control the width of each label */
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 5px;
            width: 80%;
            box-sizing: border-box;
        }
        .form-1{
            margin-left: 40px;
        }
        .form-2{
            margin-top: 20px;
            margin-left: 40px;
        }
        .form-3{
            margin-top: 20px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin-left: 20px;
        }
        table, th, td {
            border:1px solid black;
            }
        img{
            justify-content: center;
            display: flex;
            align-items: center;
        }
        .rental{
            margin-top: 20px;
            margin-left: 60px;
        }
        .input-rental{
            margin-left: 60px;
            width: 50%;
        }
        .sign-text{
            display: flex;
            justify-content: end;
            margin-right: 20px;
            margin-top: 20px;
        }
        .header-term{
            display: flex;
            justify-content: center;
        }
        .header-para{
            margin-left: 80px;
            margin-top: 20px;
            width: 85%;
        }
        .table-2{
            margin-left: 80px;
            margin-top: 20px;
        }
        .table-container {
            width: 45%; /* Adjust the width of the container as needed */
        }

        .table-2 {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table-2 th, .table-2 td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table-2 th {
            background-color: #f2f2f2;
        }

        input[type="text"], input[type="checkbox"] {
            width: 80%;
            box-sizing: border-box;
        }

        @media only screen and (max-width: 768px) {
        .form {
            flex-direction: column;
        }

        label {
            flex: 1 1 100%;
        }

        .table-container {
            width: 100%;
            margin-left: 0;
        }

        .table-2, .header, .form-1, .form-2, .form-3, .rental, .sign-text, .header-term, .header-para {
            margin-left: 2%;
            margin-right: 2%;
        }
        .contact{
            margin-left: 5%;
        }
        .text-h{
            margin-left: 100px;
        }
        .text-g{
            margin-left: 60px;
        }
    }
    </style>
</head>
            
<body>
    @include('layouts.navigation')
    <div class="header">
        <b class="header-1"><u>AUTOMOBILES  UNLIMITED  PTY  LTD</u></b>
            <div class="contact">
                <p>Phone: 0449541159</p>
                <p class="text-h">3/233-235 Boundary Road Mordialloc Vic 3195</p>
            </div>
            <div class="contact">
                <a href="">sales@automobex.com.au</a>
                <p class="text-g">ABN:79 6598 58698</p>
            </div>
           <p class="second-text"><b>AUTOMOBILES UNLIMITED VEHICLE RENTAL AGREEMENT</b></p>
           <div class="form-1">
            <h2><b>CUSTOMER DETAILS</b></h2>
            <form action="">
                <div action="" class="form">
                    <label for="">Customer/Company Name: <input type="text"></label>
                    <label for="">Phone: <input type="text"></label>
                    <label for="">Email: <input type="email"></label>
                    <label for="">Address: <input type="text"></label>
                    <label for="">License No.: <input type="text"></label>
                    <label for="">Expiry Date:  <input type="text"></label>
                    <label for="">DOB:  <input type="text"></label>
                    <label for="">Additional Driver: <input type="text"></label>
                    <label for="">Contact Number:<input type="text"></label>
                    <label for="">Address:  <input type="text"></label>
                </div>
               </div>

               <div class="form-2">
                <h2><b>VEHICLE DETAILS</b></h2>
                <div action="" class="form">
                    <label for="">Registration No.: <input type="text"></label>
                    <label for="">Type: <input type="text"></label>
                    <label for="">Make: <input type="email"> </label>
                    <label for="">Model: <input type="text"> </label>
                    <div class="">
                        <table>
                            <thead>
                                <th></th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Mileage</th>
                                <th>Fuel Level</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pick up:</td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                </tr>
                                <tr>
                                    <td>Drop off:</td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                </tr>
                                <tr>
                                    <tr>
                                        <td>Returned:</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                    </tr> 
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
            <div class="form-2">
                <h2><b>BODY DAMAGE DETAILS</b></h2>
                <div class="form-3">
                    <div class="">
                        <img src="../Images/image.png" alt="image">
                    </div><br />
                    <div action="" class="form">
                        <label for="">Number of days <input type="text" ></label>
                        <label for="">Allowed vehicle mileage km/day/week  <input type="text"></label>
                        <label for="">Rate per day/week <input type="email"></label>
                        <label for="">Charge for extra km <input type="text"></label>
                        <label for="">Insurance premium  <input type="text"></label>
                    </div>
                </div>
            </div>
            <p style="margin: 40px 40px 40px 60px;">You acknowledge that you have received and understood the terms and conditions of the rental agreement.</p>
            <div class="rental">
                <div action="" class="form">
                    <label for="">□ Rental <input type="text"></label>
                    <label for="">□ Extra Mileage <input type="text"></label>
                    <label for="">□ Damage Liability Reduction <input type="text"></label>
                    <label for="">□ Bond / Deposit <input type="text"></label>
                    <label for="">□ Card fee <input type="text"></label>
                    <label for="">□ Others <input type="text"></label>
                    <label for="">Total <input type="text" class="input-rental"></label>
                </div>
            </div>
            <p class="sign-text">Customer Signature</p>

            <p class="header-term">TERMS AND CONDITIONS OF RENTAL</p> <br>
            <p class="header-term">The rental agreement is made upon the detailed terms and conditions of Automobiles Unlimited which will be issued to you at the time of signing the contract</p>
            <p class="header-para">1. The renter states that he/she is physically and legally qualified to operate the above described vehicle.<br/>
                2. The driver should be over 25 years of age, possess a valid, unrestricted driver’s license held for at least 12 months. <br/>
                3. Foreign customers should present their valid drivers’ license, bank debit/credit card and any other photo identification. <br/>
                4. Customer must inform the correct residential address and the telephone number at the time of renting and inform our office if anything changes during 
                the rental period.<br/>
                5. Customer and the authorized drivers should be contactable at any time during the rental period.<br/>
                6. Only the customer and the authorized drivers should drive the vehicle. <br/>
                7. The driver should not be under the influence of alcohol or any other illegal drug while driving the vehicle. <br/>
                8. Smoking is not allowed inside the vehicle. <br/>
                9. The vehicle must not be used for any illegal activity. <br/>
                10. Customer is responsible for returning the vehicle on the date and time mentioned in the rental agreement. If there is a delay in returning the vehicle 
                between one to three hours, half a day rate will be charged, and a full day’s rental will be charged for delays over three hours.<br/>
                11. All vehicles must be returned to the office every six weeks for an inspection, and bring the car in for routine servicing when it is due. The customer must 
                make an appointment by calling our office for vehicle servicing. Failure to bring in the car for routine servicing when they become due will make the 
                customer liable for any damage that happens to the car as a result of not servicing on time. <br/>
                12. Customer should return the vehicle in the same condition and cleanliness as it was on the time of commencement of the agreement and if the vehicle is 
                not cleaned properly a $100.00 cleaning fee will be charged. The fuel levels at the time of renting and at the time of returning should be visibly equal. 
                Otherwise an estimated cost for fuel and $10.00 service fee will be charged.<br/>
                13. In the instances where the customer intends to extend the rental period, customer must get prior approval from Automobiles Unlimited. If the vehicle is 
                not returned at the time mentioned in the agreement, actions will be taken considering the has been stolen. <br/>
                14. It is customer’s responsibility to assure the safety of the vehicle. In case of any damage, accident to the vehicle or a third party, during the rental period 
                the authorized drivers must inform all the details to Automobiles Unlimited and the police (if required) at the time of the incident and should follow the 
                instructions of Automobiles Unlimited. Otherwise the customer is fully liable for all the damages and expenses. Any disputes relating to the damages, 
                must be similar to the vehicle condition report.<br/>
                15. In case of an accident, and it is the customer’s fault, the Insurance excess amount of $2,000.00 must be paid by the customer. Unauthorized drivers 
                will not be covered by our insurance. For customers under 25yrs, an age excess of $850.00 will be added on top of the standard excess. Insurance will 
                not cover overhead, under body, tyre, windscreen and water damages to the vehicle.<br/>
                16. In case of a total write-off caused by the driver, the driver is liable to pay the insurance premiums for the remainder of the year.
                17. If the rental and the insurance payment have not made in advance at the time of an accident, the insurance may not cover the damages and the 
                customer is liable for all the damages.<br/>
                18. Customer is fully responsible for the toll way charges or any other infringements they get during the rental period. Automobiles Unlimited will have to 
                surrender the customer’s information if the relevant authorities required. <br/>
                19. Customer should pay for the additional kilometers at the rate mentioned in the agreement. If the customer defaults rental or any other payment due, 
                Automobiles Unlimited reserves the right to inform credit rating agencies and other relevant authorities, and to take legal action to recover the due 
                payments through debt collectors.<br/>
                20. In an early return before the contract termination date, Automobiles Unlimited has the right to charge for the full period. If it’s a long term contract an 
                extra one week’s rental will be charged.<br/>
                21. By signing this you acknowledge that you have received and understood the detailed terms and conditions of the Automobiles Unlimited rental 
                agreement</p>
                <div class="table-container">
                    <h1 class="table-2">Checklist</h1>
                    <table class="table-2">
                        <thead>
                            <th>Desciption</th>
                            <th>Remarks</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Reverse camera</td>
                                <td><input type="checkbox"></td>
                            </tr>
                    
                            <tr>
                                <td>Cargo Barrier</td>
                                <td><input type="checkbox"></td>
                            </tr>
                    
                            <tr>
                                <td>Fuel Cap</td>
                                <td><input type="checkbox"></td>
                            </tr>
                    
                            <tr>
                                <td>Rim Cups</td>
                                <td><input type="checkbox"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <div class="table-container">
                    <div class="table-2">
                        <p>Automobiles Unlimited Pty Ltd – Bank account Details </p>
                    </div>
                    <table class="table-2">
                        <tbody>
                            <tr>
                                <td>BSB</td>
                                <td><input type="text"></td>
                            </tr>
                    
                            <tr>
                                <td>Account Number</td>
                                <td><input type="text"></td>
                            </tr>
                    
                            <tr>
                                <td>Contact Number</td>
                                <td><input type="text"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    <form method="post" enctype="multipart/form-data" class="max-w-screen-xl flex flex-col gap-4 p-4 mx-auto" id="agreement_form">
        @csrf
        <div class="w-full p-8 border border-gray-300 rounded mt-28 flex justify-between items-center">
            <div class="">
                <label class="font-bold text-[#707070]" for="pdf_file">Upload Filled Agreement Form</label>
                <p class="">Please complete the following PDF form and upload it below and after filled.</p>
                <input type="file" name="agreement" id="pdf_file" accept=".pdf">
                @error('agreement')<p class="text-red-700 mt-2">{{$message}}@enderror</p>
            </div>
            <a href="/agreement-form.pdf" target="_blank" class="p-3 h-fit bg-[#317256] rounded text-white">Download Agreement Form</a>
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