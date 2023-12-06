<head>
	<style type="text/css">
	  body {
		font-family: Arial, sans-serif;
	  }
  
	  .header {
		border: 1px solid #000;
		width: 95%;
		margin-left: 50px;
	  }
  
	  .header-1 {
		text-align: center;
		font-size: 45px;
	  }
  
	  .contact {
		overflow: hidden;
		margin-left: 25%;
	  }
  
	  .contact p {
		float: left;
		width: 35%;
		box-sizing: border-box;
		padding-right: 10px;
	  }
  
	  .text-h {
		float: left;
		width: 50%;
		box-sizing: border-box;
		margin-left: 48px;
	  }
  
	  .text-g {
		float: left;
		width: 40%;
		box-sizing: border-box;
		margin-left: 48px;
	  }
  
	  .second-text {
		text-align: center;
		margin-top: 20px;
	  }
  
	  .form-1 {
		margin: 40px;
	  }
  
	  .form-2 {
		margin-top: 20px;
	  }
  
	  .form-3 {
		margin-top: 20px;
	  }
  
	  .table-2 {
		margin-top: 20px;
		border-collapse: collapse;
		margin-bottom: 20px;
	  }
  
	  .table-2 th,
	  .table-2 td {
		border: 1px solid #ddd;
		padding: 8px;
		text-align: left;
	  }
  
	  .table-2 th {
		background-color: #f2f2f2;
	  }
  
	  .input-rental {
		width: 50%;
	  }
  
	  .center-container {
		text-align: center;
	  }
  
	  @media only screen and (max-width: 768px) {
		.form {
		  display: block;
		}
  
		label {
		  width: 100%;
		  display: block;
		}
  
		.table-2,
		.header,
		.form-1,
		.form-2,
		.form-3,
		.rental,
		.sign-text,
		.header-term,
		.header-para {
		  margin-left: 2%;
		  margin-right: 2%;
		}
  
		.contact {
		  margin-left: 5%;
		}
  
		.text-h {
		  margin-left: 100px;
		}
  
		.text-g {
		  margin-left: 60px;
		}
	  }
	  .form label {
		display: block;
		margin-bottom: 5px;
	  }
  
	  .form input {
		width: 100%;
		box-sizing: border-box; /* Include padding and border in the width */
		margin-bottom: 10px;
		height: 40px;
	  }
  
	  @media only screen and (max-width: 768px) {
		.form label,
		.form input {
		  width: auto;
		  display: block;
		}
	  }
	</style>
  </head>
  <body>
	<div class="header">
	  <div class="center-container">
		<b class="header-1"><u>AUTOMOBILES UNLIMITED PTY LTD</u></b>
	  </div>
	  <div class="contact">
		<p>Phone: 0449541159</p>
		<p class="text-h">3/233-235 Boundary Road Mordialloc Vic 3195</p>
	  </div>
	  <div class="contact">
		<p>sales@automobex.com.au</p>
		<p class="text-h">ABN:79 6598 5869</p>
	  </div>
	  <p class="second-text">
		<b>AUTOMOBILES UNLIMITED VEHICLE RENTAL AGREEMENT</b>
	  </p>
	  <div class="form-1">
		<h2><b>CUSTOMER DETAILS</b></h2>
		<form action="">
		  <div class="form action=">
			<label for="">Customer/Company Name: <input type="text" /></label
			><br />
			<label for="">Phone: <input type="text" /></label><br />
			<label for="">Email: <input type="email" /></label><br />
			<label for="">Address: <input type="text" /></label><br />
			<label for="">License No.: <input type="text" /></label><br />
			<label for="">Expiry Date: <input type="text" /></label><br />
			<label for="">DOB: <input type="text" /></label><br />
			<label for="">Additional Driver: <input type="text" /></label><br />
			<label for="">Contact Number:<input type="text" /></label><br />
			<label for="">Address: <input type="text" /></label>
		  </div>
				  <div class="form-2">
			  <h2><b>VEHICLE DETAILS</b></h2>
			  <div action="" class="form">
				  <label for="">Registration No.: <input type="text"></label><br>
				  <label for="">Type: <input type="text"></label><br>
				  <label for="">Make: <input type="email"> </label><br>
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
					  <label for="">Number of days <input type="text"></label>
					  <label for="">Allowed vehicle mileage km/day/week <input type="text"></label>
					  <label for="">Rate per day/week <input type="email"></label>
					  <label for="">Charge for extra km <input type="text"></label>
					  <label for="">Insurance premium <input type="text"></label>
				  </div>
			  </div>
		  </div>
		  <p style="margin: 40px 40px 40px 60px;">You acknowledge that you have received and understood the terms and
			  conditions of the rental agreement.</p>
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
		  <p class="header-term">The rental agreement is made upon the detailed terms and conditions of Automobiles
			  Unlimited which will be issued to you at the time of signing the contract</p>
		  <p class="header-para">1. The renter states that he/she is physically and legally qualified to operate the above
			  described vehicle.<br /><br>
			  2. The driver should be over 25 years of age, possess a valid, unrestricted driver’s license held for at
			  least 12 months. <br /><br>
			  3. Foreign customers should present their valid drivers’ license, bank debit/credit card and any other photo
			  identification. <br /><br>
			  4. Customer must inform the correct residential address and the telephone number at the time of renting and
			  inform our office if anything changes during
			  the rental period.<br /><br>
			  5. Customer and the authorized drivers should be contactable at any time during the rental period.<br /><br>
			  6. Only the customer and the authorized drivers should drive the vehicle. <br /><br>
			  7. The driver should not be under the influence of alcohol or any other illegal drug while driving the
			  vehicle. <br /><br>
			  8. Smoking is not allowed inside the vehicle. <br /><br>
			  9. The vehicle must not be used for any illegal activity. <br /><br>
			  10. Customer is responsible for returning the vehicle on the date and time mentioned in the rental
			  agreement. If there is a delay in returning the vehicle
			  between one to three hours, half a day rate will be charged, and a full day’s rental will be charged for
			  delays over three hours.<br /><br>
			  11. All vehicles must be returned to the office every six weeks for an inspection, and bring the car in for
			  routine servicing when it is due. The customer must
			  make an appointment by calling our office for vehicle servicing. Failure to bring in the car for routine
			  servicing when they become due will make the
			  customer liable for any damage that happens to the car as a result of not servicing on time. <br /><br>
			  12. Customer should return the vehicle in the same condition and cleanliness as it was on the time of
			  commencement of the agreement and if the vehicle is
			  not cleaned properly a $100.00 cleaning fee will be charged. The fuel levels at the time of renting and at
			  the time of returning should be visibly equal.
			  Otherwise an estimated cost for fuel and $10.00 service fee will be charged.<br /><br>
			  13. In the instances where the customer intends to extend the rental period, customer must get prior
			  approval from Automobiles Unlimited. If the vehicle is
			  not returned at the time mentioned in the agreement, actions will be taken considering the has been stolen.
			  <br /><br>
			  14. It is customer’s responsibility to assure the safety of the vehicle. In case of any damage, accident to
			  the vehicle or a third party, during the rental period
			  the authorized drivers must inform all the details to Automobiles Unlimited and the police (if required) at
			  the time of the incident and should follow the
			  instructions of Automobiles Unlimited. Otherwise the customer is fully liable for all the damages and
			  expenses. Any disputes relating to the damages,
			  must be similar to the vehicle condition report.<br /><br>
			  15. In case of an accident, and it is the customer’s fault, the Insurance excess amount of $2,000.00 must be
			  paid by the customer. Unauthorized drivers
			  will not be covered by our insurance. For customers under 25yrs, an age excess of $850.00 will be added on
			  top of the standard excess. Insurance will
			  not cover overhead, under body, tyre, windscreen and water damages to the vehicle.<br /><br>
			  16. In case of a total write-off caused by the driver, the driver is liable to pay the insurance premiums
			  for the remainder of the year.
			  17. If the rental and the insurance payment have not made in advance at the time of an accident, the
			  insurance may not cover the damages and the
			  customer is liable for all the damages.<br /><br>
			  18. Customer is fully responsible for the toll way charges or any other infringements they get during the
			  rental period. Automobiles Unlimited will have to
			  surrender the customer’s information if the relevant authorities required. <br /><br>
			  19. Customer should pay for the additional kilometers at the rate mentioned in the agreement. If the
			  customer defaults rental or any other payment due,
			  Automobiles Unlimited reserves the right to inform credit rating agencies and other relevant authorities,
			  and to take legal action to recover the due
			  payments through debt collectors.<br /><br>
			  20. In an early return before the contract termination date, Automobiles Unlimited has the right to charge
			  for the full period. If it’s a long term contract an
			  extra one week’s rental will be charged.<br /><br>
			  21. By signing this you acknowledge that you have received and understood the detailed terms and conditions
			  of the Automobiles Unlimited rental
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
  
	  <!-- ... (remaining HTML unchanged) ... -->
	</div>
  </body>
