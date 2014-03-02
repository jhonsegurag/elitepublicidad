<?php 

	session_start();

	if ($_SESSION['idusuario'])
	{
		include_once('imports.php');
		include_once('header.php');
		include_once('menu.php');
		include_once('footer.php');
		getImports();
		?>
		<body>
			<div id="main" class="wrapper">
				<?php 
					getHeader();
					getMenu("administrador");
				?>
			<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
				<section id="gestionar">
					<article >
						<header>
							<h2>Agregar Producto</h2>
						</header>
						<section>
							<div id="formulario_agregar_producto">
								<form action="../controlador/insertarproducto" method="post" enctype="multipart/form-data">
								
									<div class="etiqueta">
										<label> Imágen: </label>
									</div>
									<div class="componente">
										<input class="textField" type="file" name="imagenProducto" maxlength="5" required="required" />
									</div>
								
								
									<div class="etiqueta">
										<label> Nombre: </label>
									</div>
									<div class="componente">
										<input class="textField" type="text" name="nombreProducto" required="required" />
									</div>
									
									
									<div class="etiqueta">
										<label> Descripción: </label>
									</div>
									<div class="componente">
										<input class="textField" type="text" name="descripcionProducto" required="required" />
									</div>
									
									
									<div class="etiqueta">
										<label> Fecha de Creación: </label>
									</div>
									<div class="componente">
										<input class="textField" type="date" name="fechaProducto" required="required" />
									</div>
									
									
									<div style="text-align: center;">
										<input type="submit" value="Agregar Producto" />
									</div>
								</form>
							</div>		
						</section>
					</article>
				</section>
			
			<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
				<?php
					getFooter();
				?>
			</div>
		</body>
	</html>
	<?php	
	}
	else
	{
		header('location:index.php');
	}
 
?>