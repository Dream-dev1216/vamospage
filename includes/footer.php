<div class="container-fluid footer mb-5 mt-2">
	<div class="container p-4 shadow">
		<div class="row no-gutters">
			<div class="col-md-4 text-center text-md-left">
				<small>Vehicle Make &amp; Model are Representative for Each Category</small>
			</div>
			<div class="col-md-4 text-center">
				<small><a href="https:////vamosrentacar.com/tos/" target="_blank">Terms of Service</a><span style="font-size: 4px; vertical-align: middle; margin: 10px; color: #666;"><i class="fas fa-circle"></i></span><a href="https://vamosrentacar.com/privacy-policy/" target="_blank">Privacy</a></small>
			</div>
			<div class="col-md-4 text-center text-md-right">
				<small>Copyright 2007 - <?php echo date('Y'); ?> Vamos Rent-A-Car. All Rights Reserved.</small>
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
					<!-- <a href="sms:+1-213-261-8586"> -->
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