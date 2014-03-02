<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idusuario=$_POST['idusuario'];
		$tipo=$_POST['tipousuario'];
		$nombre=$_POST['nombreusuario'];
		$apellido=$_POST['apellidousuario'];
		$password=$_POST['password'];
		$repeatpassword=$_POST['repeatPassword'];
		$fecha=$_POST['fechausuario'];
		
		if($password == $repeatpassword){
			$password = md5($password);
			$conexion=conectar();
			$estado = getInsert("INSERT INTO usuario (idusuario,nombre,apellido,password,fechacreacion,tipo_idtipo) VALUES
			('$idusuario','".$nombre."','".$apellido."','".$password."','".$fecha."','".$tipo."')", $conexion);
			
			if($estado)
			{
				echo "<script type='text/javascript'> 
				alert('El Usuario ha sido agregado con \u00E9xito'); 
				document.location.href='../vista/perfil';
				</script>";
			}
			else {
				echo "<script type='text/javascript'> 
				alert('El Usuario no se ha podido crear'); 
				document.location.href='../vista/agregarUsuario';
				</script>";
			}
		}
		else{
			echo "<script type='text/javascript' charset='utf-8')> 
			alert('No se ha podido crear el usuario. \n
			Las contrase\u00F1as no coinciden, porfavor int\u00E9ntalo de nuevo.'); 
			document.location.href='../vista/agregarUsuario';
			</script>";
		}
	} else
	{
		
	}
?>