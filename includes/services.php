<style>
	.alignThings {
		text-align: center;
	}

	.box {
		text-align: center;
		font-weight: bold;
		color: #009926;
		border: #009926 solid;
		background-color: white;
		margin-bottom: 5px;
		padding: 1%;
		border-radius: 3px;
	}

	.tableStyle {
		margin: auto;
		width: 100%;
	}

	table {
		width: 100%;
	}

	tr,
	th,
	td {
		border: #009926;
		border-style: solid;
		border-width: 2px;
	}

	.tableFont {
		font-size: 11px;
	}

	.boxSelected {
		text-align: center;
		font-weight: bold;
		color: white;
		border-radius: 3px;
		margin-bottom: 5px;
		border: #009926;
		border: #009926 solid;
		background-color: #009926;
		padding: 1%;
	}

	@media screen and (min-width: 900px) {
		.tableStyle {
			margin: auto;
			width: 50%;
		}

		.tableFont {
			font-size: 15px;
		}
	}
</style>
<script>
	function insuranceSelected(tab1, tab2, tab3) {
		$("#" + tab1).removeClass("box");
		$("#" + tab1).addClass("boxSelected");

		$("#" + tab2).removeClass("boxSelected");
		$("#" + tab2).addClass("box");

		$("#" + tab3).removeClass("boxSelected");
		$("#" + tab3).addClass("box");
	}
</script>
<!--step 3-->

<div class="container-fluid pb-4 container-grey">
	<?php include 'includes/step-bar.php' ?>

	<script>
		var page = 'check_out';
	</script>
	<div class="pt-scroll"></div>
	<div class="container services pt-1">
		<div class="row">
			<div class="col-md-12 my-2 py-3 shadow mediaBgW">
				<div class="row ">
					<div class="col-md-6 text-center" style="font-size: large;margin-top: 10px;">
						<!-- <p style="font-size: 13px;">Specific Make/Model Subject to Availability</p> -->
						<p class="final-coral-vehicle2-line mb-0" style="font-size: 14px;">2400cc Engine • Manual • Gas Engine<br>
							FULL SIZE SUV FFMR<br>
							<span class="capacity">
								<img src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/man.jpg"> x <span id="people">5</span>
								<img src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/box.jpg"> x <span id="doors">3</span>
							</span>
						</p>
					</div>
					<div class="col-md-6 text-center zoom">
						<img src="images/ffxr-toyota-rav4-a.png" class="final-coral-vehicle img-fluid" alt="Vamos Rent-A-Car" style="width: 40%;height: auto;">
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-6 text-center text-sm">
							<div class="col-12">
								<h3 class="final-coral-h3">Pick Up At</h3>
							</div>
							<div class="col-12">
								<p class="mb-0" style="font-size: small;">
									<svg class="svg-inline--fa fa-plane fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
										<path fill="currentColor" d="M480 192H365.71L260.61 8.06A16.014 16.014 0 0 0 246.71 0h-65.5c-10.63 0-18.3 10.17-15.38 20.39L214.86 192H112l-43.2-57.6c-3.02-4.03-7.77-6.4-12.8-6.4H16.01C5.6 128-2.04 137.78.49 147.88L32 256 .49 364.12C-2.04 374.22 5.6 384 16.01 384H56c5.04 0 9.78-2.37 12.8-6.4L112 320h102.86l-49.03 171.6c-2.92 10.22 4.75 20.4 15.38 20.4h65.5c5.74 0 11.04-3.08 13.89-8.06L365.71 320H480c35.35 0 96-28.65 96-64s-60.65-64-96-64z"></path>
									</svg><!-- <i class="fas fa-plane"></i> --> San Jose Airport | <svg class="svg-inline--fa fa-calendar-alt fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="calendar-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
										<path fill="currentColor" d="M436 160H12c-6.6 0-12-5.4-12-12v-36c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48v36c0 6.6-5.4 12-12 12zM12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm116 204c0-6.6-5.4-12-12-12H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm0-128c0-6.6-5.4-12-12-12H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm128 128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm0-128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm128 128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm0-128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40z"></path>
									</svg><!-- <i class="fas fa-calendar-alt"></i> --> Feb 26, 2019<br>
									<svg class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
										<path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
									</svg><!-- <i class="fas fa-clock"></i> --> 11 00 am
								</p>
							</div>
						</div>
						<div class="col-6 text-center text-sm">
							<div class="col-12">
								<h3 class="final-coral-h3">Return At</h3>
							</div>
							<div class="col-12">
								<p class="mb-0" style="font-size: small;">
									<svg class="svg-inline--fa fa-plane fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
										<path fill="currentColor" d="M480 192H365.71L260.61 8.06A16.014 16.014 0 0 0 246.71 0h-65.5c-10.63 0-18.3 10.17-15.38 20.39L214.86 192H112l-43.2-57.6c-3.02-4.03-7.77-6.4-12.8-6.4H16.01C5.6 128-2.04 137.78.49 147.88L32 256 .49 364.12C-2.04 374.22 5.6 384 16.01 384H56c5.04 0 9.78-2.37 12.8-6.4L112 320h102.86l-49.03 171.6c-2.92 10.22 4.75 20.4 15.38 20.4h65.5c5.74 0 11.04-3.08 13.89-8.06L365.71 320H480c35.35 0 96-28.65 96-64s-60.65-64-96-64z"></path>
									</svg><!-- <i class="fas fa-plane"></i> --> San Jose Airport | <svg class="svg-inline--fa fa-calendar-alt fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="calendar-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
										<path fill="currentColor" d="M436 160H12c-6.6 0-12-5.4-12-12v-36c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48v36c0 6.6-5.4 12-12 12zM12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm116 204c0-6.6-5.4-12-12-12H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm0-128c0-6.6-5.4-12-12-12H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm128 128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm0-128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm128 128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40zm0-128c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40z"></path>
									</svg><!-- <i class="fas fa-calendar-alt"></i> --> Feb 26, 2019<br>
									<svg class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
										<path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
									</svg><!-- <i class="fas fa-clock"></i> --> 11 00 am
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<!-- barra izquierda-->

			<div class="col-md-12 px-md-0 shadow mediaBgW">
				<div class="col pt-4 shadow-sm mediaBgW">
					<div class="col py-3 ">
						<p class="lead pl-5 pt-3" style="margin-bottom:-2px; color:#009926;font-weight:bold;">Select Insurance</p>
						<div id="tab" class="" data-toggle="buttons-radio">
							<div class="row p-2 pt-3" style="margin: auto; width: 50%;">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<a href="#thirdPartyWaiver" class="" data-toggle="tab">
										<div class="boxSelected tableFont" id="tab1" onclick="insuranceSelected('tab1','tab2', 'tab3')">
											Waiver-SLI
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<a href="#basicCDW" class="" data-toggle="tab">
										<div class="box tableFont" id="tab2" onclick="insuranceSelected('tab2','tab1', 'tab3')">
											Basic CDW
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<a href="#fullCDW" class="" data-toggle="tab">
										<div class="box tableFont" id="tab3" onclick="insuranceSelected('tab3','tab1', 'tab2')">
											Full CDW
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col py-3 " style="margin-top: -20px;">
						<div class="tab-content">
							<div class="tab-pane active" id="thirdPartyWaiver">
								<div class="container pl-5 pr-5">
									<div class="options text-justify">
										<p style="font-size: 20px;">Third Party Waiver SLI</p>
										<h6 style="color:#009926; font-weight:bold;">$ 11.95 per day</h6>
										<p>The Third Party Waiver is a mandatory coverage in Costa Rica. It protects renters against liabilities resulting from injuries to bystanders and damages to third party property. SLI is offered at $11.95 per day.</p>
										<p><strong>Selecting only the Mandatory Coverage requires a formal, written proof of an alternative provider of CDW coverage (most credit card companies) and a $2,000 deposit.</strong></p>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="basicCDW">
								<div class="container pl-5 pr-5">
									<div class="options text-justify">
										<p style="font-size: 20px;">Basic Collision Damage Waiver (CDW)</p>
										<h6 style="color:#009926; font-weight:bold;">$ 20.95 per day</h6>
										<p>CDW coverage is optional, as long as the renter produces written proof of a third party provider CDW policy. A rental car cannot be rented without insurance, if written proof is unavailable, then selecting Vamos CDW policy becomes a condition of rental.</p>
										<p>Basic CDW limits this liability due to vehicle damages and/or theft with a deductible of $975, except in case of negligence. The cost for this waiver is between $16.95 and $18.95 per day, depending on make and model of rented vehicle. Rates for Basic CDW include SLI.</p>
										<p><strong>Selecting Basic CDW requires a $750 deposit at the time of vehicle pick-up.</strong></p>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="fullCDW">
								<div class="container pl-5 pr-5">
									<div class="options text-justify">
										<p style="font-size: 20px;">Full Collision Damage Waiver (CDW)</p>
										<h6 style="color:#009926; font-weight:bold;">$ 33.95 per day</h6>
										<p>CDW coverage is optional, as long as the renter produces written proof of a third party providers CDW policy. A rental car cannot be rented without insurance, if written proof is unavailable, then selecting Vamos CDW policy becomes a condition of rental.</p>
										<p>Full CDW frees the renter from financial responsibility caused by accident, theft, or total loss, except in the case of negligence. The cost for this waiver is between $26.95 and $31.95 per day, depending on make and model of rented vehicle. Rates for Full CDW include SLI.</p>
										<p><strong>Selecting Full CDW requires a $100 deposit at the time of vehicle pick-up.</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="col mt-3 p-4 py-3 ">
						<p class="lead pl-5 pt-2" style="margin-bottom:-2px; color:#009926;font-weight:bold;">Select Services</p>
						<div class="container pl-5 pr-5">
							<div class="row">
								<div class="accordion" id="accordionServices">
									<div class="card">
										<div class="card-header" id="headingOne">
											<h2 class="mb-0 d-flex">
												<div class="custom-control custom-checkbox d-inline-block">
													<input type="checkbox" name="add_on_2" id="add_on_2" class="ServiceAddOn custom-control-input" value="GPS-Hotspot-Cell Phone Plan" onclick="assign_addons('2', 5)">
													<label class="custom-control-label" for="add_on_2"></label>
												</div>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#service1" aria-expanded="true" aria-controls="service1">
													GPS-Hotspot-Cell Phone Plan ( $ 5 per Day)
												</button>
											</h2>
										</div>

										<div id="service1" class="collapse px-4" aria-labelledby="headingOne" data-parent="#accordionServices">
											<div class="card-body py-2">
												<div class="options text-justify">
													<!--								 <h4>Wazephone (GPS/Hotspot/Cell Phone Plan)</h4>-->
													<p>Explore with the only real-time, crowd-sourced, street navigation system -- Google Waze, the most popular source for GPS navigation in Costa Rica -- available in multiple languages.</p>
													<p>Not only can this cell phone replace a bulky GPS device, but it supports a Wi-Fi hotspot -- sharing unlimited internet with passengers.</p>
													<p>Last but certainly not least, our Wazephones have unlimited inbound international &amp; local calls and unlimited outbound local calls as well as providing local assistance from one of our offices.</p>
													<p>If requested, we can also provide the telephone number 3 days in advance of your rental period.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h2 class="mb-0 d-flex">

												<div class="custom-control custom-checkbox d-flex">
													<input type="checkbox" name="add_on_3" id="add_on_3" class="ServiceAddOn custom-control-input" value="Costa Rica Map" onclick="assign_addons('3', 0)">
													<label class="custom-control-label" for="add_on_3"> </label>
												</div>
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#service2" aria-expanded="false" aria-controls="service2">
													Costa Rica Map ($ 0 per Day)
												</button>
											</h2>
										</div>
										<div id="service2" class="collapse px-4" aria-labelledby="headingTwo" data-parent="#accordionServices">
											<div class="card-body py-2">
												<div class="options text-justify">
													<!--								 <h4>Costa Rica Map</h4>-->
													<p>A complimentary road map to help you start your adventures going in the right direction.</p>
													<p>This map is actually better detailed than most maps that you can purchase.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingThree">
											<h2 class="mb-0 d-flex">

												<div class="custom-control custom-checkbox d-flex">
													<input type="checkbox" name="add_on_4" id="add_on_4" class="ServiceAddOn custom-control-input" value="Ice Box" onclick="assign_addons('4', 0)">
													<label class="custom-control-label" for="add_on_4"></label>
												</div>
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#service3" aria-expanded="false" aria-controls="service3">
													Ice Box ($ 0 per Day)
												</button>
											</h2>
										</div>
										<div id="service3" class="collapse px-4" aria-labelledby="headingThree" data-parent="#accordionServices">
											<div class="card-body py-2">
												<div class="options text-justify">
													<!--								  <h4>Ice Box/Cooler</h4>-->
													<p>Keep your snacks and beverages cool during your adventures.</p>
													<p><strong>Please request cooler at time of reservation.</strong></p>
													<p><strong>Subject to availability.</strong></p>
												</div>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="card-header" id="headingThree">
											<h2 class="mb-0 d-flex">

												<div class="custom-control custom-checkbox d-flex">
													<input type="checkbox" name="add_on_5" id="add_on_5" class="ServiceAddOn custom-control-input" value="Child Seat" onclick="assign_addons('5', 0)">
													<label class="custom-control-label" for="add_on_5"></label>
												</div>
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#service4" aria-expanded="false" aria-controls="service4">
													Child Seat ($ 0 per Day)
												</button>
											</h2>
										</div>
										<div id="service4" class="collapse px-4" aria-labelledby="headingFour" data-parent="#accordionServices">
											<div class="card-body py-2">
												<div class="options text-justify">
													<div class="options text-justify">
														<!--								  <h4>Child Seating</h4>-->
														<p>Costa Rican laws require that children aged 12 or under must travel in an age/weight appropriate seat: baby seat, child seat or booster seat.</p>
														<p>We will provide the appropriate seating for your child free of charge. The<br>charge for each additional seat is only $1.95 per day.</p>
														<p><strong>Please request child seat at time of reservation.</strong></p>
														<p><strong>Subject to availability.</strong></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="col mt-3 " style="margin: auto; width:100%;">
						<p class="lead pl-5 pt-2" style="margin-bottom:-2px; color:#009926;font-weight:bold;">Your Qoute</p>
						<div class="tableStyle">
							<table class="tableFont">
								<tr>
									<th style="color:#009926">Item</th>
									<th style="color:#009926">Price</th>
								</tr>
								<tr>
									<td>Per Day</td>
									<td>$ 67.95</td>
								</tr>
								<tr>
									<td>6 Days</td>
									<td>$ 457.70</td>
								</tr>
								<tr>
									<td>Drop Off Fee</td>
									<td>$ 50.00</td>
								</tr>
								<tr>
									<td>Subtotal for Car Rental</td>
									<td>$ 507.70</td>
								</tr>
								<tr>
									<td>Insurance: Third Party Waiver-SLI</td>
									<td>$ 71.70</td>
								</tr>
								<tr>
									<td>Aditional Services</td>
									<td>$ 30.00</td>
								</tr>
								<tr>
									<td style="color:#009926; font-weight:bolder;">Total</td>
									<td style="color:#009926; font-weight:bolder;">$ 609.40</td>
								</tr>
							</table>
						</div>
						<p class="lead text-sm pl-5 pt-2 pb-4" style="margin-bottom:-2px; color:#009926;font-weight:bold;"><em>Pricing in U.S. Dollars (USD)</em></p>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-3 rightbar px-md-0">
				<div class="col py-3 shadow-sm mediaBgW">
					Right Side
				</div>
			</div> -->
		</div>
		<div class="col-12" style="margin:10px;">
			<hr class="hrYellow">
			<div class="text-center">
				<button type="submit" style="width: 150px; font-size: 18px;" class="btn btn-primary">Continue <i style="font-size: 16px;" class="fas fa-chevron-right"></i></button>
			</div>
		</div>

		<div class="row" style="margin:auto; width:70%">
			<div class="card-header-coral options" id="headingCarOptions-coral">
				<h2 class="mb-0 p-2">
					<button id="btn-corusel-coral" name="btn-corusel-coral" class="btn btn-link" type="button">
						CLICK HERE TO SEE OTHER AVAILABLE CARS&nbsp;&nbsp;<i class="fas fa-sort-down"></i>
					</button>
				</h2>
			</div>
			<div class="container">
				<div id="corusel-coral" name="corusel-coral" class="slider responsive" data-slick='{"dots": true, "infinite": true, "speed": 300,  "slidesToShow": 5, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 4000, "variableWidth": true}'>
					<div>
						<div class="card car">
							<img src="images/cdxr-suzuki-swift-2018-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
							<div class="card-body">
								<p class="card-text text-center"><strong>1 Premium SUV PFFAR<br>Mitsubishi Montero/ToyotaPrado4x4<br>Automatic</strong></p>
							</div>
							<div class="card-footer text-center">
								<p class="mb-0">Price/Day from</p>
								<p class="priceGreen">$51.95</p>
							</div>
						</div>
					</div>
					<div>
						<div class="card car">
							<img src="images/ffar-mitsubishi-outlander-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
							<div class="card-body">
								<p class="card-text text-center"><strong>2 Standard SUV SFAR<br>SsangYong Korando 4x4<br>Automatic</strong></p>
							</div>
							<div class="card-footer text-center">
								<p class="mb-0">Price/Day from</p>
								<p class="priceGreen">$51.95</p>
							</div>
						</div>
					</div>
					<div>
						<div class="card car">
							<img src="images/ffxr-toyota-rav4-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
							<div class="card-body">
								<p class="card-text text-center"><strong>3 Intermediate SUV IFMR<br>Daihatsu Bego 4x4<br>Manual</strong></p>
							</div>
							<div class="card-footer text-center">
								<p class="mb-0">Price/Day from</p>
								<p class="priceGreen">$45.95</p>
							</div>
						</div>
					</div>
					<div>
						<div class="card car">
							<img src="images/ifxr-daihatsu-bego-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
							<div class="card-body">
								<p class="card-text text-center"><strong>4 Full Size SUV FFMR<br>Toyota Rav4 4x4<br>Manual</strong></p>
							</div>
							<div class="card-footer text-center">
								<p class="mb-0">Price/Day from</p>
								<p class="priceGreen">$67.95</p>
							</div>
						</div>
					</div>
					<div>
						<div class="card car">
							<img src="images/ifxr-daihatsu-bego-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
							<div class="card-body">
								<p class="card-text text-center"><strong>5 Full Size SUV FFMR<br>Toyota Rav4 4x4<br>Manual</strong></p>
							</div>
							<div class="card-footer text-center">
								<p class="mb-0">Price/Day from</p>
								<p class="priceGreen">$67.95</p>
							</div>
						</div>
					</div>
					<div>
						<div class="card car">
							<img src="images/ifxr-daihatsu-bego-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
							<div class="card-body">
								<p class="card-text text-center"><strong>6 Full Size SUV FFMR<br>Toyota Rav4 4x4<br>Manual</strong></p>
							</div>
							<div class="card-footer text-center">
								<p class="mb-0">Price/Day from</p>
								<p class="priceGreen">$67.95</p>
							</div>
						</div>
					</div>
					<div>
						<div class="card car">
							<img src="images/ifxr-daihatsu-bego-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
							<div class="card-body">
								<p class="card-text text-center"><strong>7 Full Size SUV FFMR<br>Toyota Rav4 4x4<br>Manual</strong></p>
							</div>
							<div class="card-footer text-center">
								<p class="mb-0">Price/Day from</p>
								<p class="priceGreen">$67.95</p>
							</div>
						</div>
					</div>
					<div>
						<div class="card car">
							<img src="images/ifxr-daihatsu-bego-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
							<div class="card-body">
								<p class="card-text text-center"><strong>8 Full Size SUV FFMR<br>Toyota Rav4 4x4<br>Manual</strong></p>
							</div>
							<div class="card-footer text-center">
								<p class="mb-0">Price/Day from</p>
								<p class="priceGreen">$67.95</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>