<?php
    include_once ('mysql.php');
    include_once ('funciones.php');
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
			
			/*
			 * Conectamos con la base de datos e insertamos
			 */
			$conexion=conectar();
			$estado = getInsert("INSERT INTO producto (usuario_idusuario,nombre,descripcion,ruta,fechacreacion) VALUES
								('$idusuario','".$nombre."','".$descripcion."','".$ruta."','".$fecha."')", $conexion);
			/*
			 * Consultamos el producto que acabmos de insertar
			 */
			$consulta=getConsulta("SELECT idproducto FROM producto ORDER BY idproducto DESC LIMIT 1");
			/*
			 * Extraemos el valor que nos interesa. el idproducto
			 */
			$idproducto = mysql_result ($consulta, 0); 
			/*
			 * Encriptamos el idproducto para enviar por $_GET
			 */
			$idproductoencrypt = encrypt($idproducto,"insertarProductoKey");
			
			$direccion= "../vista/agregarImagenesProducto?idproducto=".$idproductoencrypt;
			echo "<script type='text/javascript'>
			alert('El producto ha sido agregado con exito.'); 
			document.location.href='".$direccion."';
			</script>";
	} else
	{
		
	}
?>