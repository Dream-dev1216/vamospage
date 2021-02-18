<style>
   /* .zoom {
      transition: transform 1s;
      width: 100%;
   } */

   /* .zoom:hover {
      transform: scale(1.2);
   } */
   .widther {
      width: 50%;
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

   .imgSize {
      width: 90%;
      height: 100%;
   }

   .topper {
      top: -25%;
   }

   @media all and (min-width:300px) and (max-width:650px) {
      .alignTopper {
         margin-top: 40px;
      }

      .topper {
         top: -20%;
      }

      .widther {
         width: 90%;
      }
   }

   @media all and (min-width:300px) and (max-width:800px) {
      .widther {
         width: 90%;
      }
   }

   /* .alignOffer {
      margin: auto;
      width: 50%;
   }

   @media all and (min-width:575px) and (max-width:900px) {
      .alignOffer {
         margin: auto;
         width: 76%;
      }
   }

   @media all and (min-width:900) and (max-width:1100px) {
      .alignOffer {
         margin: auto;
         width: 86%;
      }
   } */

   @media (max-width: 575px) {
      .alignThings {
         text-align: left;
      }

      /* .alignOffer {
         margin: auto;
         width: 90%;
      } */

      .carAlign {
         text-align: right;
      }

      .imgSize {
         width: 100%;
         height: 100%;
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
</script>

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

   <!-- <div class="modal" id="myModal">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title" style="font-weight: bolder;">Premium SUV PFFAR</h1>
               <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
               <h4 style="color: #009926;font-size:medium;">Mitsubishi Montero/ToyotaPrado4x4</h4>
               <p>In our fleet a premium SUV is a high-quality, extra-large sport utility vehicle made to seat 7 or 8 passengers in three rows of seating. They also have powerhouse engines and room for plenty of cargo</p>
               <p class="carAlign"> <img src="images/cdxr-suzuki-swift-2018-a.png" id="clicked" class="zoom" style="width: 300px;" alt="Vamos Rent-A-Car"></p>
               <p style="font-size:medium; color: #009926;">Automatic</p>
               <p>Drivers can book from a variety of selections including a 7 passenger Chevrolet Suburban, or a mid-size SUV like the Nissan Rogue, or a passenger van like the Ford Transit.</p>
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
               <h1 class="modal-title" style="font-weight:bolder; ">Premium SUV PFFAR</h1>
               <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
               <p class="carAlign"> <img src="images/cdxr-suzuki-swift-2018-a.png" class="zoom" style="width: 300px;" alt="Vamos Rent-A-Car"></p>
               <div class="row">
                  <div class="col-6">
                     <h2 style="font-weight: bolder; color: #009926;">Features</h2>
                     <h4 style="color: #009926;font-weight:bolder; font-size:small;">Feul Policy</h4>
                     <p style="font-size:small; font-weight:bolder;">Full to Full</p>
                     <h4 style="color: #009926;font-weight:bolder; font-size:small;">Pick Up Location</h4>
                     <p style="font-size:small; font-weight:bolder;">Car Rental Center</p>
                     <h4 style="color: #009926;font-weight:bolder; font-size:small;">Duration</h4>
                     <p style="font-size:small; font-weight:bolder;">1 Week</p>
                  </div>
                  <div class="col-6">
                     <h2 style="font-weight: bolder; color: #009926;">Facilities</h2>
                     <p style="font-weight:bolder; font-size:small;">Unlimited Millage</p>
                     <p style="font-weight:bolder; font-size:small;">Collision Damage Waiver</p>
                     <p style="font-weight:bolder; font-size:small;">Protection</p>
                     <p style="font-weight:bolder; font-size:small; ">Insurance</p>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="cardTitle" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div> -->
   <div class="alignTopper">
   </div>
   <div>
      <div style="background-color: #009926; margin:auto; width:90%;  color:#f9e769; padding-left:2px; padding-right:2px;padding-top:2px; border-radius:10px; position:relative;">
         <div style="margin:auto;width:80%; position: absolute;left:10%;z-index: 10;" class="topper">
            <p style="color:#009926;background-color:#f9e769; height:auto; border-radius:10px; padding:2px; font-size:1em;font-weight:bolder; " class="text-center">
               Click Vehicle Image to Reserve
            </p>
         </div>
         <p class="text-center" style="font-weight: bolder; padding-left:50px; padding-bottom:7px; padding-top:7px; padding-right:50px;">All Qoutes Include : &nbsp;<small style="font-weight: 100; font-size:0.8em">Free Additional Driver / Unlimited Mileage / Fees and Taxes / Courtesy Airport Shuttle Complimentary Cell Phone / Cooler/ Road Map / Roof Map / Roof Racks / Child Seats</small></p>
      </div>
   </div>


   <div class="row widther" style="margin:auto; display:flex; align-items: center; justify-content: center; background-color:#009926; border-radius:10px; padding:1px;">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12" style="display:flex; align-items: center; justify-content: center; ">
         <div style="background-color: white; border-radius:10px; margin:12px; padding:25px; text-align:center; height:120px; width:100%">
            <a href="/websites/vamospage/index3.php"> <img src="images/cdxr-suzuki-swift-2018-a.png" class="imgSize" alt="Vamos Rent-A-Car"> </a>
         </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12" style="color:white; font-size:10px; margin-bottom:10px;">
         <p style="font-size: 2em; font-weight:bolder; color:#f9e769;" class="text-center">Special Offer</p>
         <p class="text-center" style="margin-bottom:-0.4em; margin-top:-10px;">Premium SUV PFFAR</p>
         <p class="text-center" style="margin-bottom:-0.4em;">Mitsubishi Montero/ToyotaPrado4x4</p>
         <p class="text-center" style="margin-bottom:-0.4em;">Automatic</p>
         <div style="margin:auto; width:100%; padding-top:10px;">
            <div style="margin:auto; width:50%; border-radius:10px; background-color:#f9e769;">
               <p class="text-center" style="margin-bottom:-0.4em; font-size:10px; color:#009926;">Price/Day from</p>
               <p class="text-center" style="margin-bottom:-0.4em; font-size:20px; font-weight:bolder; color:#009926;">$51.95</p>
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
               <div style="margin:auto;width:100%; padding-bottom:20px;">
                  <div class="text-center">
                     <img src="images/cdxr-suzuki-swift-2018-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car">
                  </div>
                  <div style="margin: auto; width:100%; color:#009926; font-size:12px; padding-top: 10px; font-weight:bolder;">
                     <p class="text-center" style="margin-bottom:-0.4em;">Premium SUV PFFAR</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Mitsubishi Montero/ToyotaPrado4x4</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Automatic</p>
                  </div>
                  <div style="margin:auto; width:100%; padding-top: 20px;">
                     <div style="margin:auto; width:50%; border-radius:10px; background-color:#009926;">
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:11px; color:white;">Price/Day from</p>
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:30px; font-weight:bolder; color:#f9e769">$51.95</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
               <div style="margin:auto;width:100%; padding-bottom:20px;">
                  <div class="text-center">
                     <img src="images/cdxr-suzuki-swift-2018-b.png" class="zoom imgSize" alt="Vamos Rent-A-Car">
                  </div>
                  <div style="margin: auto; width:100%; color:#009926; font-size:12px; padding-top: 10px; font-weight:bolder;">
                     <p class="text-center" style="margin-bottom:-0.4em;">Premium SUV PFFAR</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Mitsubishi Montero/ToyotaPrado4x4</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Automatic</p>
                  </div>
                  <div style="margin:auto; width:100%; padding-top: 20px;">
                     <div style="margin:auto; width:50%; border-radius:10px; background-color:#009926;">
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:11px; color:white;">Price/Day from</p>
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:30px; font-weight:bolder; color:#f9e769">$51.95</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
               <div style="margin:auto;width:100%; padding-bottom:20px;">
                  <div class="text-center">
                     <img src="images/ffar-mitsubishi-outlander-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car">
                  </div>
                  <div style="margin: auto; width:100%; color:#009926; font-size:12px; padding-top: 10px; font-weight:bolder;">
                     <p class="text-center" style="margin-bottom:-0.4em;">Premium SUV PFFAR</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Mitsubishi Montero/ToyotaPrado4x4</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Automatic</p>
                  </div>
                  <div style="margin:auto; width:100%; padding-top: 20px;">
                     <div style="margin:auto; width:50%; border-radius:10px; background-color:#009926;">
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:11px; color:white;">Price/Day from</p>
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:30px; font-weight:bolder; color:#f9e769">$51.95</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
               <div style="margin:auto;width:100%; padding-bottom:20px;">
                  <div class="text-center">
                     <img src="images/ffar-mitsubishi-outlander-b.png" class="zoom imgSize" alt="Vamos Rent-A-Car">
                  </div>
                  <div style="margin: auto; width:100%; color:#009926; font-size:12px; padding-top: 10px; font-weight:bolder;">
                     <p class="text-center" style="margin-bottom:-0.4em;">Premium SUV PFFAR</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Mitsubishi Montero/ToyotaPrado4x4</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Automatic</p>
                  </div>
                  <div style="margin:auto; width:100%; padding-top: 20px;">
                     <div style="margin:auto; width:50%; border-radius:10px; background-color:#009926;">
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:11px; color:white;">Price/Day from</p>
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:30px; font-weight:bolder; color:#f9e769">$51.95</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
               <div style="margin:auto;width:100%; padding-bottom:20px;">
                  <div class="text-center">
                     <img src="images/pfar-mistubishi-montero-sport-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car">
                  </div>
                  <div style="margin: auto; width:100%; color:#009926; font-size:12px; padding-top: 10px; font-weight:bolder;">
                     <p class="text-center" style="margin-bottom:-0.4em;">Premium SUV PFFAR</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Mitsubishi Montero/ToyotaPrado4x4</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Automatic</p>
                  </div>
                  <div style="margin:auto; width:100%; padding-top: 20px;">
                     <div style="margin:auto; width:50%; border-radius:10px; background-color:#009926;">
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:11px; color:white;">Price/Day from</p>
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:30px; font-weight:bolder; color:#f9e769">$51.95</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
               <div style="margin:auto;width:100%; padding-bottom:20px;">
                  <div class="text-center">
                     <img src="images/pfar-mistubishi-montero-sport-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car">
                  </div>
                  <div style="margin: auto; width:100%; color:#009926; font-size:12px; padding-top: 10px; font-weight:bolder;">
                     <p class="text-center" style="margin-bottom:-0.4em;">Premium SUV PFFAR</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Mitsubishi Montero/ToyotaPrado4x4</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Automatic</p>
                  </div>
                  <div style="margin:auto; width:100%; padding-top: 20px;">
                     <div style="margin:auto; width:50%; border-radius:10px; background-color:#009926;">
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:11px; color:white;">Price/Day from</p>
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:30px; font-weight:bolder; color:#f9e769">$51.95</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
               <div style="margin:auto;width:100%; padding-bottom:20px;">
                  <div class="text-center">
                     <img src="images/sfxr-ssang-yong-korando-a.png" class="zoom imgSize" alt="Vamos Rent-A-Car">
                  </div>
                  <div style="margin: auto; width:100%; color:#009926; font-size:12px; padding-top: 10px; font-weight:bolder;">
                     <p class="text-center" style="margin-bottom:-0.4em;">Premium SUV PFFAR</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Mitsubishi Montero/ToyotaPrado4x4</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Automatic</p>
                  </div>
                  <div style="margin:auto; width:100%; padding-top: 20px;">
                     <div style="margin:auto; width:50%; border-radius:10px; background-color:#009926;">
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:11px; color:white;">Price/Day from</p>
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:30px; font-weight:bolder; color:#f9e769">$51.95</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
               <div style="margin:auto;width:100%; padding-bottom:40px;">
                  <div class="text-center">
                     <img src="images/sfxr-ssang-yong-korando-b.png" class="zoom imgSize" alt="Vamos Rent-A-Car">
                  </div>
                  <div style="margin: auto; width:100%; color:#009926; font-size:12px; padding-top: 10px; font-weight:bolder;">
                     <p class="text-center" style="margin-bottom:-0.4em;">Premium SUV PFFAR</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Mitsubishi Montero/ToyotaPrado4x4</p>
                     <p class="text-center" style="margin-bottom:-0.4em;;">Automatic</p>
                  </div>
                  <div style="margin:auto; width:100%; padding-top: 20px;">
                     <div style="margin:auto; width:50%; border-radius:10px; background-color:#009926;">
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:11px; color:white;">Price/Day from</p>
                        <p class="text-center" style="margin-bottom:-0.4em; font-size:30px; font-weight:bolder; color:#f9e769">$51.95</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>