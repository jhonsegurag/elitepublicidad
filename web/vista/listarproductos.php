<?php
    
    session_start();

	if ($_SESSION['idusuario'])
	{
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$productos=getProductos();
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
						<h1>Lista De Productos</h1>
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
						for ($i=0; $i <sizeof($productos) ; $i++)
						{ 
						?>
							<tr>
								<td >
									<?php echo "".$productos[$i]['idproducto']; ?>
								</td> 
								<td >
									<?php echo "".$productos[$i]['nombre']; ?>
								</td> 
								<td >
									<?php echo "".$productos[$i]['descripcion']; ?>
								</td>
								<td >
									<?php echo "".$productos[$i]['fechacreacion']; ?>
								</td>
								<td >
									<a href="<?php echo "editarProducto?idproducto=".$productos[$i]['idproducto']; ?>">
										<div class="imagenAccion"><img style="width: 50px;" src="../../imagenes/administrador/editar.png" /></div>
									</a>
								</td>
								
								<td>
									<?php 
										$idproductoencrypt = encrypt($productos[$i]['idproducto'],"listarImagenesProductosKey");
									?>
									<a href="<?php echo "listarImagenesProductos?idproducto=".$idproductoencrypt; ?>"><div class="imagenAccion"><img style="width: 50px;" src="../../imagenes/administrador/listarimagenes.png" /></div></a>
								</td>
								
								<td >
									<a href="#" onclick="validarAccion<?php echo $i; ?>();"><div class="imagenAccion"><img style="width: 50px;" src="../../imagenes/administrador/eliminar.png" /></div></a>
									<script>
										function validarAccion<?php echo $i; ?>()
										{											
											if(confirm("Estas Seguro de eliminar este producto"))
											{
												alert('../controlador/eliminarProducto?idproducto='+'<?php echo $productos[$i]['idproducto']; ?>');
												document.location.href= '../controlador/eliminarProducto?idproducto='+'<?php echo $productos[$i]['idproducto']; ?>';										
											}
											else
											{
												document.location.href= 'listarProductos';
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
		header('location:index.php');
	}
?>