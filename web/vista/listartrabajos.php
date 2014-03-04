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
						<h1>Lista De Trabajos</h1>
					</hgroup>
				</header>
				<section>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<thead>
							<th>Imágen</th>
							<th>Descripción</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>
						<?php
						for ($i=0; $i <sizeof($trabajosrealizados) ; $i++)
						{ 
						?>
							<tr>
								
								<td >
									<div id="imagenProducto" style="width: 50px; height: 50px; margin: auto;">
										<img style="width: 100%; height: 100%;" src="<?php echo "".$trabajosrealizados[$i]['ruta']; ?>" />
									</div>
								</td> 
								<td >
									<?php echo "".$trabajosrealizados[$i]['descripcion']; ?>
								</td> 
								<td >
									<a href="<?php echo "editarTrabajo?idtrabajo=".$trabajosrealizados[$i]['idtrabajorealizado']; ?>">Editar</a>
								</td>
								<td >
									<a href="#" onclick="validarAccion();">Eliminar</a>
									<script>
										function validarAccion()
										{											
											if(confirm("Estas Seguro de eliminar este Trabajo Realizado"))
											{
												document.location.href= '../controlador/eliminartrabajorealizado?idtrabajorealizado='+'<?php echo $trabajosrealizados[$i]['idtrabajorealizado']; ?>';										
											}
											else
											{
												document.location.href= 'listartrabajos';
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
?>