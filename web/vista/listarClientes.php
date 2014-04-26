<?php
 session_start();
 if ($_SESSION['idusuario'])
	{
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$clientes=getClientes();
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
						<h1>Lista De Clientes</h1>
					</hgroup>
				</header>
				<section>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<thead>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Eliminar</th>
						</thead>
						<?php
						for ($i=0; $i <sizeof($clientes) ; $i++)
						{ 
						?>
							<tr>
								
								<td >
									<div id="imagenCliente" style="width: 150px; height: 150px; margin: auto;">
										<img style="width: 100%; height: 100%;" src="<?php echo "".$clientes[$i]['ruta']; ?>" />
									</div>
								</td> 
								<td >
									<?php echo "".$clientes[$i]['nombre']; ?>
								</td> 
								<td >
									<a href="#" onclick="validarAccion<?php echo $i; ?>();"><div class="imagenAccion"><img style="width: 50px;" src="../../imagenes/administrador/eliminar.png" /></div></a>
									<script>
										function validarAccion<?php echo $i; ?>()
										{											
											if(confirm("Estas Seguro de eliminar este Cliente"))
											{
												document.location.href= '../controlador/eliminarCliente?idcliente='+'<?php echo $clientes[$i]['idcliente']; ?>';										
											}
											else
											{
												document.location.href= 'listarClientes';
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