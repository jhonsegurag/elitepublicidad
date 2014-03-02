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
			
			echo "<script type='text/javascript'>
			alert('El Producto ha sido actualizado con \u00E9xito'); 
			document.location.href='../vista/perfil';
			</script>";
		
	} 
	else
	{
		
	}
?>