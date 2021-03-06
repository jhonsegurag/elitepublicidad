<?php
session_start();

	if ($_SESSION['idusuario'])
	{
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$servicios=getServicios();
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
						<h1>Lista De Servicios</h1>
					</hgroup>
				</header>
				<section>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<thead>
							<th>Id</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Fecha</th>
							<th>Editar</th>
							<th>Ver Imágenes</th>
							<th>Eliminar</th>
							
						</thead>
						<?php
						for ($i=0; $i <sizeof($servicios) ; $i++)
						{ 
						?>
							<tr>
								<td >
									<?php echo "".$servicios[$i]['idservicio']; ?>
								</td> 
								<td >
									<?php echo "".$servicios[$i]['nombre']; ?>
								</td> 
								<td >
									<?php echo "".$servicios[$i]['descripcion']; ?>
								</td>
								<td >
									<?php echo "".$servicios[$i]['fechacreacion']; ?>
								</td>
								<td >
									<a href="<?php echo "editarServicio?idservicio=".$servicios[$i]['idservicio']; ?>">
										<div class="imagenAccion"><img style="width: 50px;" src="../../imagenes/administrador/editar.png" /></div>
									</a>
								</td>
								<td>
									<?php 
										$idservicioencrypt = encrypt($servicios[$i]['idservicio'],"listarImagenesServiciosKey");
									?>
									<a href="<?php echo "listarImagenesServicios?idservicio=".$idservicioencrypt; ?>">
										<div class="imagenAccion"><img style="width: 50px;" src="../../imagenes/administrador/listarimagenes.png" /></div>
									</a>
								</td>
								<td >
									<a href="#" onclick="validarAccion<?php echo $i; ?>();">
										<div class="imagenAccion"><img style="width: 50px;" src="../../imagenes/administrador/eliminar.png" /></div>
									</a>
									<script>
										function validarAccion<?php echo $i; ?>()
										{											
											if(confirm("Estas Seguro de eliminar este Servicio"))
											{
												alert('../controlador/eliminarServicio?idservicio=<?php echo $servicios[$i]['idservicio']; ?>');
												document.location.href= '../controlador/eliminarServicio?idservicio=<?php echo $servicios[$i]['idservicio']; ?>';										
											}
											else
											{
												document.location.href= 'listarServicios';
											}										
										} 
									</script>
								</td>
										
							</tr>
						<?php	
						}
						?>
						
					</table>	
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
