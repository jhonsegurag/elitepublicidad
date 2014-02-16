<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$archivo_imagen = $_FILES['imagenServicio']['name'];
		$nombre=$_POST['nombreServicio'];
		$descripcion=$_POST['descripcionServicio'];
		$fecha=$_POST['fechaServicio'];
		$idusuario = $_SESSION['idusuario'];
		$ruta="";
		
    		if ($archivo_imagen != "") {
        		// guardamos el archivo a la carpeta files
        		$ruta =  "../../imagenes/servicios/".$archivo_imagen;
        		if (copy($_FILES['imagenServicio']['tmp_name'], $ruta)) {
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
			$estado = getInsert("INSERT INTO servicio (usuario_idusuario,nombre,descripcion,ruta,fechacreacion) VALUES
								('$idusuario','".$nombre."','".$descripcion."','".$ruta."','".$fecha."')", $conexion);
								
			echo "<script type='text/javascript'>alert('El servicio ha sido agregado con exito.'); document.location.href='../vista/agregarProducto.php';</script>";
	} else
	{
		
	}
?>