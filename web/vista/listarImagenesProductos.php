<?php
    
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$idproductoencrypt = $_GET['idproducto'];
	$idproducto= decrypt($idproductoencrypt,"listarImagenesProductosKey");
	
	$producto=getInformacionProducto($idproducto);
	$imagenes=getImagenesProducto($idproducto);

	$idproductoencryptaux = encrypt($idproducto,"insertarProductoKey");
	$direccioninsertar= "../vista/agregarImagenesProducto?idproducto=".$idproductoencryptaux;
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
						<h1>Lista de imagenes del producto: <?php echo "".$producto['nombre']; ?></h1>
					</hgroup>
				</header>
				<section>
					<h1>Imagen principal</h1>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<thead>
							<th>Imagen</th>
							<th>Cambiar</th>
						</thead>
							<tr>
								<td >
									<div id="imagenProducto" style="width: 150px; height: 150px; margin: auto;">
										<img style="width: 100%; height: 100%;" src="<?php echo "".$producto['ruta']; ?>" />
									</div>
								</td> 
							
								<td >
									<form action="../controlador/cambiarImagenProducto?orden=1&idproducto=<?php echo $idproductoencrypt ?>" method="post" enctype="multipart/form-data">
										<div class="componente">
											<input class="textField" type="file" name="imagenProducto"  required="required" />
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
					<h1>Imágenes asociadas al producto</h1>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<thead>
							<th>Imágen</th>							
							<th>Cambiar</th>
							<th>Eliminar</th>
							
						</thead>
						<?php
						for ($i=0; $i <sizeof($imagenes) ; $i++)
						{
							$idimagenproductoencrypt[$i] = encrypt($imagenes[$i]['idimagenproducto'],"ModificarImagenesProductosKey"); 
						?>
							<tr>
								<td >
									<div id="imagenProducto" style="width: 50px; height: 50px; margin: auto;">
										<img style="width: 100%; height: 100%;" src="<?php echo "".$imagenes[$i]['ruta']; ?>" />
									</div>
								</td> 
								
								<td >
									<form action="../controlador/cambiarImagenProducto?orden=2&idimagenproducto=<?php echo $idimagenproductoencrypt[$i] ?>" method="post" enctype="multipart/form-data">
										<div class="componenteDark">
											<input class="fileField" type="file" name="imagenSecundariaProducto" required="required" />
										</div>
										<div style="text-align: center; width: 100px; float: left; margin: 5px;">
											<input type="image" value="" src="../../imagenes/administrador/cambiar.png" style="width: 50px;" />
										</div>
									</form>
								</td> 
								<td >
									<a href="#" onclick="validarAccionEliminar<?php echo $i; ?>();"><div class="imagenAccion"><img style="width: 50px;" src="../../imagenes/administrador/eliminar.png" /></div></a>
									<script>
										function validarAccionEliminar<?php echo $i; ?>()
										{											
											if(confirm("Estas Seguro de eliminar este producto"))
											{
												document.location.href= '../controlador/eliminarImagenProducto?idimagenproducto=<?php echo $imagenes[$i]['idimagenproducto']; ?>';										
											}
											else
											{
												document.location.href= 'listarImagenesProductos?idproducto=<?php echo $idproductoencrypt; ?>';
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
?>