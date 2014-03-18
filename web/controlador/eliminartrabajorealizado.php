<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$conexion=conectar();
		$idtrabajorealizado=$_GET['idtrabajorealizado'];		
		$rutaImagen = getQuery("SELECT ruta FROM trabajorealizado WHERE idtrabajorealizado=$idtrabajorealizado");
		if(file_exists($rutaImagen['ruta'])){
			if(! (unlink($rutaImagen['ruta']))){
				echo "<script type='text/javascript'>
				alert('No se pudo eliminar la imagen del trabajo realizado porque no existe.');
				</script>";
			} 
		}	
			
		getDelete("DELETE FROM trabajorealizado WHERE idtrabajorealizado=$idtrabajorealizado",$conexion);	
		echo "<script type='text/javascript'>
		alert('El Trabajo realizado ha sido eliminado con \u00E9xito'); 
		document.location.href='../vista/perfil';
		</script>";
		
	} 
	else
	{
		
	}
?>