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
					$direccion = "../controlador/cargarimagenesproductos.php?idproducto=".$_GET['idproducto'];
					echo "<script type='text/javascript'>
					alert('".$direccion."');
					</script>";
				?>
			<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
				<section id="gestionar">
					<article >
						<header>
							<h2>Agregar Imagenes Al Producto</h2>
						</header>
						<section>
							<div id="formulario_agregar_imagenes_producto">
								<form action="<?php echo $direccion;?>" class="dropzone" method="post" enctype="multipart/form-data">
									<div style="text-align: center;">
										<input type="submit" value="Agregar Imagenes Al Producto" />
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