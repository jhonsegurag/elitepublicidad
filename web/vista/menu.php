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
   				<a href="inicio.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'inicio.php')){
								echo 'seleccionado';
							}?>">Inicio</li> 
				</a>
				<a href="empresa.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'empresa.php')){
								echo 'seleccionado';
							}?>">Empresa</li> 
				</a>
				<a href="productos.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'productos.php')){
								echo 'seleccionado';
							}?>">Productos</li> 
				</a>
				<a href="servicios.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'servicios.php')){
								echo 'seleccionado';
							}?>">Servicios</li> 
				</a>
				<a href="contacto.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'contacto.php')){
								echo 'seleccionado';
							}?>">Contáctenos</li>
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
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'inicio.php')){
								echo 'seleccionado';
							}?>">Inicio</li> 
				</a>
				<a href="empresa.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'empresa.php')){
								echo 'seleccionado';
							}?>">Empresa</li> 
				</a>
				<a href="productos.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'productos.php')){
								echo 'seleccionado';
							}?>">Productos</li> 
				</a>
				<a href="servicios.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'servicios.php')){
								echo 'seleccionado';
							}?>">Servicios</li> 
				</a>
				<a href="contacto.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'contacto.php')){
								echo 'seleccionado';
							}?>">Contáctenos</li>
				</a>
		   	</ul>
   			
   		</nav>		
   		<?php
   }
	
	function getMenuAdministrador(){
		?>
		<nav>
			<ul>
				<a href="perfil.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'perfil.php')){
								echo 'seleccionado';
							}?>">Inicio</li>
				</a>
				<a href="agregarUsuario.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'agregarUsuario.php')){
								echo 'seleccionado';
							}?>">Agregar Administradores</li>
				</a>
				<a href="agregarTrabajo.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'agregarTrabajo.php')){
								echo 'seleccionado';
							}?>">Agregar Trabajos Realizados</li>
				</a>
				<a href="agregarProducto.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'agregarProducto.php')){
								echo 'seleccionado';
							}?>">Agregar Productos</li>
				</a>
				<a href="agregarServicio.php" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'agregarServicio.php')){
								echo 'seleccionado';
							}?>">Agregar Servicios</li>
				</a>
			</ul>
		</nav>
		<?php
	}
?>