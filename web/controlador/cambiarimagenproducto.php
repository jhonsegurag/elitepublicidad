<?php
	include_once('funciones.php');
	include_once('mysql.php');
	
	session_start();
	$storeFolder = 'productos';   //2
	if ($_SESSION['idusuario'])
	{
		$orden = $_GET['orden'];
		/*
		 * Si orden es 1, cambio la imagen principal del producto.
		 */
		if($orden == 1){ 
			$idproductoencrypt = $_GET['idproducto'];
			$idproducto=decrypt($idproductoencrypt,"listarImagenesProductosKey");
			$producto = getInformacionProducto($idproducto);
			$conexion=conectar(); //conecto a la bd
			if(file_exists($producto['ruta'])){ //Verifico si existe la imagen del producto
				if(unlink($producto['ruta'])) { //elimino la imagen del producto
					if (!empty($_FILES)){
					     
					    $tempFile = $_FILES['imagenProducto']['tmp_name'];          //3             
					      
					    $targetPath = "../../imagenes/".$storeFolder."/";  //4
					     
					    $targetFile =  $targetPath. $_FILES['imagenProducto']['name'];  //5
					 
					    move_uploaded_file($tempFile,$targetFile); // Movemos la imagen a la direccion de las imagenes de los productos
						/*
						 * Actualizamos en la base de datos la nueva ruta de la imagen del producto
					 	 */
					 	getUpdate("UPDATE producto SET ruta='".$targetFile."' WHERE idproducto='$idproducto' ",$conexion);
						echo "<script type='text/javascript'>
						alert('La im\u00E1gen del producto ha sido cambiada con \u00E9xito'); 
						document.location.href='../vista/listarImagenesProductos?idproducto=".$idproductoencrypt."';
						</script>";
					}
				}
			}
		 	else{
				echo "<script type='text/javascript'>
				alert('No se pudo cambiar la im\u00E1gen del producto porque no existe.'); 
				document.location.href='../vista/listarImagenesProductos?idproducto=".$idproductoencrypt."';
				</script>";
			} 	
		}
		/*
		 * Si orden es 2, cambio la imagen secundaria del producto.
		 */
		else if($orden == 2){
			$idimagenproductoencrypt = $_GET['idimagenproducto'];
			$idimagenproducto = decrypt($idimagenproductoencrypt,"ModificarImagenesProductosKey");
			$imagenproducto = getInformacionImagenProducto($idimagenproducto);
			$idproductoencrypt = encrypt($imagenproducto['producto_idproducto'],"listarImagenesProductosKey");
			$conexion=conectar(); //conecto a la bd
			if(file_exists($imagenproducto['ruta'])){ //Verifico si existe la imagen asociada al producto
				if(unlink($imagenproducto['ruta'])){ //elimino la imagen asociada al producto
					if (!empty($_FILES)){
					     
					    $tempFile = $_FILES['imagenSecundariaProducto']['tmp_name'];          //3             
					      
					    $targetPath = "../../imagenes/".$storeFolder."/";  //4
					     
					    $targetFile =  $targetPath. $_FILES['imagenSecundariaProducto']['name'];  //5
					 
					    move_uploaded_file($tempFile,$targetFile); // Movemos la imagen a la direccion de las imagenes de los productos
						/*
						 * Actualizamos en la base de datos la nueva ruta de la imagen del producto
					 	 */
					 	getUpdate("UPDATE imagenproducto SET ruta='".$targetFile."' WHERE idimagenproducto='$idimagenproducto' ",$conexion);
						echo "<script type='text/javascript'>
						alert('La im\u00E1gen asociada al producto ha sido cambiada con \u00E9xito'); 
						document.location.href='../vista/listarImagenesProductos?idproducto=".$idproductoencrypt."';
						</script>";
					}
				}
			}
			else{
				echo "<script type='text/javascript'>
				alert('No se pudo cambiar la im\u00E1gen asociada al producto porque no existe.'); 
				document.location.href='../vista/listarImagenesProductos?idproducto=".$idproductoencrypt."';
				</script>";
			} 
		}
	}
?>    