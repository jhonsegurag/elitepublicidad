<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idarticulo=$_GET['idarticulo'];
		$conexion=conectar();
		getUpdate("UPDATE articulo SET estado_idestado=2 WHERE idarticulo=".$idarticulo."",$conexion);
			
		echo "<script type='text/javascript'>alert('El Articulo ha sido publicado en la pagina principal con exito'); document.location.href='../vista/listararticulos.php';</script>";
		
	} else {
		
	}
?>