<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idproducto=$_GET['idproducto'];		
				
				
			$conexion=conectar();
			getDelete("DELETE FROM producto where idproducto=$idproducto",$conexion);
			
			echo "<script type='text/javascript'>
			alert('El Producto ha sido eliminado con \u00E9xito'); 
			document.location.href='../vista/perfil';
			</script>";
		
	} 
	else
	{
		
	}
?>