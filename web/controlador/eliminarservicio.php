<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idservicio=$_GET['idservicio'];		
				
				
			$conexion=conectar();
			getDelete("DELETE FROM servicio where idservicio=$idservicio",$conexion);
			
			echo "<script type='text/javascript'>
			alert('El Servicio ha sido eliminado con \u00E9xito'); 
			document.location.href='../vista/perfil';
			</script>";
		
	} 
	else
	{
		
	}
?>