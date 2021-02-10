<style>
	.listItem {
		color: white;
		font-size: 10px;
		font-weight: 600;
	}
</style>
<div style="background-color:#009926">
	<div style="padding-left: 13%;padding-right: 13%;padding-top: 2%; position: relative;">
		<div class="row">
			<div style="margin:auto;width:40%; position: absolute;top: -30%;left:30%;z-index: 10;">
				<p style="color:#009926;background-color:#f9e769; height:30px; border-radius:10px; padding:2px; font-size:16px;font-weight:bolder;" class="text-center">
					"Come be treated like family at Vamos!"
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4 text-center">
				<p class="listItem">Vehicle Make &amp; Model are Representative for Each Category</p>
			</div>
			<div class="col-4 text-center">
				<p class="listItem">Terms of Service</p>
			</div>
			<div class="col-4 text-center">
				<p class="listItem">Copyright 2007 - <?php echo date('Y'); ?> Vamos Rent-A-Car. All Rights Reserved.</p>
			</div>
		</div>

	</div>
	<div id="menuFooterResponsive" class="container-fluid d-lg-none fixed-bottom py-2">
		<div class="row">
			<div id="homeFoot" class="col-3">
				<a href="https://vamosrentacar.com/">
					<i class="fas fa-home"></i><br>
					<span>HOME</span>
				</a>
			</div>
			<div id="reserveFoot" class="col-3 activePage">
				<a href="http://reservations.vamosrentacar.com/Search/Init/Vamos" target="_blank">
					<i class="fas fa-car-side"></i><br>
					<span>RESERVE</span>
				</a>
			</div>
			<div id="contactFoot" class="col-3 activePage">
				<a href="#" data-toggle="modal" data-target="#modalPhone">
					<i class="fas fa-phone fa-fw" data-fa-transform="rotate-90"></i><br>
					<span>CALL</span>
				</a>
			</div>
			<div id="smsFoot" class="col-3 activePage">
				<a href="#" data-toggle="modal" data-target="#modalText">
					<a href="sms:+1-213-261-8586">
						<i class="fas fa-comments"></i><br>
						<span>TEXT</span>
					</a>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.2.1.js"></script>
<script src="js/step-bar.js"></script>

<script>
	$(document).scroll(function() {
		var scroll = $(document).scrollTop();
		var windowWidth = $(window).width();
		var carouselHeight = $('#carousel');
		var height = carouselHeight.innerHeight();
		var scrollHeight = height - 150;
		var scrollHeightResp = height - 155;

		/*
			   if( windowWidth <= 991){
			     if (scroll >= scrollHeightResp) {
			       $("#calendarContent").addClass("stickyCalendar");
			       $("#dropOffContent").slideUp(300);
			       $(".pt-scroll").show();
			     } else {
			       $("#calendarContent").removeClass("stickyCalendar");
			       $(".pt-scroll").hide();
			     }
			   }else 
				  
			  */
		if (windowWidth >= 992) {
			if (scroll >= scrollHeight) {
				$("#calendarContent").addClass("stickyCalendar");
				$("#dropOffContent").slideUp(300);
				$(".pt-scroll").show();
			} else {
				$("#calendarContent").removeClass("stickyCalendar");
				$(".pt-scroll").hide();
				$("#dropOffContent").hide();
			}
		}

	});

	/*
				   $(document).ready(function() {    
						$( "#pickLocation, #pickDateContent, #timePick" ).click(function() {
						  $("#dropOffContent").css('display','flex');
						});
				   });
				   
				   */
</script>