<?php
    
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
									<a href="<?php echo "editarProducto?idproducto=".$productos[$i]['idproducto']; ?>">Editar</a>
								</td>
								<td >
									<a href="#" onclick="validarAccion();">Eliminar</a>
									<script>
										function validarAccion()
										{											
											if(confirm("Estas Seguro de eliminar este producto"))
											{
												document.location.href= '../controlador/eliminarproducto?idproducto='+'<?php echo $productos[$i]['idproducto']; ?>';										
											}
											else
											{
												document.location.href= 'listarproductos';
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