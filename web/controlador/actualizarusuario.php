<?php
     include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idusuario=$_POST['idusuario'];		
		$tipo=$_POST['tipo'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$fechacreacion=$_POST['fechacreacion'];	
		$password=$_POST['password'];	
				
		$conexion=conectar();
		if(empty($password)){
			getUpdate(" UPDATE usuario SET nombre='".$nombre."', apellido='".$apellido."',
			fechacreacion='".$fechacreacion."', tipo_idtipo='$tipo' WHERE idusuario='$idusuario' ",$conexion);
		}
		else{
			$password=md5($password);
			getUpdate(" UPDATE usuario SET nombre='".$nombre."', apellido='".$apellido."',
			fechacreacion='".$fechacreacion."', password='".$password."' ,  tipo_idtipo='$tipo' WHERE idusuario='$idusuario' ",$conexion);
		}
			echo "<script type='text/javascript'>
			alert('El Usuario ha sido actualizado con \u00E9xito'); 
			document.location.href='../vista/perfil';
			</script>";
	} 
	else
	{
		
	}
?>