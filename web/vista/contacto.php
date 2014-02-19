<?php
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");

	getImports();
?>
	<body>
		<div id="main" class="wrapper">
			<?php 
				getHeader();
				getMenu("empresa");
			?>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->		
				<section id="contacto">
					
					<article>
						<header>
							<h1>Contáctenos</h1>
						</header>
						<section>
							<div id="formularioContacto">
								<div class="etiqueta"><label>Nombre:</label></div>
								<div class="componente"><input class="textField" type="text" name="nombre" required="required"/></div>
								
								<div class="etiqueta"><label>Telefono:</label></div>
								<div class="componente"><input class="textField" type="text" name="telefono" required="required"/></div>
								
								<div class="etiqueta"><label>Email:</label></div>
								<div class="componente"><input class="textField" type="text" name="email" required="required"/></div>
								
								<div class="etiqueta"><label>Mensaje:</label></div>
								<div class="componente"><input class="textField" type="text" name="mensaje" required="required"/></div>
								
								<div style="text-align: center;">
									<input type="submit" value="Enviar" />
								</div>
							</div>
							
							<aside>
								<div id="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.3061963384243!2d-75.673798750
									00003!3d4.538790650000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f5a97708046f%3A0xd9
									f7d001201fc8d3!2sCarrera+21+%23+15-3!5e0!3m2!1ses-419!2s!4v1392822817407" 
									 frameborder="0" style="border:0">
									</iframe>
								</div>
								<div id="streetView">
									<a href="https://www.google.com/maps/place/Carrera+21+%23+15-3/@4.53881,-75.67379,3a,90y,186h,90t/dat
									a=!3m4!1e1!3m2!1sGqfN2nvxwwYX65UQj8A59Q!2e0!4m2!3m1!1s0x8e38f5a97708046f:0xd9f7d001201fc8d3!6m1!1e1"
									target="_blank">
									Encuentranos en Google Street View</a>
								</div>
							</aside>
							
						</section>
						<footer>
							
						</footer>
					</article>
				</section>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
			<?php
				getFooter();
			?>
		</div>
	</body>
	</html>