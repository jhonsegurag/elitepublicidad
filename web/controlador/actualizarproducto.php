<?php
     include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idproducto=$_POST['idproducto'];		
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		$fechacreacion=$_POST['fechacreacion'];		
				
			$conexion=conectar();
			getUpdate(" UPDATE producto SET nombre='".$nombre."', descripcion='".$descripcion."',
			fechacreacion='".$fechacreacion."' WHERE idproducto='$idproducto' ",$conexion);
			
			echo "<script type='text/javascript'>alert('El Producto ha sido actualizado con exito'); document.location.href='../vista/perfil.php';</script>";
		
	} 
	else
	{
		
	}
?>