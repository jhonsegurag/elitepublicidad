<?php
    function getImports()
	{
	?>	
	
	<html lang="es">
		<head> 
			<meta charset="utf-8">
			
			<link href="../../css/style.css" rel="stylesheet">
			
			<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
			Remove this if you use the .htaccess -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			
			<!-- Scala Sitio Web-->
			<meta name="viewport" content="width=device-width,initial-scale=1"/>
			
			<!-- Palabras clave sitio web-->
            <meta name="keywords" content="elite, publicidad, elite publicidad, elite publicidad armenia, calcomanias, avisos, señalizacion vial, pendones, impresion digital, vinilos, polarizados, decoracion vehiculos, quindio, armenia, colombia, suramerica"/>
			<!-- Descripcion sitio web-->
			<meta name="descripcion" content="Somos una institución prestadora de servicios publicitarios comprometida con la promoción de las empresas del eje cafetero en todas sus etapas"/>
			
            <!-- Autores Diseño Web.-->
            <link rel="author" href="../../humans.txt" />
			
			
			<!-- Editor de texto
			<script src="../../libs/ckeditor/ckeditor.js"></script>
			-->
			
			<!-- jQuery library (1.9.1) -->
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <!-- jQuery library (served from Google) -->
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
            <!-- bxSlider Javascript file -->
            <script type="text/javascript" src="../../js/jquery.bxslider.min.js"></script>
            <!-- bxSlider CSS file -->
            <link type="text/css" href="../../css/jquery.bxslider.css" rel="stylesheet" />
            
            <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
			<link rel="shortcut icon" href="../../favicon.ico">
			<link rel="apple-touch-icon" href="../../favicon.png">
			
			<!-- Dropzonejs file - css -->
			<link href="../../css/dropzone.css" type="text/css" rel="stylesheet" />
			<script type="text/javascript" src="../../js/dropzone.min.js"></script>
			
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
				    var altura_header = $('#contenedorHeader').outerHeight(true);
				    
				    var altura_del_menu = $('nav').outerHeight(true);
				
				    if (($(window).scrollTop() >= (altura_header)))
				    {
				        $('nav').addClass('fixed');
				        $('#main').css('margin-top', (altura_del_menu) + 'px');
				    }
				     else {
				        $('nav').removeClass('fixed');
				        $('#main').css('margin-top', '0');
				    }
				}
				});
				
			</script>
			 
			 <!-- VisorImagenes-ColorBox file CSS -->
			 <link type="text/css" rel="stylesheet" href="../../css/colorbox.css" />
			 <!-- ColorBox file JS-->
			<script type="text/javascript" src="../../js/jquery.colorbox.js"></script>
			<!-- Visor para los trabajos realizados. -->
			 <script>
				$(document).ready(function(){
					//Examples of how to assign the Colorbox event to elements
					$(".trabajo").colorbox({
						rel:'trabajo',
						width: "600px"
						});
					
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
					$(".imagenesProducto").colorbox({
						rel:'imagenesProducto',
						width: "600px"
						});
					
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
					$(".imagenesServicio").colorbox({
					rel:'imagenesServicio',
					width: "600px"
					});
					
					//Example of preserving a JavaScript event for inline calls.
					$("#click").click(function(){ 
						$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
						return false;
					});
				});
			</script>
			
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			  ga('create', 'UA-47449603-2', 'elitepublicidad.com.co');
			  ga('send', 'pageview');

			</script>
			
			<title>Elite Publicidad Armenia</title>
		</head>
	<?php
	}


	 function getImportsAdmin()
	{
	?>	
	
	<html lang="es">
		<head> 
			<meta charset="utf-8">
			
			<link href="../../css/style.css" rel="stylesheet">
			
			<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
			Remove this if you use the .htaccess -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			
			<!-- Scala Sitio Web-->
			<meta name="viewport" content="width=device-width,initial-scale=1"/>
			
			<!-- Palabras clave sitio web-->
            <meta name="keywords" content="elite, publicidad, elite publicidad, elite publicidad armenia, calcomanias, avisos, señalizacion vial, pendones, impresion digital, vinilos, polarizados, decoracion vehiculos, quindio, armenia, colombia, suramerica"/>
			
			<!-- Descripcion sitio web-->
			<meta name="descripcion" content="Somos una institución prestadora de servicios publicitarios comprometida con la promoción de las empresas del eje cafetero en todas sus etapas"/>
			
            <!-- Autores Diseño Web.-->
            <link rel="author" href="../../humans.txt" />
			
			
			<!-- Editor de texto-->
			<script src="../../libs/ckeditor/ckeditor.js"></script>
			
			<!-- jQuery library (1.9.1) -->
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <!-- jQuery library (served from Google) -->
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			
			
            
            <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
			<link rel="shortcut icon" href="../../favicon.ico">
			<link rel="apple-touch-icon" href="../../favicon.png">
			
			<!-- Dropzonejs file - css -->
			<link href="../../css/dropzone.css" type="text/css" rel="stylesheet" />
			<script type="text/javascript" src="../../js/dropzone.min.js"></script>
			
			<!-- Menu pegajoso -->
			<script>
			
			$(document).ready(function(){
					posicionarMenu();
				
				$(window).scroll(function() {    
				    posicionarMenu();
				});
				
				function posicionarMenu() {
				    var altura_del_logo = $('#contenedorHeader').outerHeight(true);
				    
				    var altura_del_menu = $('nav').outerHeight(true);
				
				    if (($(window).scrollTop() >= (altura_del_logo + 15)))
				    {
				        $('nav').addClass('fixed');
				        $('#main').css('margin-top', (altura_del_menu) + 'px');
				    }
				     else {
				        $('nav').removeClass('fixed');
				        $('#main').css('margin-top', '0');
				    }
				}
				});
				
			</script>
			 
			
			
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			  ga('create', 'UA-47449603-2', 'elitepublicidad.com.co');
			  ga('send', 'pageview');

			</script>
			
			<title>Elite Publicidad Armenia</title>
		</head>
	<?php
	}
?>