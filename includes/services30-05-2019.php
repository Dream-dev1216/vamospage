<!--step 3-->
<div class="container-fluid pb-4 container-grey">
   <?php include 'includes/step-bar.php' ?>
   <?php include 'includes/selected-info.php' ?> 
	
   <script>
      var page = 'check_out';
   </script>
	<div class="pt-scroll"></div>
   <div class="row">
      <div class="accordion" id="carOptions">
         <div class="card options">
            <div class="card-header options" id="headingCarOptions">
               <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseCarOptions" aria-expanded="false" aria-controls="collapseCarOptions">
                  CLICK  HERE TO SEE OTHER AVAILABLE CARS&nbsp;&nbsp;<i class="fas fa-sort-down"></i>
                  </button>
               </h2>
            </div>
            <div id="collapseCarOptions" class="collapse" aria-labelledby="headingCarOptions" data-parent="#carOptions">
               <div class="card-body">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <!-- fila de carros - 4 por fila - fila 1-->
                           <div class="card-deck mb-0">
                              <div class="card car">
                                 <img src="images/cdxr-suzuki-swift-2018-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
                                 <div class="card-body">
                                    <p class="card-text text-center"><strong>Premium SUV PFFAR<br>Mitsubishi Montero/ToyotaPrado4x4<br>Automatic</strong></p>
                                 </div>
                                 <div class="card-footer text-center">
                                    <p class="mb-0">Price/Day from</p>
                                    <p class="priceGreen">$51.95</p>
                                 </div>
                              </div>
                              <div class="card car">
                                 <img src="images/ffar-mitsubishi-outlander-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
                                 <div class="card-body">
                                    <p class="card-text text-center"><strong>Standard SUV SFAR<br>SsangYong Korando 4x4<br>Automatic</strong></p>
                                 </div>
                                 <div class="card-footer text-center">
                                    <p class="mb-0">Price/Day from</p>
                                    <p class="priceGreen">$51.95</p>
                                 </div>
                              </div>
                              <div class="card car">
                                 <img src="images/ffxr-toyota-rav4-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
                                 <div class="card-body">
                                    <p class="card-text text-center"><strong>Intermediate SUV IFMR<br>Daihatsu Bego 4x4<br>Manual</strong></p>
                                 </div>
                                 <div class="card-footer text-center">
                                    <p class="mb-0">Price/Day from</p>
                                    <p class="priceGreen">$45.95</p>
                                 </div>
                              </div>
                              <div class="card car">
                                 <img src="images/ifxr-daihatsu-bego-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
                                 <div class="card-body">
                                    <p class="card-text text-center"><strong>Full Size SUV FFMR<br>Toyota Rav4 4x4<br>Manual</strong></p>
                                 </div>
                                 <div class="card-footer text-center">
                                    <p class="mb-0">Price/Day from</p>
                                    <p class="priceGreen">$67.95</p>
                                 </div>
                              </div>
							   <div class="card car">
                                 <img src="images/ifxr-daihatsu-bego-a.png" class="img-fluid mx-auto" alt="Vamos Rent-A-Car">
                                 <div class="card-body">
                                    <p class="card-text text-center"><strong>Full Size SUV FFMR<br>Toyota Rav4 4x4<br>Manual</strong></p>
                                 </div>
                                 <div class="card-footer text-center">
                                    <p class="mb-0">Price/Day from</p>
                                    <p class="priceGreen">$67.95</p>
                                 </div>
                              </div>
                           </div>
                           <!-- fin fila de carros - fila 1 -->
                        </div>
                     </div> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
	
	<div class="container services pt-3">
		<div class="row">
			<!-- barra izquierda-->
			<div class="col-md-9 px-md-0">
				<div class="col py-3 shadow-sm mediaBgW">
					<h4>Select Insurance:</h4>
					<div class="row">
					<div class="col-md-5">
						   <div class="custom-control custom-radio custom-control">
								   <input type="radio" name="insurance" id="insurance1" class="seguros custom-control-input" value="Third Party Waiver-SLI" checked onclick="assign_insurance(76,11.95, 'Third Party Waiver-SLI')">
									<label class="custom-control-label" for="insurance1">  Third Party Waiver-SLI ( $ 11.95 per day )</label>
							</div>
						   <div class="custom-control custom-radio custom-control">
								   <input type="radio" name="insurance" id="insurance2" class="seguros custom-control-input" value="Basic CDW"  onclick="assign_insurance(77,20.95, 'Basic CDW')">
									<label class="custom-control-label" for="insurance2">   Basic CDW ( $ 20.95 per day )</label>
							   </button>
							</div>
					   		<div class="custom-control custom-radio custom-control">
								   <input type="radio" name="insurance" id="insurance3" class="seguros custom-control-input" value="Full CDW"  onclick="assign_insurance(78,33.95, 'Full CDW')">
									<label class="custom-control-label" for="insurance3">   Full CDW ( $ 33.95 per day )</label>
							   </button>
							</div>
					   </div>
					   <div class="col-md-7">
						   <div id="collapse1">
							   <div class="options text-justify">
								  <h4>Third Party Waiver SLI</h4>
								  <p>The Third Party Waiver is a mandatory coverage in Costa Rica. It protects renters against liabilities resulting from injuries to bystanders and damages to third party property. SLI is offered at $11.95 per day.</p>
								  <p><strong>Selecting only the Mandatory Coverage requires a formal, written proof of an alternative provider of CDW coverage (most credit card companies) and a $2,000 deposit.</strong></p>
							   </div>
                        	</div>
						    <div id="collapse2" class="collapse">
							   <div class="options text-justify">
								 <h4>Basic Collision Damage Waiver (CDW) with a $975 Deductible</h4>
								  <p>CDW coverage is optional, as long as the renter produces written proof of a third party provider CDW policy. A rental car cannot be rented without insurance, if written proof is unavailable, then selecting Vamos CDW policy becomes a condition of rental.</p>
								  <p>Basic CDW limits this liability due to vehicle damages and/or theft with a deductible of $975, except in case of negligence. The cost for this waiver is between $16.95 and $18.95 per day, depending on make and model of rented vehicle. Rates for Basic CDW include SLI.</p>
								  <p><strong>Selecting Basic CDW requires a $750 deposit at the time of vehicle pick-up.</strong></p>
							   </div>
                        	</div>
						   <div id="collapse3" class="collapse">
							   <div class="options text-justify">
								 <h4>Full Collision Damage Waiver (CDW) with a $0 Deductible</h4>
								  <p>CDW coverage is optional, as long as the renter produces written proof of a third party providers CDW policy. A rental car cannot be rented without insurance, if written proof is unavailable, then selecting Vamos CDW policy becomes a condition of rental.</p>
								  <p>Full CDW frees the renter from financial responsibility caused by accident, theft, or total loss, except in the case of negligence. The cost for this waiver is between $26.95 and $31.95 per day, depending on make and model of rented vehicle. Rates for Full CDW include SLI.</p>
								  <p><strong>Selecting Full CDW requires a $100 deposit at the time of vehicle pick-up.</strong></p>
							   </div>
                        	</div>
					   </div>
			</div>
				</div>
		
		<div class="col mt-3 py-3 shadow-sm mediaBgW">
			<h4>Select Your Additional Services:</h4>
			<div class="row">
					   <div class="col-md-5">
						   <div class="custom-control custom-checkbox custom-control">
								   <input type="checkbox" name="add_on_2" id="add_on_2" class="ServiceAddOn custom-control-input" value="GPS-Hotspot-Cell Phone Plan" onclick="assign_addons('2', 5)">
									<label class="custom-control-label" for="add_on_2">  GPS-Hotspot-Cell Phone Plan ( $ 5 per Day)</label>
							</div>
						   <div class="custom-control custom-checkbox custom-control">
								   <input type="checkbox" name="add_on_3" id="add_on_3" class="ServiceAddOn custom-control-input" value="Costa Rica Map" onclick="assign_addons('3', 0)">
									<label class="custom-control-label" for="add_on_3">  Costa Rica Map ($ 0 per Day)</label>
							   </button>
							</div>
					   		<div class="custom-control custom-checkbox custom-control">
								   <input type="checkbox" name="add_on_4" id="add_on_4" class="ServiceAddOn custom-control-input" value="Ice Box" onclick="assign_addons('4', 0)">
									<label class="custom-control-label" for="add_on_4">   Ice Box ($ 0 per Day)</label>
							   </button>
							</div>
							<div class="custom-control custom-checkbox custom-control">
								   <input type="checkbox" name="add_on_5" id="add_on_5" class="ServiceAddOn custom-control-input" value="Child Seat" onclick="assign_addons('5', 0)">
									<label class="custom-control-label" for="add_on_5">   Child Seat ($ 0 per Day)</label>
							   </button>
							</div>
					   </div>
					   <div class="col-md-7">
						   <div id="collapse4" class="collapse">
							   <div class="options text-justify">
								 <h4>Wazephone (GPS/Hotspot/Cell Phone Plan)</h4>
								  <p>Explore with the only real-time, crowd-sourced, street navigation system -- Google Waze, the most popular source for GPS navigation in Costa Rica -- available in multiple languages.</p>
								  <p>Not only can this cell phone replace a bulky GPS device, but it supports a Wi-Fi hotspot -- sharing unlimited internet with passengers.</p>
								  <p>Last but certainly not least, our Wazephones have unlimited inbound international &amp; local calls and unlimited outbound local calls as well as providing local assistance from one of our offices.</p>
								  <p>If requested, we can also provide the telephone number 3 days in advance of your rental period.</p>
							   </div>
                        	</div>
						    <div id="collapse5" class="collapse">
							   <div class="options text-justify">
								 <h4>Costa Rica Map</h4>
								  <p>A complimentary road map to help you start your adventures going in the right direction.</p>
								  <p>This map is actually better detailed than most maps that you can purchase.</p>
							   </div>
                        	</div>
						   <div id="collapse6" class="collapse">
							   <div class="options text-justify">
								  <h4>Ice Box/Cooler</h4>
								  <p>Keep your snacks and beverages cool during your adventures.</p>
								  <p><strong>Please request cooler at time of reservation.</strong></p>
								  <p><strong>Subject to availability.</strong></p>
							   </div>
                        	</div>
						   <div id="collapse7" class="collapse">
							   <div class="options text-justify">
								  <h4>Child Seating</h4>
								  <p>Costa Rican laws require that children aged 12 or under must travel in an age/weight appropriate seat: baby seat, child seat or booster seat.</p>
								  <p>We will provide the appropriate seating for your child free of charge. The<br>charge for each additional seat is only $1.95 per day.</p>
								  <p><strong>Please request child seat at time of reservation.</strong></p>
								  <p><strong>Subject to availability.</strong></p>
							   </div>
                        	</div>
					   </div>
						
						<div class="col-12">
							 <hr class="hrYellow">
							  <div class="text-center">
							  <button type="submit" style="width: 150px; font-size: 18px;" class="btn btn-primary">Continue <i style="font-size: 16px;" class="fas fa-chevron-right"></i></button>
							   </div>
						</div>
				   </div>
		</div>





<!--

<div class="col mt-3 py-3 shadow-sm mediaBgW">		
	<div class="row">
		
	</div>
</div>
-->


</div><!-- fin barra izquierda-->
			
			
			<!-- barra derecha-->
			<div class="col-md-3 rightbar pr-md-0">
				<div class="col py-3 shadow-sm mediaBgW">
					<h4>Your Quote Details</h4>
					<p class="text-sm mb-1"><em>Pricing in U.S. Dollars (USD)</em></p>
					
					<ul class="list-group list-group-top">
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  Per Day
                  <span class="badge badge-pill">$ 67.95</span>
               </li>
			   <li class="list-group-item d-flex justify-content-between align-items-center">
                  6 Days
                  <span class="badge badge-pill">$ 457.70</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  Drop Off Fee
                  <span class="badge badge-pill">$ 50.00</span>
			</li>
<!--					  <li class="list-group-item"><hr></li>-->
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <strong>Subtotal for Car Rental</strong>
                  <span class="badge badge-pill"><strong>$ 507.70</strong></span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  Insurance: Third Party Waiver-SLI
                  <span class="badge badge-pill">$ 71.70</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  Aditional Services
                  <span class="badge badge-pill">$ 30.00</span>
               </li>
			   <li class="list-group-item d-flex justify-content-between align-items-center totalLi">
                 TOTAL
                  <span class="badge badge-pill">$ 609.40</span>
               </li>
            </ul>
					
<!--					<hr class="hrYellow">-->
					<hr>
					
					<div class="quotesIncludes">
						
						<p class="text-sm text-center"><strong>All Vehicles Equipped with:</strong></p>
						<p class="text-sm">
               		<i class="fas fa-check" style="color: #009926; font-size: 10px;"></i> Radio/CD Player<br>
					<i class="fas fa-check"  style="color: #009926; font-size: 10px;"></i> Air Conditioning
						</p>
            </p>
					<p class="text-sm text-center"><strong>All Quotes Include:</strong></p>
						 <p class="text-sm mb-0">
               <i class="fas fa-check"  style="color: #009926; font-size: 10px;"></i> Free Additional Driver<br>
			<i class="fas fa-check"  style="color: #009926; font-size: 10px;"></i> Courtesy Airport Shuttle<br>
						 <i class="fas fa-check"  style="color: #009926; font-size: 10px;"></i> Unlimited Mileage<br>
						<i class="fas fa-check"  style="color: #009926; font-size: 10px;"></i> Complimentary Cell Phone<br>
						<i class="fas fa-check"  style="color: #009926; font-size: 10px;"></i> Baby Seat *<br>
						<i class="fas fa-check"  style="color: #009926; font-size: 10px;"></i> Cooler *
            </p>
</div>
					
					
				</div>
			</div>
			<!-- fin barra derecha-->
		</div>
	</div>
	
	
</div>	
	
	
	
	
	
	
	
	
	
	