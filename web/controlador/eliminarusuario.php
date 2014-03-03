<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idusuario=$_GET['idusuario'];		
				
				
			$conexion=conectar();
			getDelete("DELETE FROM usuario where idusuario=$idusuario",$conexion);
			
			echo "<script type='text/javascript'>
			alert('El Usuario ha sido eliminado con \u00E9xito'); 
			document.location.href='../vista/perfil';
			</script>";
		
	} 
	else
	{
		
	}
?>