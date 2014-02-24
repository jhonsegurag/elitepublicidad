<?php
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	getImports();
?>
	<body>
		<div id="main" class="wrapper">
			<?php 
				getHeader();
				getMenu("inicio");
				$productos = getProductos();
				
			?>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->		
			<section id="productos">
				<?php
					for ($i=0; $i < sizeof($productos); $i++) { 
								
				?>
				<article>
					<hgroup>
						<h1> <?php echo $productos[$i]['nombre'] ?></h1>
					</hgroup>
					<section>
						<div id="informacion">
							<div id="imagenInformacion">
								<img style="width: 100%; height: 100%;" src="<?php echo $productos[$i]['ruta'] ?>"/>
							</div>
							<div id="textoInformacion">
								<p>
									<?php echo $productos[$i]['descripcion']; ?>
								</p>
							</div>
						</div>

						<div id="imagenes">
							<?php
							$idProducto= $productos[$i]['idproducto'];							
							$imagenes = getImagenesProducto($idProducto);		  		
							for ($j=0; $j < sizeof($imagenes) ; $j++) 
							{			
							?>
								<div class="itemImagenes">
									<img style="width: 100%; height: 100%;" src="<?php echo $imagenes[$j]['ruta'] ?>" />
								</div>
							<?php 
							}
						 	?>
						 	
						</div>
						
					</section>
					<footer>
						<div id="verMas">
							<a href="<?php echo "infoProducto.php?idproducto=".$productos[$i]['idproducto'] ?>">
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
