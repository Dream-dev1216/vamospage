/*Collapse insurances*/
$('#insurance1').change(function () {
	$('#collapse1').removeClass("collapse");
	$('#collapse2').addClass("collapse");
	$('#collapse3').addClass("collapse");
});
$('#insurance2').change(function () {
	$('#collapse2').removeClass("collapse");
	$('#collapse1').addClass("collapse");
	$('#collapse3').addClass("collapse");
});
$('#insurance3').change(function () {
	$('#collapse3').removeClass("collapse");
	$('#collapse1').addClass("collapse");
	$('#collapse2').addClass("collapse");
});

/*Collapse additional services*/

$('#add_on_2').change(function () {
	if ($(this).prop("checked")){
		$('#collapse4').removeClass("collapse");
	}else{
		$('#collapse4').addClass("collapse");
	}
	$('#collapse5').addClass("collapse");
	$('#collapse6').addClass("collapse");
	$('#collapse7').addClass("collapse");
});

$('#add_on_3').change(function () {
	if ($(this).prop("checked")){
		$('#collapse5').removeClass("collapse");
	}else{
		$('#collapse5').addClass("collapse");
	}
	$('#collapse4').addClass("collapse");
	$('#collapse6').addClass("collapse");
	$('#collapse7').addClass("collapse");
});

$('#add_on_4').change(function () {
	if ($(this).prop("checked")){
		$('#collapse6').removeClass("collapse");
	}else{
		$('#collapse6').addClass("collapse");
	}
	$('#collapse4').addClass("collapse");
	$('#collapse5').addClass("collapse");
	$('#collapse7').addClass("collapse");
});

$('#add_on_5').change(function () {
	if ($(this).prop("checked")){
		$('#collapse7').removeClass("collapse");
	}else{
		$('#collapse7').addClass("collapse");
	}
	$('#collapse4').addClass("collapse");
	$('#collapse5').addClass("collapse");
	$('#collapse6').addClass("collapse");
});