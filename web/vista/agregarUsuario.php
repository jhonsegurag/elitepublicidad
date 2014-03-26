<?php
    session_start();

	if ($_SESSION['idusuario'])
	{
		include_once('imports.php');
		include_once('header.php');
		include_once('menu.php');
		include_once('footer.php');
		getImportsAdmin();
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
							<h2>Agregar Usuario</h2>
						</header>
						<section>
							<div id="formulario_agregar_usuario">
								<form action="../controlador/insertarusuario" method="post">
									<div class="etiqueta">
										<label> Usuario: </label>
									</div>
									<div class="componente">
										<input class="textField" type="number" min="0" name="idusuario" placeholder="99999999" required="required" />
									</div>
									
									<div class="etiqueta">
										<label> Tipo: </label>
									</div>
									<div class="componente">
										<select class="textField" name="tipousuario"> 
											<option value="1">ADMINISTRADOR</option>
										</select>
									</div>
									
									
									<div class="etiqueta">
										<label> Nombre: </label>
									</div>
									<div class="componente">
										<input class="textField" type="text" name="nombreusuario"  placeholder="Nombre" required="required" />
									</div>
									
									
									<div class="etiqueta">
										<label> Apellido: </label>
									</div>
									<div class="componente">
										<input class="textField" type="text" name="apellidousuario" placeholder="Apellido" required="required" />
									</div>

									
									<div class="etiqueta">
										<label> Contraseña: </label>
									</div>
									<div class="componente">
										<input class="textField" type="password" name="password" placeholder="password"  required="required"/>
									</div>
									
									
									<div class="etiqueta">
										<label> Repetir Contraseña: </label>
									</div>
									<div class="componente">
										<input class="textField" type="password" id="repeatPassword" placeholder="password" name="repeatPassword" required="required"/>
									</div>
									
									
									<div class="etiqueta">
										<label> Fecha de Creación: </label>
									</div>
									<div class="componente">
										<input class="textField" type="date" placeholder="dd/mm/aaaa" name="fechausuario" required="required"/>
									</div>

									
									<div style="text-align: center;">
										<input type="submit" value="Crear Usuario" />
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