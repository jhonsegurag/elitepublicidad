<?php
    
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		
		$archivo_imagen = $_FILES['imagenTrabajo']['name'];
		$descripcion = $_POST['descripcionTrabajo'];
		$fecha = $_POST['fechaTrabajo'];
		$idusuario = $_SESSION['idusuario'];
		$ruta="";
		
    		if ($archivo_imagen != "") {
        		// guardamos el archivo a la carpeta files
        		$ruta =  "../../imagenes/trabajosRealizados/".$archivo_imagen;
        		if (copy($_FILES['imagenTrabajo']['tmp_name'], $ruta)) {
            		$status = "Archivo subido: <b>".$archivo_imagen."</b>";
        		}
				else
				{
            		$status = "Error al subir el archivo, porfavor int\u00E9ntalo de nuevo.";
        		}
    		} 
    		else
			{
        		$status = "Error al subir el archivo, porfavor int\u00E9ntalo de nuevo.";
    		}		
			
			
			$conexion=conectar();
			getInsert("INSERT INTO trabajorealizado (usuario_idusuario, descripcion, ruta, fechacreacion) 
						VALUES ('$idusuario','".$descripcion."', '".$ruta."','".$fecha."' )" , $conexion);
			
			echo "<script type='text/javascript'>
			alert('El trabajo realizado ha sido agregado con \u00E9xito'); 
			document.location.href='../vista/perfil';</script>";
		
	} 
	else
	{
		
	}
    
?>