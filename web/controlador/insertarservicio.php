<?php
    include_once ('mysql.php');
	include_once ('funciones.php');
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
            		$status = "Error al subir el archivo, porfavor int\u00E9ntalo de nuevo.";
        		}
    		} 
    		else
			{
        		$status = "Error al subir el archivo, porfavor int\u00E9ntalo de nuevo.";
    		}		
		
			$conexion=conectar();
			$estado = getInsert("INSERT INTO servicio (usuario_idusuario,nombre,descripcion,ruta,fechacreacion) VALUES
								('$idusuario','".$nombre."','".$descripcion."','".$ruta."','".$fecha."')", $conexion);
			
			
			/*
			 * Consultamos el servicio que acabmos de insertar
			 */
			$consulta=getConsulta("SELECT idservicio FROM servicio ORDER BY idservicio DESC LIMIT 1");
			/*
			 * Extraemos el valor que nos interesa. el idservicio
			 */
			$idservicio = mysql_result ($consulta, 0); 
			/*
			 * Encriptamos el idservicio para enviar por $_GET
			 */
			$idservicioencrypt = encrypt($idservicio,"insertarServicioKey");
			
			$direccion= "../vista/agregarImagenesServicio?idservicio=".$idservicioencrypt;
			echo "<script type='text/javascript'>
			alert('El servicio ha sido agregado con \u00E9xito.'); 
			document.location.href='".$direccion."';
			</script>";
			
	} else
	{
		
	}
?>