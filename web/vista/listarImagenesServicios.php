<?php
    session_start();

	if ($_SESSION['idusuario'])
	{
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$idservicioencrypt = $_GET['idservicio'];
	$idservicio= decrypt($idservicioencrypt,"listarImagenesServiciosKey");
	
	$servicio=getInformacionServicio($idservicio);
	$imagenes=getImagenesServicio($idservicio);

	$idproductoencryptaux = encrypt($idservicio,"insertarServicioKey");
	$direccioninsertar= "../vista/agregarImagenesServicio?idservicio=".$idservicioencrypt;
	getImports();
?>
	<body>
		<div id="main" class="wrapper">
			<?php 
				getHeader();
				getMenu("administrador");
			?>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->	
			<section id="listar">
			<article>
				<header>
					<hgroup>
						<h1>Lista de imagenes del servicio: <?php echo "".$servicio['nombre']; ?></h1>
					</hgroup>
				</header>
				<section>
					<h1>Imágen principal</h1>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<thead>
							<th>Imagen</th>
							
							<th>Cambiar</th>
						</thead>
							<tr>
								<td >
									<div id="imagenServicio" style="width: 150px; height: 150px; margin: auto;">
										<img style="width: 100%; height: 100%;" src="<?php echo "".$servicio['ruta']; ?>" />
									</div>
								</td> 
								
								<td >
									<form action="../controlador/cambiarImagenServicio?orden=1&idservicio=<?php echo $idservicioencrypt ?>" method="post" enctype="multipart/form-data">
										<div class="componenteDark">
											<input class="fileField" type="file" name="imagenServicio" maxlength="5" required="required" />
										</div>
										<div style="text-align: center;">
											<input type="image" value="" src="../../imagenes/administrador/cambiar.png" style="width: 50px;" />
										</div>
									</form>
								</td> 
							</tr>
					</table>
				</section>
				
				<section>
					<h1>Imágenes asociadas al servicio</h1>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<thead>
							<th>Imagen</th>
						
							<th>Cambiar</th>
							<th>Eliminar</th>
						</thead>
						<?php
						for ($i=0; $i <sizeof($imagenes) ; $i++)
						{
							$idimagenservicioencrypt[$i] = encrypt($imagenes[$i]['idimagenservicio'],"ModificarImagenesServiciosKey");  
						?>
							<tr>
								<td >
									<div id="imagenProducto" style="width: 50px; height: 50px; margin: auto;">
										<img style="width: 100%; height: 100%;" src="<?php echo "".$imagenes[$i]['ruta']; ?>" />
									</div>
								</td> 
								
								<td >
									<form action="../controlador/cambiarImagenServicio?orden=2&idimagenservicio=<?php echo $idimagenservicioencrypt[$i] ?>" method="post" enctype="multipart/form-data">
										<div class="componenteDark">
											<input class="fileField" type="file" name="imagenSecundariaServicio" maxlength="5" required="required" />
										</div>
										<div style="text-align: center;">
											<input type="image" value="" src="../../imagenes/administrador/cambiar.png" style="width: 50px;" />
										</div>
									</form>
								</td> 
								<td >
									<a href="#" onclick="validarAccion<?php echo $i; ?>();">
										<div class="imagenAccion"><img style="width: 50px;" src="../../imagenes/administrador/eliminar.png" /></div></a>
									</a>
									<script>
										function validarAccion<?php echo $i; ?>()
										{											
											if(confirm("Est\u00E1s seguro de eliminar la imagen"))
											{
												<?php 
													$idimagenservicioencrypt = encrypt($imagenes[$i]['idimagenservicio'],"EliminarImagenesServiciosKey");
												?>
												document.location.href= '../controlador/eliminarImagenServicio?idimagenservicio=<?php echo $imagenes[$i]['idimagenservicio']; ?>';										
											}
											else
											{
												document.location.href= 'listarImagenesServicios?idservicio<?php echo $imagenes[$i]['idimagenservicio']; ?>';
											}										
										} 
									</script>
								</td>
																
							</tr>
						<?php	
						}
						?>
						
					</table>
					<div style="text-align: center; padding: 10px 20px 10px 20px; background: #9C0; width: 200px; margin: 20px auto 20px auto; border-radius:5px; ">
						<a style="color: #333; font-size:16px; text-decoration: none;" href="<?php echo $direccioninsertar ?>"> Agregar más imagenes...</a>
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