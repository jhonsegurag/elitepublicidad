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
				<a href="perfil.php" class="nivel1">
					<li class="nivel1">Inicio</li>
				</a>
				<a href="agregarUsuario.php" class="nivel1">
					<li class="nivel1">Agregar Administradores</li>
				</a>
				<a href="agregarTrabajo.php" class="nivel1">
					<li class="nivel1">Agregar Trabajos Realizados</li>
				</a>
				<a href="agregarProducto.php" class="nivel1">
					<li class="nivel1">Agregar Productos</li>
				</a>
				<a href="agregarServicio.php" class="nivel1">
					<li class="nivel1">Agregar Servicios</li>
				</a>
			</ul>
		</nav>
		<?php
	}
?>