<?php
    include_once ('mysql.php');
    include_once ('funciones.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
			$idimagenproductoencrypt = $_GET['idimagenproducto'];
			$idimagenproducto = decrypt($idimagenproductoencrypt,"ModificarImagenesProductosKey");
			$conexion=conectar(); //conecto a la bd
			$rutaImgPrincipal = getQuery("SELECT ruta,producto_idproducto FROM imagenproducto WHERE idimagenproducto=$idimagenproducto"); //obtengo la ruta de la img perteneciente al producto
			$idproductoencrypt= encrypt($rutaImgPrincipal['producto_idproducto'],"listarImagenesProductosKey");
			if(file_exists($rutaImgPrincipal['ruta'])){ //Verifico si existe la imagen perteneciente al producto
				if(unlink($rutaImgPrincipal['ruta'])) { //elimino la imagen perteneciente al producto
					$estado = getDelete("DELETE FROM imagenproducto WHERE idimagenproducto=$idimagenproducto",$conexion); // elimino de la BD
					if($estado){
						echo "<script type='text/javascript'>
						alert('La imagen asociada al producto fue eliminada exitosamente'); 
						document.location.href='../vista/listarImagenesProductos?idproducto=".$idproductoencrypt."';
						</script>";
					} else{
						echo "<script type='text/javascript'>
						alert('Se ha producido un error, porfavor intentelo nuevamente.'); 
						document.location.href='../vista/listarImagenesServicios?idservicio=".$idservicioencrypt."';
						</script>";
					}
				}
			}
		 	else{
				echo "<script type='text/javascript'>
				alert('No se pudo eliminar la imagen asociada al producto porque no existe.'); 
				document.location.href='../vista/listarImagenesProductos?idproducto=".$idproductoencrypt;"';
				</script>";
			} 
	} 
	else
	{
		
	}
?>