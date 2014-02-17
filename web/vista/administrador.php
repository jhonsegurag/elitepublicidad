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
				
				<section id="login">
					<article>
			
					<header>
						<hgroup>
							<h1>
								¡Bienvenido Administrador!
							</h1>
						</hgroup>
					</header>
					
					<div id="formulario">
						<form action="../controlador/login.php" method="post">
							<div class="etiqueta">
								<label> Usuario: </label>
							</div>
							<div class="componente">
								<input class="textField"type="text" name="idusuario" required="required" />
							</div>
							<div class="etiqueta">
								<label> Contraseña: </label>
							</div>
							<div class="componente">
								<input class="textField" type="password" name="password" required="required"/>
							</div>
							<div style="text-align: center;">
								<input type="submit" value="Ingresar" />
							</div>
						</form>
					</div>						
					</article>
				</section>
				
				
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
			<?php
				getFooter();
			?>
		</div>
	</body>
	</html>