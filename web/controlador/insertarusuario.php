<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idusuario=$_POST['idusuario'];
		$nombre=$_POST['nombreusuario'];
		$apellido=$_POST['apellidousuario'];
		$password=md5($_POST['password']);
		$fecha=$_POST['fechausuario'];
		$tipo=$_POST['tipousuario'];
		
			$conexion=conectar();
			$estado = getInsert("INSERT INTO usuario (idusuario,nombre,apellido,password,fechacreacion,tipo_idtipo) VALUES
			('$idusuario','".$nombre."','".$apellido."','".$password."','".$fecha."','".$tipo."')", $conexion);
			
			if($estado)
			{
			echo "<script type='text/javascript'> alert('El Usuario ha sido agregado con exito'); document.location.href='../vista/agregarUsuario.php';</script>";
			}
			else {
				echo "<script type='text/javascript'> alert('El Usuario no se ha podido crear'); document.location.href='../vista/agregarUsuario.php';</script>";
			}
	} else
	{
		
	}
?>