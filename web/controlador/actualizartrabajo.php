<?php
     include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idtrabajorealizado=$_POST['idtrabajorealizado'];
		$descripcion=$_POST['descripcion'];			
		$ruta=$_POST['ruta'];
		$fechacreacion=$_POST['fechacreacion'];
				
			$conexion=conectar();
			getUpdate("UPDATE trabajorealizado SET descripcion='".$descripcion."',ruta='".$ruta."'
			WHERE idtrabajorealizado='$idtrabajorealizado'",$conexion);
			
			echo "<script type='text/javascript'>alert('El Trabajo realizado ha sido actualizado con exito'); document.location.href='../vista/perfil.php';</script>";
		
	} 
	else
	{
		
	}
?>