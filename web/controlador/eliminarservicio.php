<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idservicio=$_GET['idservicio'];		
		$conexion=conectar();
		$rutaImgPrincipal = getQuery("SELECT ruta FROM servicio WHERE idservicio=$idservicio"); //obtengo la ruta de la img princiopal del servicio
		if(file_exists($rutaImgPrincipal['ruta'])){ //Verifico si existe la imgen principal del servicio
			if(unlink($rutaImgPrincipal['ruta'])) { //elimino la imagen principal del servicio
				/*
				 * Obtengo las imagenes asociadas a ese servicio de la BD
				 */
				$rutasImagenes = getConsulta("SELECT idimagenservicio,ruta FROM imagenservicio WHERE servicio_idservicio=$idservicio");			
				while ($fila=mysql_fetch_array($rutasImagenes))
				{
					if(file_exists($fila['ruta'])){ //Verifico si existe la imagen asociada al servicio en el server
						if(unlink($fila['ruta'])){ // elimino la imagen asociada al servicio del server
							$idimagenservicio = $fila['idimagenservicio'];	
							getDelete("DELETE FROM imagenservicio WHERE idimagenservicio=$idimagenservicio",$conexion); // elimino de la BD
						}
						else{
							echo "<script type='text/javascript'>
							alert('No se pudo eliminar una imagen asociada al servicio porque no existe.'); 
							</script>";
						}
					}
				}
			}
		}
	 	else{
			echo "<script type='text/javascript'>
			alert('No se pudo eliminar la imagen principal del servicio porque no existe.'); 
			</script>";
		} 	
		
		getDelete("DELETE FROM servicio where idservicio=$idservicio",$conexion); //elimino el servicio de la BD	
		echo "<script type='text/javascript'>
		alert('El Servicio ha sido eliminado con \u00E9xito'); 
		document.location.href='../vista/perfil';
		</script>";
		
	} 
	else
	{
		
	}
?>