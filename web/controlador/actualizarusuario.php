<?php
     include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idusuario=$_POST['idusuario'];		
		$tipousuario=$_POST['tipousuario'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$fechacreacion=$_POST['fechacreacion'];		
				
			$conexion=conectar();
			getUpdate("UPDATE usuario SET tipo_idtipo='$tipousuario' nombre='".$nombre."', apellido='".$apellido."'
			,fechacreacion='".$fechacreacion."' WHERE idusuario='$idusuario' ",$conexion);
			
			echo "<script type='text/javascript'>alert('El Usuario ha sido actualizado con exito'); document.location.href='../vista/perfil.php';</script>";
		
	} 
	else
	{
		
	}
?>