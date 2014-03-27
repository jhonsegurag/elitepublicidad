<?php
    include_once ('mysql.php');
    include_once ('funciones.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
			// $idimagenservicioencrypt = $_GET['idimagenservicio'];
			// $idimagenservicio = decrypt($idimagenservicioencrypt,"ModificarImagenesServiciosKey");
			$idimagenservicio= $_GET['idimagenservicio'];
			$conexion=conectar(); //conecto a la bd
			$rutaImgPrincipal = getQuery("SELECT ruta,servicio_idservicio FROM imagenservicio WHERE idimagenservicio=$idimagenservicio"); //obtengo la ruta de la img perteneciente al producto
			$idservicioencrypt= encrypt($rutaImgPrincipal['servicio_idservicio'],"listarImagenesServiciosKey");
			if(file_exists($rutaImgPrincipal['ruta'])){ //Verifico si existe la imagen perteneciente al servicio
				if(unlink($rutaImgPrincipal['ruta'])) { //elimino la imagen perteneciente al servicio
					$estado = getDelete("DELETE FROM imagenservicio WHERE idimagenservicio=$idimagenservicio",$conexion); // elimino de la BD
					if($estado){
						echo "<script type='text/javascript'>
						alert('La imagen asociada al servicio fue eliminada exitosamente'); 
						document.location.href='../vista/listarImagenesServicios?idservicio=".$idservicioencrypt."';
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
				alert('No se pudo eliminar la imagen asociada al servicio porque no existe.'); 
				document.location.href='../vista/listarImagenesServicios?idservicio=".$idservicioencrypt;"';
				</script>";
			} 
	} 
	else
	{
		
	}
?>