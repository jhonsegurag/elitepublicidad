<?php
    session_start();
/**
 * @author Jhon Segura
 * @copyright 2013
 */

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
				?>
			<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
				<section id="administrador">
					
					<article >
						<header>
							<h2>Gestión de Usuarios</h2>
						</header>
						<section>
							<div id="funciones">
								<div class="funcion">
									<a href="agregarUsuario.php" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/agregarusuario.png" title="Agregar Usuario" />
									</a>
								</div>
								<div class="funcion">
									<a href="listarUsuarios.php" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/buscarusuario.png" title="Buscar Usuario" />
									</a>
								</div>
							</div>
						</section>
						
					</article>
					<article>
						<header>
							<h2>Gestión de Trabajos</h2>	
						</header>
						<section>
							<div id="funciones">
								<div class="funcion">
									<a href="agregarTrabajo.php" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/agregartrabajo.png" title="Agregar Trabajo" />
									</a>
								</div>
								<div class="funcion">
									<a href="listarTrabajos.php" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/buscartrabajo.png" title="Buscar Trabajo" />
									</a>
								</div>
							</div>
						</section>
						
					</article>
					<article>
						<header>
							<h2>Gestión de Productos</h2>
						</header>
						<section>
							<div id="funciones">
								<div class="funcion">
									<a href="agregarProducto.php" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/agregarproducto.png" title="Agregar Trabajo" />
									</a>
								</div>
								<div class="funcion">
									<a href="listarProductos.php" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/buscarproducto.png" title="Buscar Trabajo" />
									</a>
								</div>
							</div>
						</section>
						
					</article>
					<article>
						<header>
							<h2>Gestión de Servicios</h2>
						</header>
						<section>
							<div id="funciones">
								<div class="funcion">
									<a href="agregarServicio.php" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/agregarservicio.png" title="Agregar Servicio" />
									</a>
								</div>
								<div class="funcion">
									<a href="listarServicios.php" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/buscarservicio.png" title="Buscar Servicio" />
									</a>
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
	<?php	
	}
	else
	{
		header('location:index.php');
	}
 
?>