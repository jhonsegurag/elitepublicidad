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
   				<a href="inicio" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'inicio')){
								echo 'seleccionado';
							}?>">Inicio</li> 
				</a>
				<a href="empresa" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'empresa')){
								echo 'seleccionado';
							}?>">Empresa</li> 
				</a>
				<a href="productos" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'productos')){
								echo 'seleccionado';
							}?>">Productos</li> 
				</a>
				<a href="servicios" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'servicios')){
								echo 'seleccionado';
							}?>">Servicios</li> 
				</a>
				<a href="contacto" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'contacto')){
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
   				<a href="inicio">
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'inicio')){
								echo 'seleccionado';
							}?>">Inicio</li> 
				</a>
				<a href="empresa" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'empresa')){
								echo 'seleccionado';
							}?>">Empresa</li> 
				</a>
				<a href="productos" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'productos')){
								echo 'seleccionado';
							}?>">Productos</li> 
				</a>
				<a href="servicios" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'servicios')){
								echo 'seleccionado';
							}?>">Servicios</li> 
				</a>
				<a href="contacto" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'contacto')){
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
				<a href="perfil" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'perfil')){
								echo 'seleccionado';
							}?>">Inicio</li>
				</a>
				<a href="agregarUsuario" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'agregarUsuario')){
								echo 'seleccionado';
							}?>">Agregar Administradores</li>
				</a>
				<a href="agregarTrabajo" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'agregarTrabajo')){
								echo 'seleccionado';
							}?>">Agregar Trabajos Realizados</li>
				</a>
				<a href="agregarProducto" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'agregarProducto')){
								echo 'seleccionado';
							}?>">Agregar Productos</li>
				</a>
				<a href="agregarServicio" >
					<li id="<?php 
							if(strstr($_SERVER['REQUEST_URI'], 'agregarServicio')){
								echo 'seleccionado';
							}?>">Agregar Servicios</li>
				</a>
				<a href="../controlador/cerrarSesion"> 
					<li>Cerrar Sesión</li>
				</a>
			</ul>
		</nav>
		<?php
	}
?>