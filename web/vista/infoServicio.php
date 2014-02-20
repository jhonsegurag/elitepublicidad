<?php
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	getImports();
	$idservicio=$_GET['idservicio'];
	$servicio=getInformacionServicio($idservicio);
?>
	<body>
		<div id="main" class="wrapper">
			<?php 
				getHeader();
				getMenu("inicio");
				$productos = getProductos();
			?>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->		
			<section id="infoServicio">
				<article>
					<header>
						<hgroup>
							<h1><?php echo $servicio['nombre'] ?></h1>
						</hgroup>
					</header>
					
					<section>
						<div class="imagenServicio">
							<img src="<?php echo $servicio['ruta'] ?>" />
						</div>
					</section>
					
					<aside>
						<div class="textoServicio">
							<p><?php echo $servicio['descripcion'] ?></p>
						</div>
					</aside>
					
					<footer>
						<div class="imagenesServicio">
							Aquí irian las imagenes del servicio Aquí irian las imagenes del servicio Aquí irian las imagenes del servicio 
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
