<?php
    session_start();

	if ($_SESSION['idusuario'])
	{
		include_once('imports.php');
		include_once('header.php');
		include_once('menu.php');
		include_once('footer.php');
		include_once('../controlador/funciones.php');
		getImports();
		
		$idusuario=$_GET['idusuario'];
		$usuario=getInformacionUsuario($idusuario);
		?>
		<body>
			<div id="main" class="wrapper">
				<?php 
					getHeader();
					getMenu("administrador");
				?>
			<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
				<section id="gestionar">
					<article >
						<header>
							<h2>Editar Usuario</h2>
						</header>
						<section>
							<div id="formulario_agregar_usuario">
								<form action="../controlador/actualizarUsuario" method="post">
									<div class="etiqueta">
										<label> Usuario: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $usuario['idusuario']; ?>" class="textField" type="number" name="idusuario"  required="required" readonly />
									</div>
									
									<div class="etiqueta">
										<label> Tipo: </label>
									</div>
									<div class="componente">
										<select class="textField" name="tipo"> 
											<option value="1">ADMINISTRADOR</option>
										</select>
										<script>
	                        				var indice='<?php echo $articulo['tipo_idtipo']; ?>';
	                        				document.formulario_agregar_usuario.tipousuario.value=indice;
	                        			</script>
									</div>
									
									
									<div class="etiqueta">
										<label> Nombre: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $usuario['nombre']; ?>" class="textField" type="text" name="nombre"   required="required" />
									</div>
									
									<div class="etiqueta">
										<label> Apellido: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $usuario['apellido']; ?>" class="textField" type="text" name="apellido"  required="required" />
									</div>
									
									<div class="etiqueta">
										<label> Contraseña: </label>
									</div>
									<div class="componente">
										<input value="" class="textField" type="password" name="password"/>
									</div>
																						
									<div class="etiqueta">
										<label> Fecha de Creación: </label>
									</div>
									<div class="componente">
										<input value="<?php echo $usuario['fechacreacion']; ?>" class="textField" type="date" name="fechacreacion" required="required"/>
									</div>

									
									<div style="text-align: center;">
										<input type="submit" value="Guardar Usuario" />
									</div>
								</form>
							</div>		
						</section>
					</article>
				</section>
			
			<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
				<?php
					getFooter();
				?>
			</div>
		</body>
	</html>
	<?php	
	}
	else
	{
		header('location:index.php');
	}
 
?>