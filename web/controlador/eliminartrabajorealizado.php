<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idtrabajorealizado=$_GET['idtrabajorealizado'];		
				
				
			$conexion=conectar();
			getDelete("DELETE FROM trabajorealizado WHERE idtrabajorealizado=$idtrabajorealizado",$conexion);
			
			echo "<script type='text/javascript'>
			alert('El Trabajo realizado ha sido eliminado con \u00E9xito'); 
			document.location.href='../vista/perfil';
			</script>";
		
	} 
	else
	{
		
	}
?>