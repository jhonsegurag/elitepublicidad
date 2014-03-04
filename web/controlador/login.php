<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_POST['idusuario'])
	{
		$idusuario=$_POST['idusuario'];
		$password=md5($_POST['password']);
		
		$conexion=conectar();
		$resultado=getQuery("SELECT nombre,apellido,password FROM usuario WHERE idusuario='".mysql_real_escape_string($idusuario)."'");
		
		if ($password==$resultado['password'])
		{
			$_SESSION['idusuario']=$idusuario;
			$_SESSION['nombre']=$resultado['nombre'];
			$_SESSION['apellido']=$resultado['apellido'];
			header("location:../vista/perfil");
		}
		else
		{
			echo "<script type='text/javascript'>
			alert('Parece ser que no est\u00E1s registrado en la base de datos'); 
			document.location.href='../vista/administrador';
			</script>";
		}
	} else {
		
	}
?>