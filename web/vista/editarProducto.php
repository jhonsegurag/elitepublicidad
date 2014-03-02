<?php 

	session_start();

	if ($_SESSION['idusuario'])
	{
		include_once('imports.php');
		include_once('header.php');
		include_once('menu.php');
		include_once('footer.php');
		include_once ('../controlador/funciones.php');
		getImports();
		$idproducto=$_GET['idproducto'];
		$producto=getInformacionProducto($idproducto)
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
							<h2>Editar Producto</h2>
						</header>
						<section>
							<div id="formulario_agregar_producto">
								<form action="../controlador/actualizarproducto" method="post" enctype="multipart/form-data">
								
									<div class="etiqueta">
										<label> Id</label>
									</div>
									<div class="componente">
										<input value="<?php echo $producto['idproducto']; ?>" class="textField" type="text" name="idproducto" maxlength="5" required="required" readonly />
									</div>
								
								
									<div class="etiqueta">
										<label> Nombre: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $producto['nombre']; ?>" class="textField" type="text" name="nombre" required="required" />
									</div>
									
									
									<div class="etiqueta">
										<label> Descripción: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $producto['descripcion']; ?>" class="textField" type="text" name="descripcion" required="required" />
									</div>
									
									
									<div class="etiqueta">
										<label> Fecha de Creación: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $producto['fechacreacion']; ?>" class="textField" type="date" name="fechacreacion" required="required" />
									</div>
									
									
									<div style="text-align: center;">
										<input type="submit" value="Guardar Producto" />
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