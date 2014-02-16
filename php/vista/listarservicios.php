<?php
    
    
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$servicios=getServicios();
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
					<h1>Lista De Servicios</h1>
				</header>
				<section>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<tr><th>Id</th><th>Nombre</th><th>Descripcion</th><th>Fecha</th><th>Editar</th></tr>
						<?php
						for ($i=0; $i <sizeof($servicios) ; $i++)
						{ 
						?>
							<tr>
								
								<td style="text-align: center;background:#222;  color: #CCC;">
									<?php echo "".$servicios[$i]['idservicio']; ?>
								</td> 
								<td style="text-align: center;background:#222;  color: #CCC;">
									<?php echo "".$servicios[$i]['nombre']; ?>
								</td> 
								<td style="text-align: center;background:#222;  color: #CCC;">
									<?php echo "".$servicios[$i]['descripcion']; ?>
								</td>
								<td style="text-align: center;background:#222;  color: #CCC;">
									<?php echo "".$servicios[$i]['fechacreacion']; ?>
								</td>
								<td style="text-align: center;background:#222;  color: #CCC;">
									<a href="<?php echo "".$servicios[$i]['idservicio']; ?>">Editar</a>
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
?>
?>