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
							<h2>Agregar Cliente</h2>
						</header>
						<section>
							<div id="formulario_agregar_cliente">
								<form action="../controlador/insertarCliente" method="post" enctype="multipart/form-data">
									<div class="etiqueta">
										<label> Nombre del cliente: </label>
									</div>
									<div class="componente">
										<input class="textField" type="text" name="nombre" placeholder="Nombre del cliente con imagen de 100x100" required="required" />
									</div>
									
									<div class="etiqueta">
										<label> Imágen: </label>
									</div>
									<div class="componente">
										<input class="textField" type="file" name="imagenCliente" maxlength="5" required="required" />
									</div>
									
									<div style="text-align: center;">
										<input type="submit" value="Agregar Cliente" />
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