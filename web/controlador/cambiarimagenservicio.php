<?php
	include_once('funciones.php');
	include_once('mysql.php');
	
	session_start();
	$storeFolder = 'servicios';   //2
	if ($_SESSION['idusuario'])
	{
		$orden = $_GET['orden'];
		/*
		 * Si orden es 1, cambio la imagen principal del servicio.
		 */
		if($orden == 1){ 
			$idservicioencrypt = $_GET['idservicio'];
			$idservicio=decrypt($idservicioencrypt,"listarImagenesServiciosKey");
			$servicio = getInformacionServicio($idservicio);
			$conexion=conectar(); //conecto a la bd
			if(file_exists($servicio['ruta'])){ //Verifico si existe la imagen del producto
				if(unlink($servicio['ruta'])) { //elimino la imagen del producto
					if (!empty($_FILES)){
					     
					    $tempFile = $_FILES['imagenServicio']['tmp_name'];          //3             
					      
					    $targetPath = "../../imagenes/".$storeFolder."/";  //4
					     
					    $targetFile =  $targetPath. $_FILES['imagenServicio']['name'];  //5
					 
					    move_uploaded_file($tempFile,$targetFile); // Movemos la imagen a la direccion de las imagenes de los servicios
						/*
						 * Actualizamos en la base de datos la nueva ruta de la imagen del producto
					 	 */
					 	getUpdate("UPDATE servicio SET ruta='".$targetFile."' WHERE idservicio='$idservicio' ",$conexion);
						echo "<script type='text/javascript'>
						alert('La im\u00E1gen del servicio ha sido cambiada con \u00E9xito'); 
						document.location.href='../vista/listarImagenesServicios?idservicio=".$idservicioencrypt."';
						</script>";
					}
				}
			}
		 	else{
				echo "<script type='text/javascript'>
				alert('No se pudo cambiar la im\u00E1gen del servicio porque no existe.'); 
				document.location.href='../vista/listarImagenesServicios?idservicio=".$idservicioencrypt."';
				</script>";
			} 	
		}
		/*
		 * Si orden es 2, cambio la imagen secundaria del servicio.
		 */
		else if($orden == 2){
			$idimagenservicioencrypt = $_GET['idimagenservicio'];
			$idimagenservicio = decrypt($idimagenservicioencrypt,"ModificarImagenesServiciosKey");
			$imagenservicio = getInformacionImagenServicio($idimagenservicio);
			$idservicioencrypt = encrypt($imagenservicio['servicio_idservicio'],"listarImagenesServiciosKey");
			$conexion=conectar(); //conecto a la bd
			if(file_exists($imagenservicio['ruta'])){ //Verifico si existe la imagen asociada al servicio
				if(unlink($imagenservicio['ruta'])){ //elimino la imagen asociada al servicio
					if (!empty($_FILES)){
					     
					    $tempFile = $_FILES['imagenSecundariaServicio']['tmp_name'];          //3             
					      
					    $targetPath = "../../imagenes/".$storeFolder."/";  //4
					     
					    $targetFile =  $targetPath. $_FILES['imagenSecundariaServicio']['name'];  //5
					 
					    move_uploaded_file($tempFile,$targetFile); // Movemos la imagen a la direccion de las imagenes de los servicios
						/*
						 * Actualizamos en la base de datos la nueva ruta de la imagen del servicio
					 	 */
					 	getUpdate("UPDATE imagenservicio SET ruta='".$targetFile."' WHERE idimagenservicio='$idimagenservicio' ",$conexion);
						echo "<script type='text/javascript'>
						alert('La im\u00E1gen asociada al servicio ha sido cambiada con \u00E9xito'); 
						document.location.href='../vista/listarImagenesServicios?idservicio=".$idservicioencrypt."';
						</script>";
					}
				}
			}
			else{
				echo "<script type='text/javascript'>
				alert('No se pudo cambiar la im\u00E1gen asociada al servicio porque no existe.'); 
				document.location.href='../vista/listarImagenesServicios?idservicio=".$idservicioencrypt."';
				</script>";
			} 
		}
	}
?>    