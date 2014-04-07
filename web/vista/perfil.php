<?php
    session_start();
/**
 * @author Jhon Segura
 * @author Andres David Montoya.
 * @copyright 2013
 */

	if ($_SESSION['idusuario'])
	{
		include_once('imports.php');
		include_once('header.php');
		include_once('menu.php');
		include_once('footer.php');
		getImports();
		$nombre = $_SESSION['nombre'];
		$apellido = $_SESSION['apellido'];
		?>
		<body>
			<div id="main" class="wrapper">
				<?php 
					getHeader();
					getMenu("administrador");
				?>
			<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
				<header id="bienvenido">
					<hgroup>
						<h1>Bienvenido <?php  echo $nombre." ".$apellido ?> </h1>
					</hgroup>
				</header>
				<section id="administrador">
					
					<article >
						<header>
							<h2>Gestión de Usuarios</h2>
						</header>
						<section>
							<div id="funciones">
								<div class="funcion">
									<a href="agregarUsuario" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/agregarusuario.png" title="Agregar Usuario" />
									</a>
								</div>
								<div class="funcion">
									<a href="listarUsuarios" style="text-decoration: none; color: #66CC00 ">
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
									<a href="agregarTrabajo" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/agregartrabajo.png" title="Agregar Trabajo" />
									</a>
								</div>
								<div class="funcion">
									<a href="listarTrabajos" style="text-decoration: none; color: #66CC00 ">
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
									<a href="agregarProducto" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/agregarproducto.png" title="Agregar Trabajo" />
									</a>
								</div>
								<div class="funcion">
									<a href="listarProductos" style="text-decoration: none; color: #66CC00 ">
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
									<a href="agregarServicio" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/agregarservicio.png" title="Agregar Servicio" />
									</a>
								</div>
								<div class="funcion">
									<a href="listarServicios" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/buscarservicio.png" title="Buscar Servicio" />
									</a>
								</div>
							</div>
						</section>
						
					</article>
					<article>
						<header>
							<h2>Gestión de Clientes</h2>
						</header>
						<section>
							<div id="funciones">
								<div class="funcion">
									<a href="agregarCliente" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/agregarusuario.png" title="Agregar Cliente" />
									</a>
								</div>
								<div class="funcion">
									<a href="listarClientes" style="text-decoration: none; color: #66CC00 ">
										<img style="width: 100%; height: 100%;" src="../../imagenes/administrador/buscarusuario.png" title="Buscar Cliente" />
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
		header('location:index');
	}
 
?>