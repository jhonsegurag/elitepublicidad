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
								<p> <?php echo $servicios[$i]['descripcion'] ?> </p>
							</div>
						</div>
						<div id="imagenes">
							<div class="itemImagenes">
								
							</div>
							<div class="itemImagenes">
								
							</div>
							<div class="itemImagenes">
								
							</div>
							<div class="itemImagenes">
								
							</div>
							<div class="itemImagenes">
								
							</div>
							<div class="itemImagenes">
								
							</div>
							<div class="itemImagenes">
								
							</div>
							<div class="itemImagenes">
								
							</div>
							
						</div>
						
					</section>
					<footer>
						<div id="verMas">
							<a href="infoServicio.php">
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
