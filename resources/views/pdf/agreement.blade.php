<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agreement</title>
</head>

<body style="font-family: sans-serif;">
	<div style="width: 100%; text-align: center; font-size: 30px;">
		<b><u>AUTOMOBILES UNLIMITED PTY LTD</u></b>
	</div>
	<table style="width: 85%; margin: auto;">
		<tr>
			<td>
				<div>
					<p>Phone: 0449541159</p>
					<p>3/233-235 Boundary Road Mordialloc Vic 3195</p>
				</div>
			</td>
			<td>
				<div>
					<p>sales@automobex.com.au</p>
					<p>ABN:79 6598 5869</p>
				</div>
			</td>
		</tr>
	</table>
	<p style="text-align: center;">
		<b>AUTOMOBILES UNLIMITED VEHICLE RENTAL AGREEMENT</b>
	</p>
	<div>
		<div>
			<h3 style="margin-top: 30px;"><b>CUSTOMER DETAILS</b></h3>
			<label>Customer/Company Name: <input style="width: 100%;" name="customer_name" value="{{$agreement?->customer_name}}" type="text" readonly="readonly" /></label><br />
			<label>Phone: <input style="width: 100%;" name="customer_phone" value="{{$agreement?->customer_phone}}" type="text" readonly="readonly" /></label><br />
			<label>Email: <input style="width: 100%;" name="customer_email" value="{{$agreement?->customer_email}}" type="text" readonly="readonly" /></label><br />
			<label>Address: </label>
				<input style="width: 100%;" name="customer_address_line_1" value="{{$agreement?->customer_address_line_1}}" type="text" readonly="readonly" /><br />
				<input style="width: 100%;" name="customer_address_line_2" value="{{$agreement?->customer_address_line_2}}" type="text" readonly="readonly" />
			<label>License No.:</label><input style="width: 100%;" name="customer_license" value="{{$agreement?->customer_license}}" type="text" readonly="readonly" /><br />
			<label style="width: 100%;">Expiry Date:</label><br />
				Year: <input style="width: 25%;" name="customer_license_expiry_year" value="{{$agreement?->customer_license_expiry_year}}" type="text" readonly="readonly" />
				Month: <input style="width: 25%;" name="customer_license_expiry_month" value="{{$agreement?->customer_license_expiry_month}}" type="text" readonly="readonly" />
				Date: <input style="width: 25%;" name="customer_license_expiry_date" value="{{$agreement?->customer_license_expiry_date}}" type="text" readonly="readonly" /><br/>
			<label>DOB: <input style="width: 100%;" name="customer_dob" value="{{$agreement?->customer_dob}} "type="text" readonly="readonly" /></label><br />
		</div>
		<div>
			<h3 style="margin-top: 30px;"><b>ADDITIONAL DRIVER DETAILS</b></h3>
			<p style="margin-bottom: 10px; margin-top: 0;">Please note that any additional drivers for this vehicle booking must be declared. If there are no additional drivers for this booking, please leave the questions blank.</p>
			<label>Additional Driver: <input style="width: 100%;" name="addtional_driver_name" value="{{$agreement?->addtional_driver_name}}" type="text" readonly="readonly" /></label><br />
			<label>Contact Number:<input style="width: 100%;" name="addtional_driver_mobile" value="{{$agreement?->addtional_driver_mobile}}" type="text" readonly="readonly" /></label><br />
			<label>Address:</label>
			<input style="width: 100%;" name="addtional_driver_address_line_1" value="{{$agreement?->addtional_driver_address_line_1}}" type="text" readonly="readonly" />
			<input style="width: 100%;" name="addtional_driver_address_line_2" value="{{$agreement?->addtional_driver_address_line_2}}" type="text" readonly="readonly" />
		</div>

		<div style="page-break-before: always;">
			<h3 style="margin-top: 30px;"><b>VEHICLE DETAILS</b></h3>
			<p style="margin-bottom: 10px; margin-top: 0;">To be filled out by admin</p>
			<div>
				<label>Registration No.: <input style="width: 100%;" name="vehicle_reg_no" value="{{$vehicle['reg_no']}} "type="text" readonly="readonly" /></label><br>
				<label>Type: <input style="width: 100%;" name="vehicle_type" value="{{$vehicle['body_type']}} "type="text" readonly="readonly" /></label><br>
				<label>Make: <input style="width: 100%;" name="vehicle_make" value="{{$vehicle['make']}} "type="text" readonly="readonly" /> </label><br>
				<label>Model: <input style="width: 100%;" name="vehicle_model" value="{{$vehicle['model']}} "type="text" readonly="readonly" /> </label>
			</div>
			<div>
				<table>
					<thead>
						<tr>
							<th></th>
							<th style="width: 20%;">Date</th>
							<th style="width: 20%;">Time</th>
							<th style="width: 20%;">Mileage</th>
							<th style="width: 20%;">Fuel Level</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Pick up:</td>
							<td><input name="pickup_date" value="{{\Carbon\Carbon::parse($booking['pickup_time'])->format('Y-m-d') }}" style="width: 20%;" type="text"></td>
							<td><input name="pickup_time" value="{{ \Carbon\Carbon::parse($booking['pickup_time'])->format('H:i') }}" style="width: 20%;" type="text"></td>
							<td><input name="pickup_mileage" style="width: 20%;" type="text"></td>
							<td><input name="pickup_fuel_level" style="width: 20%;" type="text"></td>
						</tr>
						<tr>
							<td>Drop off:</td>
							<td><input name="dropoff_date" value="{{\Carbon\Carbon::parse($booking['dropoff_time'])->format('Y-m-d') }}" style="width: 20%;" type="text"></td>
							<td><input name="dropoff_time" value="{{ \Carbon\Carbon::parse($booking['dropoff_time'])->format('H:i') }}" style="width: 20%;" type="text"></td>
							<td><input name="dropoff_mileage" style="width: 20%;" type="text"></td>
							<td><input name="dropoff_fuel_level" style="width: 20%;" type="text"></td>
						</tr>
						<tr>
						<tr>
							<td>Returned:</td>
							<td><input name="returned_date" style="width: 20%;" type="text"></td>
							<td><input name="returned_time" style="width: 20%;" type="text"></td>
							<td><input name="returned_mileage" style="width: 20%;" type="text"></td>
							<td><input name="returned_fuel_level" style="width: 20%;" type="text"></td>
						</tr>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div>
			<h3 style="margin-top: 30px;"><b>BODY DAMAGE DETAILS</b></h3>
			<p style="margin-bottom: 10px; margin-top: 0;">To be filled out by admin</p>
			<div>
				<table>
					<tr>						
						<td style="text-align: center;">
							<img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path( 'images/body_damage_left.png' )))}}">
							<p style="width: 100%;">Side (Left)</p>
						</td>
						<td style="vertical-align: top;">
							<textarea style="width: 100%" name="body_damage_left" rows="8">&nbsp;</textarea>
							<p><input type="checkbox" name="body_damage_left_none" value="1"/> No visible damages</p>
						</td>
					</tr>
					<tr>						
						<td style="text-align: center;">
							<img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path( 'images/body_damage_right.png' )))}}">
							<p style="width: 100%;">Side (Right)</p>
						</td>
						<td style="vertical-align: top;">
							<textarea style="width: 100%" name="body_damage_right" rows="8">&nbsp;</textarea>
							<p><input type="checkbox" name="body_damage_right_none" value="1"/> No visible damages</p>
						</td>
					</tr>
					<tr>						
						<td style="text-align: center;">
							<img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path( 'images/body_damage_front.png' )))}}">
							<p style="width: 100%;">Front</p>
						</td>
						<td style="vertical-align: top;">
							<textarea style="width: 100%" name="body_damage_front" rows="8">&nbsp;</textarea>
							<p><input type="checkbox" name="body_damage_front_none" value="1"/> No visible damages</p>
						</td>
					</tr>
					<tr>						
						<td style="text-align: center;">
							<img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path( 'images/body_damage_back.png' )))}}">
							<p style="width: 100%;">Back</p>
						</td>
						<td style="vertical-align: top;">
							<textarea style="width: 100%" name="body_damage_back" rows="8">&nbsp;</textarea>
							<p><input type="checkbox" name="body_damage_back_none" value="1"/> No visible damages</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div style="page-break-before: always;">
			<h3 style="margin-top: 30px;"><b>BOOKING DETAILS</b></h3>
			<p style="margin-bottom: 10px; margin-top: 0;">To be filled out by admin</p>
			<div>
				<div>
					<table>
						<tbody>
							<tr>
								<td style="width: 50%;">
									<label>Number of days</label>
									<input name="number_of_days" type="text" style="width: 50%;">
								</td>
								<td style="width: 50%;">
									<label>Allowed vehicle mileage km/day/week</label>
									<input name="allowed_vehicle_mileage" type="text" style="width: 50%;">
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									<label>Rate per day/week</label>
									<input name="rate" type="text" style="width: 50%;">
								</td>
								<td style="width: 50%;">
									<label>Charge for extra km</label>
									<input name="extra_charge_km" type="text" style="width: 50%;">
								</td>
							</tr>
							<tr>

								<td style="width: 50%;">
									<label>Insurance premium</label>
									<input name="insurance_premium" type="text" style="width: 50%;">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div>
			<h3 style="margin-top: 30px;"><b>CHECKLIST</b></h3>
			<p style="margin-bottom: 10px; margin-top: 0;">To be filled out by admin upon the return of the vehicle</p>
			<table>
				<thead>
					<td>Desciption</td>
					<td>Remarks</td>
				</thead>
				<tbody>
					<tr>
						<td>Reverse camera</td>
						<td><input value="null" name="reverse_camera" type="checkbox"></td>
					</tr>
					<tr>
						<td>Cargo Barrier</td>
						<td><input value="null" name="cargo_barrier" type="checkbox"></td>
					</tr>
					<tr>
						<td>Fuel Cap</td>
						<td><input value="null" name="fuel_cap" type="checkbox"></td>
					</tr>
					<tr>
						<td>Rim Cups</td>
						<td><input value="null" name="rim_cups" type="checkbox"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div style="margin-top: 30px;">
			<table>
				<tr>
					<td>
						<label>□ Rental</label>
						<input name="rental" type="text" style="width: 50%;">
					</td>
					<td>
						<label>□ Extra Mileage</label>
						<input name="extra_mileage" type="text" style="width: 50%;">
					</td>
				</tr>
				<tr>
					<td>
						<label>□ Damage Liability Reduction</label>
						<input name="damage_liablity_reduction" type="text" style="width: 50%;">
					</td>
					<td>
						<label>□ Bond / Deposit</label>
						<input name="bond_depost" type="text" style="width: 50%;">
					</td>
				</tr>
				<tr>
					<td>
						<label>□ Card fee</label>
						<input name="card_fee" type="text" style="width: 50%;">
					</td>
					<td>
						<label>□ Others</label>
						<input name="others" type="text" style="width: 50%;">
					</td>
				</tr>
				<tr>
					<td>
						<label>Total</label>
						<input name="total" type="text" style="width: 50%;">
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div style="page-break-before: always;">
		<p style="font-size: 20px;">TERMS AND CONDITIONS OF RENTAL</p>
		<p>The rental agreement is made upon the detailed terms and conditions of Automobiles
			Unlimited which will be issued to you at the time of signing the contract</p>
		<p>1. The renter states that he/she is physically and legally qualified to operate the above
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
			<br  /><br>
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
			agreement
		</p>
	</div>
</body>

</html>