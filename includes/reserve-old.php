<!-- Step 4-->
<div class="container-fluid pb-4 container-grey">
	<?php include 'includes/step-bar.php' ?>
   <?php include 'includes/selected-info.php' ?> 
   <script>
      var page = 'reserve';
   </script>
   <div class="pt-scroll"></div>
   <div class="container services pt-3">
      <div class="row">
         <!-- barra izquierda-->
         <div class="col-md-9 p-md-0">
            <div class="col py-3 shadow-sm mediaBgW">
               <h4>Vehicle Delivery and Comments: <small>(optional)</small></h4>
               <div class="row">
                  <div class="col-12">
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
            <div class="col mt-3 py-3 shadow-sm mediaBgW">
               <h4>Renter Information: <small>(required)</small></h4>
               <div class="row">
                  <div class="col-12">
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
                     </form>
                  </div>
               </div>
            </div>
			 
            <div class="col mt-3 py-3 shadow-sm mediaBgW">
               <h4>Card Information: <small>(required)</small></h4>
               <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        <input type="text" class="form-control" id="ccName" name="ccName" placeholder="Name on Card">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" id="ccNum" name="ccNum" placeholder="Card Numbers without spaces or dashes">
                     </div>
                     <div class="row form-row align-items-center">
                        <!-- fechas de tarjeta-->
                        <div class="col-sm-4 col-lg-3">
                           <p><strong>Expiration Date:</strong></p>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-5">
                           <!--mes tarjeta-->
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
                        </div>
                        <!-- fin mes tarjeta-->
                        <div class="col-sm-4  col-md-4  col-lg-4">
                           <!-- ano tarjeta-->
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
                        </div>
                        <!-- fin ano tarjeta-->
                        <div class="col-12 text-center mb-1">
                           <img id="mcon" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/mc-off.png" alt="Master Card">
                           <img id="vson" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/vs-off.png" alt="Visa">
                           <img id="amon" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/am-off.png" alt="AMEX">
                           <img id="dcon" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/dc-off.png" alt="Dinner Club">
                           <img id="dson" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/ds-off.png" alt="Discover">
                           <img id="atm" src="https://reservations.vamosrentacar.com/publica/templates/vamos/images/cards/atm.png" alt="ATM">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 d-flex flex-wrap align-items-stretch justify-content-center text-justify">
                     <p class="text-sm">A credit card is required only to guarantee your reservation. Your credit card will not be charged until the last day of your rental (return date).</p>
                     <p  class="text-sm">This website uses a secure server for your security and privacy. If providing payment information online is a concern, please contact us to guarantee your reservation.</p>
                     <p class="text-center">
                        <span style="display: inline-block; width: 133px;" id="siteseal">
                           <script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=h14P4WfvAvz2afaMDKylS6uV10YGenzDU6nd20nTeLO2Tz0vukNJAE"></script><img style="cursor:pointer;cursor:hand" src="https://seal.godaddy.com/images/3/en/siteseal_gd_3_h_l_m.gif" onclick="verifySeal();" alt="SSL site seal - click to verify">
                        </span>
                     </p>
                  </div>
                  <div class="col-12">
                     <hr class="hrYellow">
                     <p class=" text-justify text-sm">The total is an estimate based upon your selection of (1) vehicle category (2) rental duration (3) insurance coverage and (4) additional services. These options may be modified anytime before the start of the rental.</p>
                     <p class=" text-justify  text-sm">Rental vehicles can be delivered to any location within Costa Rica.</p>
                     <p class=" text-justify  text-sm">Separate delivery and return fees may apply and are excluded from the above estimate. Please inquire. Interoffice drop-offs are $50 extra.</p>
                     <p class=" text-justify  text-sm"><a href="https://vamosrentacar.com/rental-requirements/#cancel" target="_blank">Cancellation Policy</a></p>
                     <hr class="hrYellow">
                     <div class="text-center">
                        <button type="submit" style="width: 200px; font-size: 20px;" class="btn btn-primary">Reserve Now</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- fin barra izquierda-->
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
			 
				  
                  <!--		esta linea  no aplica se queda comentada			  <li class="list-group-item"><hr></li> -->
				  
				  
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
               <div class="quotesIncludes mb-3">
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
			   <h4>Testimonials</h4>
			   <div id="demo_1" style="overflow:hidden; width:100%; height:410px; margin-top:10px; margin-bottom:10px;">
                                <div id="demo1_1">
                                        <!-- Testimonio 1 -->
                                        <div class="test-head">
                                                Great experience with Vamos
                                        </div>
                                        <div class="test-mesg">
                                            Great experience with Vamos! The price was very reasonable, booking process was easy and the follow up communications prompt and thorough. We rented out of Liberia. They were waiting at the airport and shuttled us to their office which was close by. Paperwork was quick, and we were on the road with a new 4 X 4. I would highly recommend them.  
                                        </div>
                                        <div class="test-source">
                                                -Addicted2Travel07<br>Dec 29, '16 via TripAdvisor
                                        </div>

                                        <hr class="testimonialHr">

                                        <!-- Testimonio 2 -->
                                        <div class="test-head">
                                            Great service!
                                        </div>
                                        <div class="test-mesg">
                                            We corresponded through email to book and Vamos told us they would bring our rental car to the hotel at no cost to us the morning after we arrived (they were closed when our plane landed the night before, but we stayed close). Just as they said, they delivered the car at 7 am sharp. It was a brand new 4 wheel drive car.
                                            The GPS didn't work at first, so we took it back and they swapped the cord and we were good to go.
                                            We had to return the car a day early, but online we had to book a full week, so we figured we would just lose out on the one day; however, they recalculated and prorated the cost for us. We had also been overcharged for the GPS which the guy caught and also fixed.
                                            I highly recommend this company if you rent a car in Costa Rica.                                                
                                        </div>
                                        <div class="test-source">
                                                -Hali O.<br>Dec 23, '16 via Google+
                                        </div>

                                        <hr class="testimonialHr">

                                        <!-- Testimonio 3 -->
                                        <div class="test-head">
                                                Professionally, Effectively & with a Smile
                                        </div>
                                        <div class="test-mesg">
                                            We had a great experience with Vamos. Next time we come back I don't even have to think twice, we will rent from you!!!
                                            Your help was very much appreciated and made our visit absolutely trouble free, so we will be back!!
                                            If we would have had a bad experience renting a vehicle, it is very possible that we would not have had as good a time and even might not come back to Costa Rica!
                                            Thank you all very much!!                                                
                                        </div>
                                        <div class="test-source">
                                                -Gene & Judy H.<br>Dec 5, '16 via Zendesk
                                        </div>

                                        <hr class="testimonialHr">


                                        <div class="test-head">
                                                Straight-Forward, Honest Service
                                        </div>
                                        <div class="test-mesg">
                                                I was very satisfied with my 4X4 rental from Vamos.Â Thank you. What was most important for me was that there were no surprises.Â All of your policies and prices were clear before I decided to rent, and nothing changed once I arrived.Â Thank you for providing straight-forward, honest service.
                                        </div>
                                        <div class="test-source">
                                                -Conrad D.<br>September 2, '15 via Email
                                        </div>

                                        <hr class="testimonialHr">

                                        <div class="test-head">
                                                Best Car Hire Experience - Anywhere in the World
                                        </div>
                                        <div class="test-mesg">
                                                We have just got home from 10 days in Costa Rica. We rented a 4X4 from Vamos in San Jose. It was probably the best car hire experience we have had anywhere in the world. The vehicle was delivered to us as our hotel the morning after a late arrival, Fabio ran through all the paperwork with us, then took us to the vehicle and fully explained everything about it. We did approximately 1300km and had no issues. We recommend Vamos to everyone and would certainly use them again.
                                        </div>
                                        <div class="test-source">
                                                -Andrea &amp; Colin P.<br>September 2, '15 via TripAdvisor
                                        </div>
                                        <hr class="testimonialHr">
                                        <div id="demo2_1">
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
         </div>
         <!-- fin barra derecha-->
      </div>
   </div>
</div>

<script type="text/javascript">
            var ii=0,i=1000;  t=demo_1.scrollTop;

            demo2_1.innerHTML=demo1_1.innerHTML;
            function qswhMarquee1(){
                    if(demo2_1.offsetTop-demo_1.scrollTop<=0)
                            demo_1.scrollTop-=demo1_1.offsetHeight;
                    else{
                            demo_1.scrollTop++;
                    }
            }
            var MyMar=setInterval(qswhMarquee1,50)
            demo_1.onmouseover=function() {clearInterval(MyMar)}
            demo_1.onmouseout=function() {MyMar=setInterval(qswhMarquee1,50)}
    </script>
