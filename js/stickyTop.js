$(document).ready(function () {
	if (page == 'select' || 'check_out' || page == 'reserve') {
		$('.contentHeader').removeClass('fixed');
		$(document).scroll(function () {
			var scroll = $(document).scrollTop();
			var windowWidth = $(window).width();
			if (windowWidth >= 992) {
				if (scroll >= 165) {
					$(".selectedCar2").addClass("stickyTop");
					$(".selectedCar").addClass("stickyTop");
					// $(".pt-scroll").show();
					// $(".pt-scroll2").show();
				} else {
					$(".selectedCar2").removeClass("stickyTop");
					$(".selectedCar").removeClass("stickyTop");
					$(".pt-scroll").hide();
					$(".pt-scroll2").hide();
				}
				//				  if (scroll >= 225) {
				//					  $(".rightbar").addClass("stickyRight");
				//					} else {
				//					  $(".rightbar").removeClass("stickyRight");
				//					}
			}
		});
	}
});