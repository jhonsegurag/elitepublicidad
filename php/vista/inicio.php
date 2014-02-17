<?php
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$trabajosrealizados=getTrabajosRealizados();
	getImports();
	
?>
	<body>
		<div id="fb-root"></div>
		<!-- Social media Facebook -->
			<script>
			
				(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
				
			</script>
		<div id="main" class="wrapper">
			<?php 
				getHeader();
				getMenu("inicio");
			?>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->	
			<section id="slider">
				<ul class="elitePublicidad">
					<li> <img class="imagen" src="../../imagenes/slide/1.png"></li>
					<li> <img class="imagen" src="../../imagenes/slide/2.jpg"></li>
					<li> <img class="imagen" src="../../imagenes/slide/3.jpg"></li>
					<li> <img class="imagen" src="../../imagenes/slide/4.jpg"></li>
					<li> <img class="imagen" src="../../imagenes/slide/5.jpg"></li>
				</ul>
				
			</section>
		
			<section id="productosYServicios">
				<article id="productos">
					<hgroup>
						<h1>
							Productos
						</h1>
					</hgroup>
					<div>
							<?php

						?>
							<a href="">
								<li>TEXTO 1</li>
							</a>
					</div>
				</article>
				<article id="servicios">
					<hgroup>
						<h1>
							Servicios
						</h1>
					</hgroup>
					<div>
						<?php
						
						?>
							<a href="">
								<li>TEXTO 1</li>
							</a>
					</div>
				</article>
				<aside>
					<div>
						<div class="fb-like-box" data-href="http://www.facebook.com/elitepublicidadgroup" data-width="80%" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
					</div>
				</aside>
			</section>
			
			<section id="trabajosRealizados">
				<article>
					<hgroup>
						<h1>Trabajos Realizados...</h1>
					</hgroup>
					<section>
						<div id="items">
							<?php
							for ($i=0; $i <sizeof($trabajosrealizados) ; $i++)
							{							
							?>
							<a class="trabajo" href="<?php echo $trabajosrealizados[$i]['ruta'] ?>" title="<?php echo $trabajosrealizados[$i]['descripcion'] ?>">
                            	<div class="itemTrabajosRealizados">
									<img style="width: 100%; height:100%;" src="<?php echo $trabajosrealizados[$i]['ruta'] ?>" />
								</div>	
                            </a>
							<?php
							}
							?>
						</div>
					</section>
				</article>
			</section>
			
			<section id="nuestrosClientes">
				<article>
					<hgroup>
						<h1>Nuestros Clientes...</h1>
					</hgroup>
					<section>
						<div id="items">
							<div class="itemNuestrosClientes">
								
							</div>	
							<div class="itemNuestrosClientes">
								
							</div>
							<div class="itemNuestrosClientes">
								
							</div>
							<div class="itemNuestrosClientes">
								
							</div>
							<div class="itemNuestrosClientes">
								
							</div>
							<div class="itemNuestrosClientes">
								
							</div>
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
