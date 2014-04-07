<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idcliente=$_GET['idcliente'];		
				
				
			$conexion=conectar();
			getDelete("DELETE FROM cliente where idcliente=$idcliente",$conexion);
			
			echo "<script type='text/javascript'>
			alert('El Cliente ha sido eliminado con \u00E9xito'); 
			document.location.href='../vista/listarClientes';
			</script>";
		
	} 
	else
	{
		
	}
?>