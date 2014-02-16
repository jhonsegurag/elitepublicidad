<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$archivo_imagen = $_FILES['imagenProducto']['name'];
		$nombre=$_POST['nombreProducto'];
		$descripcion=$_POST['descripcionProducto'];
		$fecha=$_POST['fechaProducto'];
		$idusuario = $_SESSION['idusuario'];
		$ruta="";
		
    		if ($archivo_imagen != "") {
        		// guardamos el archivo a la carpeta files
        		$ruta =  "../../imagenes/productos/".$archivo_imagen;
        		if (copy($_FILES['imagenProducto']['tmp_name'], $ruta)) {
            		$status = "Archivo subido: <b>".$archivo_imagen."</b>";
        		}
				else
				{
            		$status = "Error al subir el archivo, porfavor intentelo de nuevo.";
        		}
    		} 
    		else
			{
        		$status = "Error al subir el archivo, porfavor intentelo de nuevo.";
    		}		
		
			$conexion=conectar();
			$estado = getInsert("INSERT INTO producto (usuario_idusuario,nombre,descripcion,ruta,fechacreacion) VALUES
								('$idusuario','".$nombre."','".$descripcion."','".$ruta."','".$fecha."')", $conexion);
								
			echo "<script type='text/javascript'>alert('El producto ha sido agregado con exito.'); document.location.href='../vista/agregarImagenesProducto.php';</script>";
	} else
	{
		
	}
?>