<?php
   function getMenu($inicio){
   		
   	if($inicio=="inicio"){
   		getMenuInicio();
   	}
	else if($inicio =="empresa"){
		getMenuEmpresa();
	}
	else if($inicio == "administrador"){
		getMenuAdministrador();
	}
   }	
   
   function getMenuInicio(){
   		?>
   		<nav>
   			<ul>
   				<a href="inicio.php">
					<li>Inicio</li> 
				</a>
				<a href="empresa.php" >
					<li>Empresa</li> 
				</a>
				<a href="productos.php" >
					<li>Productos</li> 
				</a>
				<a href="servicios.php" >
					<li>Servicios</li> 
				</a>
				<a href="contacto.php" >
					<li>Contáctenos</li>
				</a>
		   	</ul>
   			
   		</nav>		
   		<?php
   }	
   
    function getMenuEmpresa(){
   		?>
   		<nav>
   			<ul>
   				<a href="inicio.php">
					<li>Inicio</li> 
				</a>
				<a href="empresa.php" >
					<li>Empresa</li> 
				</a>
				<a href="productos.php" >
					<li>Productos</li> 
				</a>
				<a href="servicios.php" >
					<li>Servicios</li> 
				</a>
				<a href="contacto.php" >
					<li>Contáctenos</li>
				</a>
		   	</ul>
   			
   		</nav>		
   		<?php
   }
	
	function getMenuAdministrador(){
		?>
		<nav>
			<ul>
				<a href="perfil.php">
					<li>Inicio</li>
				</a>
				<a href="agregarUsuario.php">
					<li>Gestionar Administradores</li>
				</a>
				<a href="agregarTrabajo.php">
					<li>Agregar Trabajo Realizado</li>
				</a>
				<a href="agregarProducto.php">
					<li>Agregar Producto</li>
				</a>
				<a href="agregarServicio.php">
					<li>Agregar Servicio</li>
				</a>
			</ul>
		</nav>
		<?php
	}
?>