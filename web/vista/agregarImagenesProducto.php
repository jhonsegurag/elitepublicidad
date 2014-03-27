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
					$direccion = "../controlador/cargarImagenesProductos?idproducto=".$_GET['idproducto'];
				?>
			<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
				<section id="gestionar">
					<article >
						<header>
							<h2>Agregar Imagenes Al Producto</h2>
						</header>
						<section>
							<div id="formulario_agregar_imagenes_producto">
								<form id="my-awesome-dropzone" action="<?php echo $direccion;?>"  class="dropzone" method="post" enctype="multipart/form-data">
									<div style="text-align: center;">
										<input type="submit" value="Agregar imagenes al producto" />
									</div>
								</form>
								<script>
									Dropzone.options.myAwesomeDropzone = 
									{ 
										maxFilesize: 1,
										addRemoveLinks:true 
									};
								</script>
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