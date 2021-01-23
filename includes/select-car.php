<style>
   .zoom {
      transition: transform 1s;
      width: 100%;
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

   .carAlign {
      text-align: center;
   }

   .cardTitle {
      background-color: #009926;
      padding: 5px 10px 5px 10px;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 3px;
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

   @media (max-width: 575px) {
      .alignThings {
         text-align: left;
      }

      .carAlign {
         text-align: right;
      }

      .imgSize {
         width: 160px;
      }

      .margining {
         margin-top: -20px;
         margin-bottom: -15px;
      }

      .cardPrice {
         font-size: 16px;
         font-weight: bold;
         color: #009926
      }

      .cardTitle {
         background-color: #009926;
         padding: 5px 10px 5px 10px;
         color: white;
         font-weight: bold;
         margin-bottom: -10px;
         border: none;
         border-radius: 3px;
      }

      .myRow {
         display: grid;
         grid-row-gap: 50px;
         grid-template-columns: auto auto;
      }

   }
</style>
<script>
   var page = 'select';
   $(document).ready(function() {
      $(".zoom").click(function() {
         $("#myModal").modal('show');
      });
      $(".secondModal").click(function() {
         $("#myModal2").modal('show');
      });
   });
</script>
<!-- Step 2-->
<div class="container-fluid pb-4 container-grey">
   <?php include 'includes/step-bar.php' ?>
   <div class="selectedCar2">

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









      <div class="modal" id="myModal">
         <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title">Premium SUV PFFAR</h1>
                  <button type="button" class="close" data-dismiss="modal">×</button>
               </div>
               <div class="modal-body">
                  <h4 class="cardPrice">Mitsubishi Montero/ToyotaPrado4x4</h4>
                  <p>In our fleet a premium SUV is a high-quality, extra-large sport utility vehicle made to seat 7 or 8 passengers in three rows of seating. They also have powerhouse engines and room for plenty of cargo</p>
                  <p class="carAlign"> <img src="images/cdxr-suzuki-swift-2018-a.png" class="secondModal" alt="Vamos Rent-A-Car"></p>
                  <p style="font-size:medium;" class="cardPrice">Automatic</p>
                  <p>Drivers can book from a variety of selections including a 7 passenger Chevrolet Suburban, or a mid-size SUV like the Nissan Rogue, or a passenger van like the Ford Transit. Our SUV and Van rentals are the perfect options to take you the long distance with plenty of space.</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="cardTitle" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>

      <div class="modal" id="myModal2">
         <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title">Premium SUV PFFAR</h1>
                  <button type="button" class="close" data-dismiss="modal">×</button>
               </div>
               <div class="modal-body">
                  <p class="carAlign"> <img src="images/cdxr-suzuki-swift-2018-a.png" class="secondModal" alt="Vamos Rent-A-Car"></p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="cardTitle" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>


























      <div class="row">
         <div class="rayita d-block d-lg-none"></div>
         <div class="col-12 services">
         </div>

         <div class="col-12">
            <div class="card-deck mb-0 mb-sm-4">
               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/cdxr-suzuki-swift-2018-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Standard SUV SFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">SsangYong Korando 4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/cdxr-suzuki-swift-2018-b.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Intermediate SUV IFMR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">Daihatsu Bego 4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$45.95 <small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/ffar-mitsubishi-outlander-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Full Size SUV FFMR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">Toyota Rav4 4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$67.95<small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/ffar-mitsubishi-outlander-b.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>


























               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95<small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/ffxr-toyota-rav4-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>





               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Standard SUV SFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">SsangYong Korando 4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95<small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/ffxr-toyota-rav4-b.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>




               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95<small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/ifxr-daihatsu-bego-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95<small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/ifxr-daihatsu-bego-b.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>


















               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95<small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/pfar-mistubishi-montero-sport-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Standard SUV SFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Automatic</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">SsangYong Korando 4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95<small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/pfar-mistubishi-montero-sport-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95<small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/sfxr-ssang-yong-korando-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="cardPadding">
                     <p class="alignThings"><label class="cardTitle">Premium SUV PFFAR</label></p>
                     <div class="myRow">
                        <div>
                           <p class="alignThings cardSubtitlePadding"><label class="cardSubtitleBody">Manual</label></p>
                           <div class="alignThings cardSubtitlePadding margining">
                              <label class="cardBody">Mitsubishi Montero/ToyotaPrado4x4<br></label>
                           </div>
                           <div class="alignThings cardSubtitlePadding">
                              <p><label class="cardPrice">$51.95<small class="cardPriceFormat">Price/Day</small></label></p>
                           </div>
                        </div>
                        <div>
                           <p class="carAlign"> <img src="images/sfxr-ssang-yong-korando-b.png" class="zoom imgSize" alt="Vamos Rent-A-Car"></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="quotesIncludes mb-2 py-2" style="background-color: transparent;">
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
         </div> -->
      </div>

      <div style="margin-top:-10px;">
         <?php include 'includes/summary-top.php' ?>

      </div>
      <div class="container subFooter d-flex justify-content-center align-items-center shadow-sm">
         <p class="text-center subFooterText">"Come be treated like family at Vamos!"</p>
      </div>

   </div>