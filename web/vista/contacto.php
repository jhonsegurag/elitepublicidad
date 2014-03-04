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
					
					<aside>
						<div id="infoContacto">
							<p><img  src="../../imagenes/contacto/email.png" /><span>info@elitepublicidad.com.co</span></p>
							<p><img  src="../../imagenes/contacto/movil.png" /><span>731 9926 / 320 285 5536 / 320 629 7474</span></p>
							<p><img  src="../../imagenes/contacto/ubicacion.png" /><span>Armenia - Quindío - Colombia</span></p>
							<p><img  src="../../imagenes/contacto/web.png" /><span>www.elitepublicidad.com.co</span></p>
							<p><img  src="../../imagenes/contacto/viber.png" /><span>320-285-55-36 / 320 629 7474</span></p>
							<p><img  src="../../imagenes/contacto/line.png" /><span>320-285-55-36 / 320 629 7474</span></p>
							<p><img  src="../../imagenes/contacto/whatsapp.png" /><span>320-285-55-36 / 320 629 7474</span></p>
						</div>
					</aside>
					
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
								<div class="componente"><textarea class="textField" name="descripcionProducto" required="required"></textarea></div>
								
								<div style="text-align: center;">
									<input type="submit" value="Enviar" />
								</div>
							</div>
						</section>
					</article>
					
					<article>
						<section>
								<div id="streetView">
									<a href="https://www.google.com/maps/place/Elite+Publicidad/@4.53881,-75.67379,3a,75y,186.59h,90t
									/data=!3m4!1e1!3m2!1sGqfN2nvxwwYX65UQj8A59Q!2e0!4m2!3m1!1s0x0:0xa831c1ee1cd53b26!6m1!1e1?hl=es-ES"
									target="_blank">
									Ver en Google Street View</a>
								</div>
								<div id="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.3062351876547!2d-75.6737928!
									3d4.5387836000000075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f5a9829914bb%3A0xa831c1
									ee1cd53b26!2sElite+Publicidad!5e0!3m2!1ses-419!2s!4v1393009853129" 
									frameborder="0" style="border:0">
									</iframe>
								</div>
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