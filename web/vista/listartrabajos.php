<?php
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");
	include_once ("../controlador/funciones.php");
	
	$trabajosrealizados=getTrabajosRealizados();
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
					<hgroup>
						<h1>Lista De Trabajos</h1>
					</hgroup>
				</header>
				<section>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<thead>
							<th>Id</th>
							<th>Descripción</th>
							<th>Ruta</th>
							<th>Editar</th>
						</thead>
						<?php
						for ($i=0; $i <sizeof($trabajosrealizados) ; $i++)
						{ 
						?>
							<tr>
								
								<td style="text-align: center;background:#222;  color: #CCC;">
									<?php echo "".$trabajosrealizados[$i]['idtrabajorealizado']; ?>
								</td> 
								<td style="text-align: center;background:#222;  color: #CCC;">
									<?php echo "".$trabajosrealizados[$i]['descripcion']; ?>
								</td> 
								<td style="text-align: center;background:#222;  color: #CCC;">
									<?php echo "".$trabajosrealizados[$i]['ruta']; ?>
								</td>
								<td style="text-align: center;background:#222;  color: #CCC;">
									<a href="<?php echo "editarTrabajo?idtrabajo=".$trabajosrealizados[$i]['idtrabajorealizado']; ?>">Editar</a>
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