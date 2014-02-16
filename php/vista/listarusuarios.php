<?php
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$usuarios=getUsuarios();
	getImports();
	
?>
	<body>
		
		<div id="main" class="wrapper">
			<?php 
				getHeader();
				getMenu("administrador");
			?>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->	
			<section id="listar">
			<article>
				<header>
					<h2>Lista De Usuarios</h2>
				</header>
				<section>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Editar</th></tr>
						<?php
						for ($i=0; $i <sizeof($usuarios) ; $i++)
						{ 
						?>
							<tr>
								
								<td style="text-align: center;background:#222;  color: #CCC;">
									<?php echo "".$usuarios[$i]['idusuario']; ?>
								</td> 
								<td style="text-align: center; background:#222;  color: #CCC;">
									<?php echo "".$usuarios[$i]['nombre']; ?>
								</td> 
								<td style="text-align: center; background:#222;  color: #CCC;">
									<?php echo "".$usuarios[$i]['apellido']; ?>
								</td>
								<td style="text-align: center; background:#222;  color: #CCC;">
									<a href="<?php echo "editarUsuario.php?idusuario=".$usuarios[$i]['idusuario']; ?>">Editar</a>
								</td>
																
							</tr>
						<?php	
						}
						?>
						
					</table>	
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