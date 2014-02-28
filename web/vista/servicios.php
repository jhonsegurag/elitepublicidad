<?php
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$servicios = getServicios();
	getImports();
?>
	<body>
		<div id="main" class="wrapper">
			<?php 
				getHeader();
				getMenu("inicio");
			?>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->		
			<section id="servicios">
						<?php 
							for ($i=0; $i < sizeof($servicios) ; $i++) { 
							
						?>
				<article>
					<hgroup>
						<h1> <?php echo $servicios[$i]['nombre'] ?></h1>
					</hgroup>
					<section>
								
							
						<div id="informacion">
							<div id="imagenInformacion">
								<img style="width: 100%; height: 100%;" src="<?php echo $servicios[$i]['ruta'] ?>" />
							</div>
							<div id="textoInformacion">
								<?php echo $servicios[$i]['descripcion'] ?>
							</div>
						</div>
						<div id="imagenes">
							<?php
								$idServicio= $servicios[$i]['idservicio'];							
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
						
					</section>
					<footer>
						<div id="verMas">
							<a href="<?php echo "infoServicio?idservicio=".$servicios[$i]['idservicio'] ?>">
								<span>Ver más...</span>
							</a>
						</div>
					</footer>
				</article>
				<?php
				}
				?>
			</section>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
			<?php
				getFooter();
			?>
		</div>
	</body>
	</html>
