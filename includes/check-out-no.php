<div class="container-fluid pb-4 container-grey">
   <!--   < ?php include 'includes/summary-top.php' ?> -->
   <?php include 'includes/selected-car.php' ?> 
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
                                 <img src="images/cdxr-suzuki-swift-2018-a.png" class="card-img-top" alt="Vamos Rent-A-Car">
                                 <div class="card-body">
                                    <p class="card-text text-center"><strong>Premium SUV PFFAR<br>Mitsubishi Montero/ToyotaPrado4x4<br>Automatic</strong></p>
                                 </div>
                                 <div class="card-footer text-center">
                                    <p class="mb-0">Price/Day from</p>
                                    <p class="priceGreen">$51.95</p>
                                 </div>
                              </div>
                              <div class="card car">
                                 <img src="images/ffar-mitsubishi-outlander-a.png" class="card-img-top" alt="Vamos Rent-A-Car">
                                 <div class="card-body">
                                    <p class="card-text text-center"><strong>Standard SUV SFAR<br>SsangYong Korando 4x4<br>Automatic</strong></p>
                                 </div>
                                 <div class="card-footer text-center">
                                    <p class="mb-0">Price/Day from</p>
                                    <p class="priceGreen">$51.95</p>
                                 </div>
                              </div>
                              <div class="card car">
                                 <img src="images/ffxr-toyota-rav4-a.png" class="card-img-top" alt="Vamos Rent-A-Car">
                                 <div class="card-body">
                                    <p class="card-text text-center"><strong>Intermediate SUV IFMR<br>Daihatsu Bego 4x4<br>Manual</strong></p>
                                 </div>
                                 <div class="card-footer text-center">
                                    <p class="mb-0">Price/Day from</p>
                                    <p class="priceGreen">$45.95</p>
                                 </div>
                              </div>
                              <div class="card car">
                                 <img src="images/ifxr-daihatsu-bego-a.png" class="card-img-top" alt="Vamos Rent-A-Car">
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
   <?php include 'includes/step-bar.php' ?><!-- step 2 -->
 
   <div class="container p-4 mb-3 shadow-sm mediaBgW">
      <div class="row ">
         <div class="col-12 ">
            <h1 class="mb-3 text-center">Select Insurance and Services Options</h1>
			 <div class="row pb-3">
			  <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <p class="text-center mb-0 text-sm"><strong>All Vehicles Equipped with:</strong><br>	
               Radio/CD Player <i class="fas fa-circle dot-divider"></i>  Air Conditioning
            </p>
         </div>
         <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <p class="text-center mb-0 text-sm"><strong>All Quotes Include:</strong><br>
               Free Additional Driver <i class="fas fa-circle dot-divider"></i>  Courtesy Airport Shuttle <i class="fas fa-circle dot-divider"></i> Unlimited Mileage <i class="fas fa-circle dot-divider"></i> Complimentary Cell Phone <i class="fas fa-circle dot-divider"></i> Baby Seat * <i class="fas fa-circle dot-divider"></i> Cooler *
            </p>
      </div>
				  <div class="col-12">  <hr class="hrYellow"></div>
				 </div>
         </div>
         <div class="col-lg-12">
            <div class="card mb-4">
               <div class="card-header">
                  Insurance <small>(click each option for more info)</small>
               </div>
               <div class="card-body">
				   <div class="row">
					   <div class="col-md-4">
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
					   <div class="col-md-8">
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
            </div>
         </div>
         <div class="col-lg-12">
            <div class="card mb-4">
               <div class="card-header">
                  Additional Services <small>(click each option for more info)</small>
               </div>
				<div class="card-body">
				   <div class="row">
					   <div class="col-md-4">
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
					   <div class="col-md-8">
						   <div id="collapse4">
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
				   </div>
               </div>
<!--
               <div class="card-body options">
                  <div class="accordion" id="additionalAccordion">
                     <div class="card">
                        <div class="card-header p-0" id="headingCheckOne">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="add_on_2" id="add_on_2" class="ServiceAddOn custom-control-input" value="GPS-Hotspot-Cell Phone Plan" onclick="assign_addons('2', 5)">
                              <label class="custom-control-label" for="add_on_2">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCheckOne" aria-expanded="false" aria-controls="collapseOne">
                              GPS-Hotspot-Cell Phone Plan ( $ 5 per Day)
                              </button>
                              </label>
                           </div>
                        </div>
                        <div id="collapseCheckOne" class="collapse" aria-labelledby="headingOne" data-parent="#additionalAccordion">
                           <div class="card-body text-justify">
                              <h4>Wazephone (GPS/Hotspot/Cell Phone Plan)</h4>
                              <p>Explore with the only real-time, crowd-sourced, street navigation system -- Google Waze, the most popular source for GPS navigation in Costa Rica -- available in multiple languages.</p>
                              <p>Not only can this cell phone replace a bulky GPS device, but it supports a Wi-Fi hotspot -- sharing unlimited internet with passengers.</p>
                              <p>Last but certainly not least, our Wazephones have unlimited inbound international &amp; local calls and unlimited outbound local calls as well as providing local assistance from one of our offices.</p>
                              <p>If requested, we can also provide the telephone number 3 days in advance of your rental period.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header p-0" id="headingCheckTwo">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="add_on_3" id="add_on_3" class="ServiceAddOn custom-control-input" value="Costa Rica Map" onclick="assign_addons('3', 0)">
                              <label class="custom-control-label" for="add_on_3">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCheckTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Costa Rica Map ( $ 0 per Day)
                              </button>
                              </label>
                           </div>
                        </div>
                        <div id="collapseCheckTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#additionalAccordion">
                           <div class="card-body text-justify">
                              <h4>Costa Rica Map</h4>
                              <p>A complimentary road map to help you start your adventures going in the right direction.</p>
                              <p>This map is actually better detailed than most maps that you can purchase.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header p-0" id="headingCheckThree">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="add_on_4" id="add_on_4" class="ServiceAddOn custom-control-input" value="Ice Box" onclick="assign_addons('4', 0)">
                              <label class="custom-control-label" for="add_on_4">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCheckThree" aria-expanded="false" aria-controls="collapseThree">
                              Ice Box ( $ 0 per Day)
                              </button>
                              </label>
                           </div>
                        </div>
                        <div id="collapseCheckThree" class="collapse" aria-labelledby="headingThree" data-parent="#additionalAccordion">
                           <div class="card-body text-justify">
                              <h4>Ice Box/Cooler</h4>
                              <p>Keep your snacks and beverages cool during your adventures.</p>
                              <p><strong>Please request cooler at time of reservation.</strong></p>
                              <p><strong>Subject to availability.</strong></p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header p-0" id="headingCheckFour">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="add_on_5" id="add_on_5" class="ServiceAddOn custom-control-input" value="Child Seat" onclick="assign_addons('5', 0)">
                              <label class="custom-control-label" for="add_on_5">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCheckFour" aria-expanded="false" aria-controls="collapseThree">
                              Child Seat ( $ 0 per Day)
                              </button>
                              </label>
                           </div>
                        </div>
                        <div id="collapseCheckFour" class="collapse" aria-labelledby="headingThree" data-parent="#additionalAccordion">
                           <div class="card-body text-justify">
                              <h4>Child Seating</h4>
                              <p>Costa Rican laws require that children aged 12 or under must travel in an age/weight appropriate seat: baby seat, child seat or booster seat.</p>
                              <p>We will provide the appropriate seating for your child free of charge. The<br>charge for each additional seat is only $1.95 per day.</p>
                              <p><strong>Please request child seat at time of reservation.</strong></p>
                              <p><strong>Subject to availability.</strong></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
-->
            </div>
         </div>
<!--		  <div class="col-12">  <hr class="hrYellow"></div>-->
		
        
      </div>
   </div>
   <!--
      <p class="text-justify">The above total is an estimate based upon your selection of (1) vehicle category (2) rental duration (3) insurance coverage and (4) additional services. These options may be modified anytime before the start of the rental.</p>
      <p class="text-justify">Rental vehicles can be delivered to any location within Costa Rica.</p>
      <p class="text-justify">Separate delivery and return fees may apply and are excluded from the above estimate. Please inquire. Interoffice drop-offs are $50 extra.</p>
      <p class="text-justify"><a href="https://vamosrentacar.com/rental-requirements/#cancel" target="_blank">Cancellation Policy</a></p>
      <p class="text-justify">Pricing in U.S. Dollars (USD).</p>
      -->
   
   <div class="container p-4 mb-3 shadow-sm mediaBgW">
      <div class="row">
         <div class="col-12">
            <h1 class="mb-3 text-center">Your Information</h1>
         </div>
         <div class="col-lg-6">
            <div class="card mb-4">
               <div class="card-header">
                  Vehicle Delivery and Comments <small>(optional)</small>
               </div>
               <div class="card-body">
                  <form>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <div class="form-check">
                              <div class="custom-control custom-radio"> 
                                 <input class="custom-control-input" data-toggle="collapse" aria-expanded="false" data-target="#courtesey" type="radio" name="delivery_opt"  value="ATO" id="courtesey" checked>
                                 <label class="custom-control-label" for="courtesey">
                                 Courtesy Airport Shuttle
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="form-group col-md-6">
                           <div class="form-check">
                              <div class="custom-control custom-radio">
                                 <input class="custom-control-input" type="radio" name="delivery_opt" value="HTL" id="hotelDelivery">
                                 <label class="custom-control-label" for="hotelDelivery">
                                 Hotel Delivery
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="hotel">
                        <div class="form-group">
                           <input type="text" class="form-control" id="hotelDelivery" placeholder="Hotel Delivery">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <select id="txt_airline" name="txt_airline" class="form-control">
                              <option value="-1">Select Airline</option>
                              <option value="Aeromexico">Aeromexico</option>
                              <option value="Air  Comet">Air  Comet</option>
                              <option value="Air Canada">Air Canada</option>
                              <option value="Air Madrid">Air Madrid</option>
                              <option value="Air Panama">Air Panama</option>
                              <option value="Air Transat">Air Transat</option>
                              <option value="Alaska Airlines">Alaska Airlines</option>
                              <option value="American Airlines">American Airlines</option>
                              <option value="American West">American West</option>
                              <option value="Avianca">Avianca</option>
                              <option value="British Airlines">British Airlines</option>
                              <option value="Condor">Condor</option>
                              <option value="Continental Airlines">Continental Airlines</option>
                              <option value="Copa Airlines">Copa Airlines</option>
                              <option value="Cubana">Cubana</option>
                              <option value="Delta">Delta</option>
                              <option value="Frontier">Frontier</option>
                              <option value="Iberia">Iberia</option>
                              <option value="Interjet">Interjet</option>
                              <option value="JetBlue">JetBlue</option>
                              <option value="Lacsa">Lacsa</option>
                              <option value="Martin Air">Martin Air</option>
                              <option value="Mexicana">Mexicana</option>
                              <option value="Nature Air">Nature Air</option>
                              <option value="Northwest">Northwest</option>
                              <option value="Sansa Regional">Sansa Regional</option>
                              <option value="Skyservice">Skyservice</option>
                              <option value="Southwest">Southwest</option>
                              <option value="Spirit Airlines">Spirit Airlines</option>
                              <option value="Taca">Taca</option>
                              <option value="United Airlines">United Airlines</option>
                              <option value="US Airways">US Airways</option>
                              <option value="Veca Airlines">Veca Airlines</option>
                              <option value="Volaris Airlines">Volaris Airlines</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <input type="text" class="form-control" id="inputZip" placeholder="Flight Number">
                        </div>
                     </div>
                     <div class="form-group">
                        <textarea type="text" class="form-control" id="" placeholder="Please indicate comments or special requests here. We will confirm all details via email."></textarea>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card mb-4">
               <div class="card-header">
                  Renter Information<small>(required)</small>
               </div>
               <div class="card-body">
                  <form>
                     <div class="row form-row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                           </div>
                        </div>
                     </div>
                     <div class="row form-row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                           </div>
                        </div>
                     </div>
					  <div class="row form-row">
						 <div class="col-sm-6">
                           <div class="form-group">
                              <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code">
                           </div>
                        </div>
						
						 <div class="col-sm-6">
                        <select id="txt_airline" name="txt_airline" class="form-control">
                           <option value="-1">Select Country</option>
                           <option value="Afghanistan">Afghanistan</option>
                           <option value="Åland Islands">Åland Islands</option>
                           <option value="Albania">Albania</option>
                           <option value="Algeria">Algeria</option>
                           <option value="American Samoa">American Samoa</option>
                           <option value="Andorra">Andorra</option>
                           <option value="Angola">Angola</option>
                           <option value="Anguilla">Anguilla</option>
                           <option value="Antarctica">Antarctica</option>
                           <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                           <option value="Argentina">Argentina</option>
                           <option value="Armenia">Armenia</option>
                           <option value="Aruba">Aruba</option>
                           <option value="Australia">Australia</option>
                           <option value="Austria">Austria</option>
                           <option value="Azerbaijan">Azerbaijan</option>
                           <option value="Bahamas">Bahamas</option>
                           <option value="Bahrain">Bahrain</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Barbados">Barbados</option>
                           <option value="Belarus">Belarus</option>
                           <option value="Belgium">Belgium</option>
                           <option value="Belize">Belize</option>
                           <option value="Benin">Benin</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Bhutan">Bhutan</option>
                           <option value="Bolivia">Bolivia</option>
                           <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                           <option value="Botswana">Botswana</option>
                           <option value="Bouvet Island">Bouvet Island</option>
                           <option value="Brazil">Brazil</option>
                           <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                           <option value="Brunei Darussalam">Brunei Darussalam</option>
                           <option value="Bulgaria">Bulgaria</option>
                           <option value="Burkina Faso">Burkina Faso</option>
                           <option value="Burundi">Burundi</option>
                           <option value="Cambodia">Cambodia</option>
                           <option value="Cameroon">Cameroon</option>
                           <option value="Canada">Canada</option>
                           <option value="Cape Verde">Cape Verde</option>
                           <option value="Cayman Islands">Cayman Islands</option>
                           <option value="Central African Republic">Central African Republic</option>
                           <option value="Chad">Chad</option>
                           <option value="Chile">Chile</option>
                           <option value="China">China</option>
                           <option value="Christmas Island">Christmas Island</option>
                           <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Comoros">Comoros</option>
                           <option value="Congo">Congo</option>
                           <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                           <option value="Cook Islands">Cook Islands</option>
                           <option value="Costa Rica">Costa Rica</option>
                           <option value="Cote D'ivoire">Cote D'ivoire</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cuba">Cuba</option>
                           <option value="Cyprus">Cyprus</option>
                           <option value="Czech Republic">Czech Republic</option>
                           <option value="Denmark">Denmark</option>
                           <option value="Djibouti">Djibouti</option>
                           <option value="Dominica">Dominica</option>
                           <option value="Dominican Republic">Dominican Republic</option>
                           <option value="Ecuador">Ecuador</option>
                           <option value="Egypt">Egypt</option>
                           <option value="El Salvador">El Salvador</option>
                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                           <option value="Eritrea">Eritrea</option>
                           <option value="Estonia">Estonia</option>
                           <option value="Ethiopia">Ethiopia</option>
                           <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                           <option value="Faroe Islands">Faroe Islands</option>
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                           <option value="French Guiana">French Guiana</option>
                           <option value="French Polynesia">French Polynesia</option>
                           <option value="French Southern Territories">French Southern Territories</option>
                           <option value="Gabon">Gabon</option>
                           <option value="Gambia">Gambia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Ghana">Ghana</option>
                           <option value="Gibraltar">Gibraltar</option>
                           <option value="Greece">Greece</option>
                           <option value="Greenland">Greenland</option>
                           <option value="Grenada">Grenada</option>
                           <option value="Guadeloupe">Guadeloupe</option>
                           <option value="Guam">Guam</option>
                           <option value="Guatemala">Guatemala</option>
                           <option value="Guernsey">Guernsey</option>
                           <option value="Guinea">Guinea</option>
                           <option value="Guinea-bissau">Guinea-bissau</option>
                           <option value="Guyana">Guyana</option>
                           <option value="Haiti">Haiti</option>
                           <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                           <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                           <option value="Honduras">Honduras</option>
                           <option value="Hong Kong">Hong Kong</option>
                           <option value="Hungary">Hungary</option>
                           <option value="Iceland">Iceland</option>
                           <option value="India">India</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                           <option value="Iraq">Iraq</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Isle of Man">Isle of Man</option>
                           <option value="Israel">Israel</option>
                           <option value="Italy">Italy</option>
                           <option value="Jamaica">Jamaica</option>
                           <option value="Japan">Japan</option>
                           <option value="Jersey">Jersey</option>
                           <option value="Jordan">Jordan</option>
                           <option value="Kazakhstan">Kazakhstan</option>
                           <option value="Kenya">Kenya</option>
                           <option value="Kiribati">Kiribati</option>
                           <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                           <option value="Korea, Republic of">Korea, Republic of</option>
                           <option value="Kuwait">Kuwait</option>
                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                           <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                           <option value="Latvia">Latvia</option>
                           <option value="Lebanon">Lebanon</option>
                           <option value="Lesotho">Lesotho</option>
                           <option value="Liberia">Liberia</option>
                           <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                           <option value="Liechtenstein">Liechtenstein</option>
                           <option value="Lithuania">Lithuania</option>
                           <option value="Luxembourg">Luxembourg</option>
                           <option value="Macao">Macao</option>
                           <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                           <option value="Madagascar">Madagascar</option>
                           <option value="Malawi">Malawi</option>
                           <option value="Malaysia">Malaysia</option>
                           <option value="Maldives">Maldives</option>
                           <option value="Mali">Mali</option>
                           <option value="Malta">Malta</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Martinique">Martinique</option>
                           <option value="Mauritania">Mauritania</option>
                           <option value="Mauritius">Mauritius</option>
                           <option value="Mayotte">Mayotte</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                           <option value="Moldova, Republic of">Moldova, Republic of</option>
                           <option value="Monaco">Monaco</option>
                           <option value="Mongolia">Mongolia</option>
                           <option value="Montenegro">Montenegro</option>
                           <option value="Montserrat">Montserrat</option>
                           <option value="Morocco">Morocco</option>
                           <option value="Mozambique">Mozambique</option>
                           <option value="Myanmar">Myanmar</option>
                           <option value="Namibia">Namibia</option>
                           <option value="Nauru">Nauru</option>
                           <option value="Nepal">Nepal</option>
                           <option value="Netherlands">Netherlands</option>
                           <option value="Netherlands Antilles">Netherlands Antilles</option>
                           <option value="New Caledonia">New Caledonia</option>
                           <option value="New Zealand">New Zealand</option>
                           <option value="Nicaragua">Nicaragua</option>
                           <option value="Niger">Niger</option>
                           <option value="Nigeria">Nigeria</option>
                           <option value="Niue">Niue</option>
                           <option value="Norfolk Island">Norfolk Island</option>
                           <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                           <option value="Norway">Norway</option>
                           <option value="Oman">Oman</option>
                           <option value="Pakistan">Pakistan</option>
                           <option value="Palau">Palau</option>
                           <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                           <option value="Panama">Panama</option>
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <option value="Paraguay">Paraguay</option>
                           <option value="Peru">Peru</option>
                           <option value="Philippines">Philippines</option>
                           <option value="Pitcairn">Pitcairn</option>
                           <option value="Poland">Poland</option>
                           <option value="Portugal">Portugal</option>
                           <option value="Puerto Rico">Puerto Rico</option>
                           <option value="Qatar">Qatar</option>
                           <option value="Reunion">Reunion</option>
                           <option value="Romania">Romania</option>
                           <option value="Russian Federation">Russian Federation</option>
                           <option value="Rwanda">Rwanda</option>
                           <option value="Saint Helena">Saint Helena</option>
                           <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                           <option value="Saint Lucia">Saint Lucia</option>
                           <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                           <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                           <option value="Samoa">Samoa</option>
                           <option value="San Marino">San Marino</option>
                           <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                           <option value="Saudi Arabia">Saudi Arabia</option>
                           <option value="Senegal">Senegal</option>
                           <option value="Serbia">Serbia</option>
                           <option value="Seychelles">Seychelles</option>
                           <option value="Sierra Leone">Sierra Leone</option>
                           <option value="Singapore">Singapore</option>
                           <option value="Slovakia">Slovakia</option>
                           <option value="Slovenia">Slovenia</option>
                           <option value="Solomon Islands">Solomon Islands</option>
                           <option value="Somalia">Somalia</option>
                           <option value="South Africa">South Africa</option>
                           <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                           <option value="Spain">Spain</option>
                           <option value="Sri Lanka">Sri Lanka</option>
                           <option value="Sudan">Sudan</option>
                           <option value="Suriname">Suriname</option>
                           <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                           <option value="Swaziland">Swaziland</option>
                           <option value="Sweden">Sweden</option>
                           <option value="Switzerland">Switzerland</option>
                           <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                           <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                           <option value="Tajikistan">Tajikistan</option>
                           <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                           <option value="Thailand">Thailand</option>
                           <option value="Timor-leste">Timor-leste</option>
                           <option value="Togo">Togo</option>
                           <option value="Tokelau">Tokelau</option>
                           <option value="Tonga">Tonga</option>
                           <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                           <option value="Tunisia">Tunisia</option>
                           <option value="Turkey">Turkey</option>
                           <option value="Turkmenistan">Turkmenistan</option>
                           <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                           <option value="Tuvalu">Tuvalu</option>
                           <option value="Uganda">Uganda</option>
                           <option value="Ukraine">Ukraine</option>
                           <option value="United Arab Emirates">United Arab Emirates</option>
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="United States">United States</option>
                           <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                           <option value="Uruguay">Uruguay</option>
                           <option value="Uzbekistan">Uzbekistan</option>
                           <option value="Vanuatu">Vanuatu</option>
                           <option value="Venezuela">Venezuela</option>
                           <option value="Viet Nam">Viet Nam</option>
                           <option value="Virgin Islands, British">Virgin Islands, British</option>
                           <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                           <option value="Wallis and Futuna">Wallis and Futuna</option>
                           <option value="Western Sahara">Western Sahara</option>
                           <option value="Yemen">Yemen</option>
                           <option value="Zambia">Zambia</option>
                           <option value="Zimbabwe">Zimbabwe</option>
                        </select>
						 </div>
						  </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   
	
	<div class="container p-4 shadow-sm mediaBgW">
      <div class="row">
         <div class="col-12">
            <h1 class="mb-3 text-center">Guarantee Your Reservation</h1>
         </div>
         <div class="col-lg-6">
            <div class="card mb-3">
               <div class="card-header">
                  Card Information <small>(required)</small>
               </div>
               <div class="card-body">
					<div class="form-group">
					   <input type="text" class="form-control" id="ccName" name="ccName" placeholder="Name on Card">
					</div>
				   <div class="form-group">
					   <input type="text" class="form-control" id="ccNum" name="ccNum" placeholder="Card Numbers without spaces or dashes">
					</div>
				   <div class="row form-row align-items-center"><!-- fechas de tarjeta-->
      
                                    <div class="col-sm-4 col-lg-3">
                                        <p><strong>Expiration Date:</strong></p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-5"><!--mes tarjeta-->
                                        <div class="form-group">
                                            <select class="form-control" name="ccExpM" id="ccExpM">
                                                <option value="-1" selected="">Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div><!-- fin mes tarjeta-->

                                    <div class="col-sm-4  col-md-4  col-lg-4"><!-- ano tarjeta-->
                                        <div class="form-group">
                                            <select class="form-control" name="ccExpY" id="ccExpY">
                                                <option value="-1" selected="">Year</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                            </select>
                                        </div>
                                    </div><!-- fin ano tarjeta-->
                             
                            </div>
				</div>
			 </div>
		  </div>
         <div class="col-lg-6 d-flex flex-wrap align-items-stretch justify-content-center">
			 <div class="text-center">
					<img id="mcon" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/mc-off.png" alt="Master Card">
					<img id="vson" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/vs-off.png" alt="Visa">
					<img id="amon" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/am-off.png" alt="AMEX">
					<img id="dcon" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/dc-off.png" alt="Dinner Club">
					<img id="dson" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/ds-off.png" alt="Discover">
					<img id="atm" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/atm.png" alt="ATM">
			</div>
            <p class="text-sm mb-0">A credit card is required only to guarantee your reservation. Your credit card will not be charged until the last day of your rental (return date).</p>
			 <p  class="text-sm mb-0">This website uses a secure server for your security and privacy. If providing payment information online is a concern, please contact us to guarantee your reservation.</p>
			 <p class="text-center mb-0"><span style="display: inline-block; width: 133px;" id="siteseal"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=h14P4WfvAvz2afaMDKylS6uV10YGenzDU6nd20nTeLO2Tz0vukNJAE"></script><img style="cursor:pointer;cursor:hand" src="https://seal.godaddy.com/images/3/en/siteseal_gd_3_h_l_m.gif" onclick="verifySeal();" alt="SSL site seal - click to verify"></span></p>
         </div>
		  <div class="col-12">
		  	  <hr class="hrYellow">
			  <p class="text-sm">The above total is an estimate based upon your selection of (1) vehicle category (2) rental duration (3) insurance coverage and (4) additional services. These options may be modified anytime before the start of the rental.</p>
			  <p class="text-sm">Rental vehicles can be delivered to any location within Costa Rica.</p>
			  <p class="text-sm">Separate delivery and return fees may apply and are excluded from the above estimate. Please inquire. Interoffice drop-offs are $50 extra.</p>
			  <p class="text-sm"><a href="https://vamosrentacar.com/rental-requirements/#cancel" target="_blank">Cancellation Policy</a></p>
			  <p class="text-sm">Pricing in U.S. Dollars (USD)</p>
			  <hr class="hrYellow">
			  <div class="text-center">
			  <button type="submit" style="width: 200px; font-size: 20px;" class="btn btn-primary">Reserve Now</button>
			   </div>
		  </div>
		
      </div>
   </div>
	
<!--
   <div class="container subFooter d-flex justify-content-center align-items-center shadow-sm">
      <p class="text-center subFooterText">"Come be treated like family at Vamos!"</p>
   </div>
-->
</div>
