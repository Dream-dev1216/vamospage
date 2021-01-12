<style>
   .zoom {
      transition: transform 1s;
      /* Animation */
   }

   .zoom:hover {
      transform: scale(1.2);
      /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }

   .cardPadding {
      padding: 10px 5px 10px 5px;
   }

   .alignThings {
      text-align: center;
   }

   .cardTitle {
      background-color: #009926;
      padding: 5px 10px 5px 10px;
      color: white;
      font-weight: bold;
   }

   .cardSubtitlePadding {
      padding: 0px 0px 1px 10px;
   }

   .cardSubtitleBody {
      font-size: 14px;
      font-weight: bold;
   }

   .cardBody {
      font-size: 12px;
      font-weight: bolder;
   }

   .cardPrice {
      font-size: 25px;
      font-weight: bold;
      color: #009926
   }

   .cardPriceFormat {
      font-size: 12px;
      color: black;
   }
</style>

<!-- Step 2-->
<div class="container-fluid pb-4 container-grey">
   <?php include 'includes/step-bar.php' ?>
   <div class="selectedCar2">
      <?php include 'includes/summary-top.php' ?>

      <div class="row calendarBgH mb-3" id="calendarContent">
         <div class="container px-0">
            <div id="calendar">
               <?php include 'includes/calendar.php' ?>
            </div>
         </div>
      </div>
   </div>
   <script>
      var page = 'select';
   </script>
   <div class="pt-scroll2"></div>
   <div class="container p-4 pb-0 shadow-sm mediaBgW">
      <div class="row">
         <div class="rayita d-block d-lg-none"></div>
         <div class="col-12 services">
            <!-- <h4 class="mb-0">Click Vehicle Image to Reserve</h4> -->

            <!--<h1 id="1" class="mb-3 text-center"></h1>-->
         </div>
         <div class="col-12">
            <!-- fila de carros - 4 por fila - fila 1-->
            <div class="card-deck mb-0 mb-sm-4">

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                     <p class="alignThings"> <img src="images/cdxr-suzuki-swift-2018-a.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Standard SUV SFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                     <p class="alignThings"> <img src="images/cdxr-suzuki-swift-2018-b.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">SsangYong Korando 4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Intermediate SUV IFMR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                     <p class="alignThings"> <img src="images/ffar-mitsubishi-outlander-a.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">Daihatsu Bego 4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$45.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Full Size SUV FFMR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                     <p class="alignThings"> <img src="images/ffar-mitsubishi-outlander-b.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">Toyota Rav4 4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$67.95<small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>












               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                     <p class="alignThings"> <img src="images/ffxr-toyota-rav4-a.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Standard SUV SFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                     <p class="alignThings"> <img src="images/ffxr-toyota-rav4-b.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">SsangYong Korando 4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                     <p class="alignThings"> <img src="images/ifxr-daihatsu-bego-a.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                     <p class="alignThings"> <img src="images/ifxr-daihatsu-bego-b.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>


















               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                     <p class="alignThings"> <img src="images/pfar-mistubishi-montero-sport-a.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Standard SUV SFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                     <p class="alignThings"> <img src="images/pfar-mistubishi-montero-sport-b.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">SsangYong Korando 4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                     <p class="alignThings"> <img src="images/sfxr-ssang-yong-korando-a.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                     <p class="alignThings"> <img src="images/sfxr-ssang-yong-korando-b.png" class="zoom" alt="Vamos Rent-A-Car"></p>
                     <div class="alignThings">
                        <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                     </div>
                     <div class="alignThings">
                        <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                     </div>
                  </div>
               </div>



            </div>
         </div>
         <div class="quotesIncludes mb-2 py-2" style="background-color: transparent;">
            <p class="text-sm text-center mb-1"><strong>All Quotes Include:</strong></p>
            <p class="text-sm mb-0 text-center">
               <i class="fas fa-check" style="color: #009926; font-size: 10px;"></i>Free Additional Driver&nbsp;&nbsp;
               <i class="fas fa-check" style="color: #009926; font-size: 10px;"></i>Unlimited Mileage&nbsp;&nbsp;
               <i class="fas fa-check" style="color: #009926; font-size: 10px;"></i>Fees and Taxes&nbsp;&nbsp;
               <i class="fas fa-check" style="color: #009926; font-size: 10px;"></i>Courtesy Airport Shuttle&nbsp;&nbsp;
               <i class="fas fa-check" style="color: #009926; font-size: 10px;"></i>Complimentary Cell Phone&nbsp;&nbsp;
               <i class="fas fa-check" style="color: #009926; font-size: 10px;"></i>Cooler&nbsp;&nbsp;
               <i class="fas fa-check" style="color: #009926; font-size: 10px;"></i>Road Map&nbsp;&nbsp;
               <i class="fas fa-check" style="color: #009926; font-size: 10px;"></i>Roof Racks&nbsp;&nbsp;
               <i class="fas fa-check" style="color: #009926; font-size: 10px;"></i>Child Seat&nbsp;&nbsp;
            </p>
         </div>
      </div>
      <div class="container subFooter d-flex justify-content-center align-items-center shadow-sm">
         <p class="text-center subFooterText">"Come be treated like family at Vamos!"</p>
      </div>
   </div>