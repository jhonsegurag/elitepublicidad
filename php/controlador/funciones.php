<?php
    
    include 'mysql.php';
	
	
	/*
	 * Funcion que permite decodificar informacion en atributo URL
	 */
	function getDecodificar($cadena)
	{
		$decodificada=substr($cadena,9,(strlen($cadena)-1));
		return $decodificada;
	}	
	
	
    /*
	 * -------------------------------------------------------------------------------------------------------------------------------
	 * -------------------------------------------------TRABAJOS REALIZADOS-----------------------------------------------------------
	 * -------------------------------------------------------------------------------------------------------------------------------
	 */
	 
	 /*
	 * Funcion que permite obtener una lista de trabajos realizados
	 */
	
	function getTrabajosRealizados()
	{
		$trabajosrealizados=array();
		$conexion= conectar();
		
		$i=0;
		$resultado=mysql_query("SELECT idtrabajorealizado,descripcion,ruta FROM trabajorealizado", $conexion);
		while ($fila=mysql_fetch_array($resultado))
		{
			$trabajosrealizados[$i]['idtrabajorealizado']=$fila['idtrabajorealizado'];
			$trabajosrealizados[$i]['descripcion']=$fila['descripcion'];
			$trabajosrealizados[$i]['ruta']=$fila['ruta'];
			
			$i++;
		}		
		return $trabajosrealizados;
	}
	
	
	
	/*
	 * -------------------------------------------------------------------------------------------------------------------------------
	 * ----------------------------------------------------------PRODUCTOS------------------------------------------------------------
	 * -------------------------------------------------------------------------------------------------------------------------------
	 */
	
	/*
	 * Funcion que permite obtener una lista de productos
	 */
	
	function getProductos()
	{
		$productos=array();
		$conexion= conectar();
		
		$i=0;
		$resultado=mysql_query("SELECT idproducto,nombre,descripcion,ruta,fechacreacion FROM producto", $conexion);
		while ($fila=mysql_fetch_array($resultado))
		{
			$productos[$i]['idproducto']=$fila['idproducto'];
			$productos[$i]['nombre']=$fila['nombre'];
			$productos[$i]['descripcion']=$fila['descripcion'];
			$productos[$i]['ruta']=$fila['ruta'];
			$productos[$i]['fechacreacion']=$fila['fechacreacion'];
			$i++;
		}		
		return $productos;
	}

	/*
	 * Funcion que permite obtener informacion de un producto
	 */
	function getInformacionProducto($idproducto)
	{
		$producto=array();
		$conexion= conectar();
		
		
		$resultado=mysql_query("SELECT idproducto,nombre,ruta,descripcion FROM servicio WHERE idproducto='".mysql_real_escape_string($idproducto)."'",$conexion);
		$fila=mysql_fetch_array($resultado);
		
			$producto['idproducto']=$fila['idproducto'];
			$producto['nombre']=$fila['nombre'];
			$producto['ruta']=$fila['ruta'];
			$producto['descripcion']=$fila['descripcion'];
			
			
		return $producto;
	}
	
	
	/*
	 * -------------------------------------------------------------------------------------------------------------------------------
	 * --------------------------------------------------------SERVICIOS--------------------------------------------------------------
	 * -------------------------------------------------------------------------------------------------------------------------------
	 */
	
	
	function getServicios()
	{
		$servicios=array();
		$conexion= conectar();
		
		$i=0;
		$resultado=mysql_query("SELECT idservicio,nombre,ruta,descripcion,fechacreacion FROM servicio",$conexion);
		while ($fila=mysql_fetch_array($resultado))
		{
			$servicios[$i]['idservicio']=$fila['idservicio'];
			$servicios[$i]['nombre']=$fila['nombre'];
			$servicios[$i]['ruta']=$fila['ruta'];
			$servicios[$i]['descripcion']=$fila['descripcion'];
			$servicios[$i]['fechacreacion']=$fila['fechacreacion'];
			$i++;
		}
				
		return $servicios;
	}
	
	function getInformacionServicio($idservicio)
	{
		$servicio=array();
		$conexion= conectar();
		
		
		$resultado=mysql_query("SELECT idservicio,nombre,ruta,descripcion FROM servicio WHERE idservicio='".mysql_real_escape_string($idservicio)."'",$conexion);
		$fila=mysql_fetch_array($resultado);
		
			$servicio['idservicio']=$fila['idservicio'];
			$servicio['nombre']=$fila['nombre'];
			$servicio['ruta']=$fila['ruta'];
			$servicio['descripcion']=$fila['descripcion'];
			
			
		return $servicio;
	}
	
	/*
	 * -------------------------------------------------------------------------------------------------------------------------------
	 * ------------------------------------------------------------USUARIOS--------------------------------------------------------------
	 * -------------------------------------------------------------------------------------------------------------------------------
	 */

	function getUsuarios()
	{
		$usuarios=array();
		$conexion= conectar();
		
		$i=0;
		$resultado=mysql_query("SELECT idusuario,nombre,apellido FROM usuario",$conexion);
		while ($fila=mysql_fetch_array($resultado))
		{
			$usuarios[$i]['idusuario']=$fila['idusuario'];
			$usuarios[$i]['nombre']=$fila['nombre'];
			$usuarios[$i]['apellido']=$fila['apellido'];
			$i++;
		}
				
		return $usuarios;
	}
	

	function getInformacionUsuario($idusuario)
	{
		$usuario=array();
		$conexion= conectar();
		
		
		$resultado=mysql_query("SELECT idusuario,tipo_idtipo,nombre,apellido,fechacreacion FROM usuario WHERE idusuario='".mysql_real_escape_string($idusuario)."'",$conexion);
		$fila=mysql_fetch_array($resultado);
		
			$usuario['idusuario']=$fila['idusuario'];
			$usuario['tipo_idtipo']=$fila['tipo_idtipo'];
			$usuario['nombre']=$fila['nombre'];
			$usuario['apellido']=$fila['apellido'];
			$usuario['fechacreacion']=$fila['fechacreacion'];
			
		return $usuario;
	}
	
	
	
	
	
	

	


?>