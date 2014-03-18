<?php
 session_start();
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
					<hgroup>
						<h1>Lista De Usuarios</h1>
					</hgroup>
				</header>
				<section>
					<table  style="border-radius: 5px; border: 1px solid #222; width: 100%;">
						<thead>
							<th>Id</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>
						<?php
						for ($i=0; $i <sizeof($usuarios) ; $i++)
						{ 
						?>
							<tr>
								
								<td >
									<?php echo "".$usuarios[$i]['idusuario']; ?>
								</td> 
								<td >
									<?php echo "".$usuarios[$i]['nombre']; ?>
								</td> 
								<td >
									<?php echo "".$usuarios[$i]['apellido']; ?>
								</td>
								<?php 
									if($_SESSION['idusuario'] == $usuarios[$i]['idusuario'])
									{
								?>
								<td>
									<a href="<?php echo "editarUsuario?idusuario=".$usuarios[$i]['idusuario']; ?>">Editar</a>
								</td>
								<td >
									<a href="#" onclick="validarAccion();">Eliminar</a>
									<script>
										function validarAccion()
										{											
											if(confirm("Estas Seguro de eliminar este Usuario"))
											{
												document.location.href= '../controlador/eliminarusuario?idusuario='+'<?php echo $usuarios[$i]['idusuario']; ?>';										
											}
											else
											{
												document.location.href= 'listarusuarios';
											}										
										} 
									</script>
								</td>
								<?php 
									}
									else {
										?>
								<td>No posees permisos</td>
								<td>No posees permisos</td>
								<?php
									}
								?>								
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