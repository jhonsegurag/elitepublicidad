<?php
    
    include_once ('mysql.php');
    session_start();
	
	if ($_POST['idusuario'])
	{
		$idusuario=$_POST['idusuario'];
		$password=($_POST['password']);
		
		$conexion=conectar();
		$resultado=getQuery("SELECT password FROM usuario WHERE idusuario='".mysql_real_escape_string($idusuario)."'");
		
		if ($password==$resultado['password'])
		{
			$_SESSION['idusuario']=$idusuario;
			
			header("location:../vista/perfil.php");
		}
		else
		{
			echo "Parece ser que no estas registrado en la base de datos";
		}
		
		
	} else {
		
	}
	
    
?>