<?php
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	getImports();
	$idproducto=$_GET['idproducto'];
	$producto=getInformacionProducto($idproducto);
?>
	<body>
		<div id="main" class="wrapper">
			<?php
			getHeader();
			getMenu("inicio");
			$productos = getProductos();
			?>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->		
			<section id="infoProducto">
				<article>
					<header>
						<hgroup>
							<h1><?php echo $producto['nombre'] ?></h1>
						</hgroup>
					</header>
					
					<section>
						<div class="imagenProducto">
							<img style="width: 100%; height: 100%;" src="<?php echo $producto['ruta'] ?>" />
						</div>
						<div class="textoProducto">
							<p><?php echo $producto['descripcion'] ?> </p>
						</div>
					</section>
				
					<footer>
						<div class="imagenesProducto">
							Aquí irian las imagenes del producto Aquí irian las imagenes del producto Aquí irian las imagenes del producto 
						</div>
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
