<?php 

	session_start();

	if ($_SESSION['idusuario'])
	{
		include_once('imports.php');
		include_once('header.php');
		include_once('menu.php');
		include_once('footer.php');
		include_once('../controlador/funciones.php');
		
		getImports();
		$idservicio=$_GET['idservicio'];
		$servicio=getInformacionServicio($idservicio);
		
		?>
		<body>
			<div id="main" class="wrapper">
				<?php 
					getHeader();
					getMenu("administrador");
				?>
			<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
				<section id="gestionar">
					<article >
						<header>
							<h2>Editar Servicio</h2>
						</header>
						<section>
							<div id="formulario_agregar_servicio">
								<form action="../controlador/actualizarServicio" method="post">
								
									<div class="etiqueta">
										<label> Id: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $servicio['idservicio']; ?>" class="textField" type="text" name="idservicio" required="required" readonly />
									</div>
								
								
									<div class="etiqueta">
										<label> Nombre: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $servicio['nombre']; ?>" class="textField" type="text" name="nombre" required="required" />
									</div>
									
									
									<div class="etiqueta">
										<label> Descripción: </label>
									</div>
									<div class="componente">
										<input  value="<?php echo $servicio['descripcion']; ?>" class="textField" type="text" name="descripcion" required="required" />
									</div>
									
									
									<div class="etiqueta">
										<label> Fecha de Creación: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $servicio['fechacreacion']; ?>" class="textField" type="date" name="fecha" required="required" />
									</div>
									
									
									<div style="text-align: center;">
										<input type="submit" value="Guardar Servicio" />
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