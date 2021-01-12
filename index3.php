<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/head.php' ?>
  <body>
  	<?php include 'includes/header.php' ?>
	
	<!-- step 3-->
 	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>  
	
    <?php include 'includes/services.php' ?> 
	<?php include 'includes/footer.php' ?> 
	  <script src="js/stickyTop.js"></script> 
	  <script src="js/collapse.js"></script>
 
 	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>  
	<script type="text/javascript" src="./slick/slick-new.js"  charset="utf-8"></script>
	<script type="text/javascript" src="./slick/scripts.js"></script>
	<script type="text/javascript" src="./slick/prism.js"></script>
	 
	<script type="text/javascript"> 
	 
		$(document).ready(function(){
		  $("#btn-corusel-coral").click(function(){ 
			/* $("#corusel-coral").toggle(); */  
			$('#corusel-coral').slideToggle('slow');
			 
			/* $( ".slick-prev" ).click(); */
			 
		  });
		  
		/*  $( "#corusel-coral" ).hide(); */
  
		});
	   
	</script>	  
 
	  
	  
  </body>
</html>