<?php
	include_once('funciones.php');
	include_once('mysql.php');
	
	session_start();
	$storeFolder = 'productos';   //2
	if ($_SESSION['idusuario'])
	{
		$idproductoencrypt = $_GET['idproducto'];
		$idproducto=decrypt($idproductoencrypt,"insertarProductoKey");
		echo "<script type='text/javascript'>
			alert('".$idproducto."');
			</script>";
			if (!empty($_FILES)) {
			     
			    $tempFile = $_FILES['file']['tmp_name'];          //3             
			      
			    $targetPath = "../../imagenes/".$storeFolder."/";  //4
			     
			    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
			 
			    move_uploaded_file($tempFile,$targetFile); //6
			    
				/*
				 * Conectamos con la base de datos e insertamos
			 	*/
			 	$descripcion= "cualquiera";
				$conexion=conectar();
				$estado = getInsert("INSERT INTO imagenproducto (producto_idproducto,ruta,descripcion) VALUES
									('".$idproducto."','". $targetFile."','".$descripcion."')", $conexion);
					
			}
			echo "<script type='text/javascript'>
			alert('El producto ha sido agregado con exito.'); 
			document.location.href='../vista/perfil.php';
			</script>";
		
	}
?>    