<?php
     include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idservicio=$_POST['idservicio'];			
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
				
			$conexion=conectar();
			getUpdate("UPDATE servicio SET nombre='".$nombre."',descripcion='".$descripcion."'
			WHERE idservicio='$idservicio'",$conexion);
			
			echo "<script type='text/javascript'>alert('El Servicio ha sido actualizado con exito'); document.location.href='../vista/perfil.php';</script>";
		
	} 
	else
	{
		
	}
?>