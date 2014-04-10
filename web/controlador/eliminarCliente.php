<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$idcliente=$_GET['idcliente'];		
		$conexion=conectar(); //conecto a la bd
		$rutaImgPrincipal = getQuery("SELECT ruta FROM cliente WHERE idcliente=$idcliente"); //obtengo la ruta de la img del cliente
		if(file_exists($rutaImgPrincipal['ruta'])){ //Verifico si existe la imagen del cliente.
			if(! (unlink($rutaImgPrincipal['ruta']))) { //elimino la imagen del cliente
				echo "<script type='text/javascript'>
				alert('No se pudo eliminar la imagen el cliente porque no existe.');
				</script>";
			}
		}
	 	else{
			echo "<script type='text/javascript'>
				alert('No se pudo eliminar la imagen el cliente porque no existe.');
				</script>";
		} 
				
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