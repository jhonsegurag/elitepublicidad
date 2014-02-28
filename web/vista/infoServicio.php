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
							<img style="width: 100%; height: 100%;" src="<?php echo $servicio['ruta'] ?>" />
						</div>
					</section>
					
					<aside>
						<div class="textoServicio">
							<?php echo $servicio['descripcion'] ?>
						</div>
					</aside>
					
					<footer>
						<div id="imagenes">
							<?php
								$idServicio= $servicio['idservicio'];							
								$imagenes = getImagenesServicio($idServicio);		  		
								for ($j=0; $j < sizeof($imagenes) ; $j++) 
								{			
							?>
							<a class="imagenesServicio" href="<?php echo $imagenes[$j]['ruta'] ?>" title="<?php echo $imagenes[$j]['descripcion'] ?>">
								<div class="itemImagenes">
									<img style="width: 100%; height: 100%;" src="<?php echo $imagenes[$j]['ruta'] ?>" />
								</div>	
							</a>
							<?php 
								}
						 	?>
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
