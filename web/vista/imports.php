<?php
    function getImports()
	{
	?>	
	
	<html lang="es">
		<head> 
			<meta charset="utf-8">
			
			<link href="../../css/style.css" rel="stylesheet">
			
			<!-- Editor de texto. -->
			<script src="../../libs/ckeditor/ckeditor.js"></script>
			
			<!-- jQuery library (1.9.1) -->
            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <!-- jQuery library (served from Google) -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
            <!-- bxSlider Javascript file -->
            <script src="../../js/jquery.bxslider.min.js"></script>
            <!-- bxSlider CSS file -->
            <link href="../../css/jquery.bxslider.css" rel="stylesheet" />
            
            <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
			<link rel="shortcut icon" href="../../favicon.ico">
			<link rel="apple-touch-icon" href="../../favicon.png">
			
			<!-- Dropzonejs file - css -->
			<link href="../../css/dropzone.css" type="text/css" rel="stylesheet" />
			<script src="../../js/dropzone.min.js"></script>>
			
			<!-- Slider Javascript file -->
			<script>
				$(document).ready(function(){
					$('.elitePublicidad').bxSlider({
						auto: true,
						captions: true,
						autoControls: true,
						pager: true,
						pause: 3000
					});
				});
			</script>
			<!-- Menu pegajoso -->
			<script>
			
			$(document).ready(function(){
					posicionarMenu();
				
				$(window).scroll(function() {    
				    posicionarMenu();
				});
				
				function posicionarMenu() {
				    var altura_del_logo = $('#logo').outerHeight(true);
				    var altura_del_menu = $('nav').outerHeight(true);
				
				    if ($(window).scrollTop() >= altura_del_logo + 30){
				        $('nav').addClass('fixed');
				        $('#main').css('margin-top', (altura_del_menu) + 'px');
				    } else {
				        $('nav').removeClass('fixed');
				        $('#main').css('margin-top', '0');
				    }
				}
				});
				
			</script>
			 
			 <!-- VisorImagenes-ColorBox file CSS -->
			 <link rel="stylesheet" href="../../css/colorbox.css" />
			 <!-- ColorBox file JS-->
			<script src="../../js/jquery.colorbox.js"></script>
			<!-- Visor para los trabajos realizados. -->
			 <script>
				$(document).ready(function(){
					//Examples of how to assign the Colorbox event to elements
					$(".trabajo").colorbox({rel:'trabajo'});
					
					//Example of preserving a JavaScript event for inline calls.
					$("#click").click(function(){ 
						$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
						return false;
					});
				});
			</script>
			 <!-- Visor para las imagenes de un producto -->
			 <script>
				$(document).ready(function(){
					//Examples of how to assign the Colorbox event to elements
					$(".imagenesProducto").colorbox({rel:'imagenesProducto'});
					
					//Example of preserving a JavaScript event for inline calls.
					$("#click").click(function(){ 
						$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
						return false;
					});
				});
			</script>
			<!-- Visor para las imagenes de un servicio-->
			<script>
				$(document).ready(function(){
					//Examples of how to assign the Colorbox event to elements
					$(".imagenesServicio").colorbox({rel:'imagenesServicio'});
					
					//Example of preserving a JavaScript event for inline calls.
					$("#click").click(function(){ 
						$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
						return false;
					});
				});
			</script>
			<title> Elite Publicidad </title>
		</head>
	<?php
	}
?>