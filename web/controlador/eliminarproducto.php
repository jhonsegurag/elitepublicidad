<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idproducto=$_GET['idproducto'];		
		$conexion=conectar(); //conecto a la bd
		$rutaImgPrincipal = getQuery("SELECT ruta FROM producto WHERE idproducto=$idproducto"); //obtengo la ruta de la img princiopal del producto
		if(file_exists($rutaImgPrincipal['ruta'])){ //Verifico si existe la imgen principal del producto
			if(unlink($rutaImgPrincipal['ruta'])) { //elimino la imagen principal del producto
				
				$rutasImagenes = getConsulta("SELECT idimagenproducto,ruta FROM imagenproducto WHERE producto_idproducto=$idproducto");			
				while ($fila=mysql_fetch_array($rutasImagenes))
				{
					if(file_exists($fila['ruta'])){ //Verifico si existe la imagen asociada al producto
						if(unlink($fila['ruta'])){ // elimino la imagen asociada al producto
							$idimagenproducto = $fila['idimagenproducto'];
							getDelete("DELETE FROM imagenproducto WHERE idimagenproducto=$idimagenproducto",$conexion); // elimino de la BD
						}
						else{
							echo "<script type='text/javascript'>
							alert('No se pudo eliminar una imagen asociada al producto porque no existe.'); 
							</script>";
						}
					}
				}
			
			}
		}
	 	else{
			echo "<script type='text/javascript'>
			alert('No se pudo eliminar la imagen principal del producto porque no existe.'); 
			</script>";
		} 	
			
		getDelete("DELETE FROM producto where idproducto=$idproducto",$conexion); //Elimino el producto de la BD
			
		echo "<script type='text/javascript'>
		alert('El Producto ha sido eliminado con \u00E9xito'); 
		document.location.href='../vista/perfil';
		</script>";
		
	} 
	else
	{
		
	}
?>