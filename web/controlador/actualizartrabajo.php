<?php
     include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idtrabajorealizado=$_POST['idtrabajorealizado'];
		$descripcion=$_POST['descripcion'];			
		$fechacreacion=$_POST['fechacreacion'];
				
			$conexion=conectar();
			getUpdate("UPDATE trabajorealizado SET descripcion='".$descripcion."',fechacreacion='".$fechacreacion."'
			WHERE idtrabajorealizado='$idtrabajorealizado'",$conexion);
			
			echo "<script type='text/javascript'>
			alert('El Trabajo realizado ha sido actualizado con \u00E9xito'); 
			document.location.href='../vista/perfil';
			</script>";
		
	} 
	else
	{
		
	}
?>