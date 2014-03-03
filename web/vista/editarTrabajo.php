<?php 

	session_start();

	if ($_SESSION['idusuario'])
	{
		include_once('imports.php');
		include_once('header.php');
		include_once('menu.php');
		include_once('footer.php');
		include_once ('../controlador/funciones.php');
		getImportsAdmin();
		
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
										<textarea id="texto" name="descripcion"  class="textArea" required="required">
	                						<?php echo $trabajo['descripcion']; ?>
	            						</textarea>
	            						<script>
		    								CKEDITOR.replace( 'texto',{
		                						filebrowserBrowseUrl : '../../libs/ckeditor/filemanager/index.php'
		                					} );
										</script>	
										
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