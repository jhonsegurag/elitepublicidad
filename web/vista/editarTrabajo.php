<?php 

	session_start();

	if ($_SESSION['idusuario'])
	{
		include_once('imports.php');
		include_once('header.php');
		include_once('menu.php');
		include_once('footer.php');
		include_once ('../controlador/funciones.php');
		getImports();
		
		$idtrabajorealizado=$_GET['idtrabajo'];
		$trabajo=getInformacionTrabajo($idtrabajorealizado);
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
							<h2>Editar Trabajo Realizado</h2>
						</header>
						<section>
							<div id="formulario_agregar_trabajo">
								<form action="../controlador/actualizartrabajo" method="post">
									
									<div class="etiqueta">
										<label> Id: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $trabajo['idtrabajorealizado']; ?>" class="textField" type="text" name="idtrabajorealizado" required="required" readonly />
									</div>
																	
									<div class="etiqueta">
										<label> Descripción: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $trabajo['descripcion']; ?>" class="textField" type="text" name="descripcion" required="required" />
									</div>
									
									<div class="etiqueta">
										<label> Fecha de Creación: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $trabajo['fechacreacion']; ?>" class="textField" type="date" name="fechacreacion" required="required" />
									</div>
									
									
									<div style="text-align: center;">
										<input type="submit" value="Guardar Trabajo Realizado" />
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