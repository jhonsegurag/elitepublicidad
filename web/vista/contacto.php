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