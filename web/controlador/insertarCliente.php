<?php
    include_once ('mysql.php');
    session_start();
	
	if ($_SESSION['idusuario'])
	{
		$nombre=$_POST['nombre'];
		$archivo_imagen = $_FILES['imagenCliente']['name'];
		$ruta="";
		
    		if ($archivo_imagen != "")
			{
        		// guardamos el archivo a la carpeta files
        		$ruta =  "../../imagenes/clientes/".$archivo_imagen;
        		if (move_uploaded_file($_FILES['imagenCliente']['tmp_name'], $ruta)) {
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
			
			/*
			 * Conectamos con la base de datos e insertamos
			 */
			$conexion=conectar();
			$estado = getInsert("INSERT INTO cliente (nombre,ruta) VALUES('".$nombre."','".$ruta."')", $conexion);
			
			if($estado)
			{
				echo "<script type='text/javascript'> 
				alert('El Cliente ha sido agregado con \u00E9xito'); 
				document.location.href='../vista/perfil';
				</script>";
			}
			else {
				echo "<script type='text/javascript'> 
				alert('El Cliente no se ha podido agregar'); 
				document.location.href='../vista/agregarCliente';
				</script>";
			}
	} else
		{
		
		}
?>