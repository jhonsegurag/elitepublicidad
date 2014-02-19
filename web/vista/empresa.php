<?php
	include_once ("imports.php");
	include_once ("header.php");
	include_once ("menu.php");
	include_once ("footer.php");

	getImports();
?>
	<body>
		<div id="main" class="wrapper">
			<?php 
				getHeader();
				getMenu("empresa");
			?>
	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->		
				<section id="empresa">
					<aside>
						<header>
							<h1>Nuestra Empresa</h1>
						</header>
						<section>
							<li id="quienessomos">Quienes Somos</li>
							<li id="mision">Mision</li>
							<li id="vision">Vision</li>
						</section>
						<footer>
							
						</footer>
					</aside>
					
					
					<article>
						<header>
							<h1>Quienes Somos</h1>
						</header>
						<section>
							<div id="imagenInfoEmpresa">
								<img />
							</div>
							<div id="textoInfoEmpresa">
								
							</div>
							
						</section>
						<footer>
							
						</footer>
					</article>
					
					
					
					<script>
                    	$("#quienessomos").click(function(){
                    		
                    		$("#textoInfoEmpresa").html('<p>Somos una institución prestadora de servicios publicitarios comprometida con la promoción de las empresas del eje cafetero en todas sus etapas.<br><br>Brindamos una atención integral en todos los niveles de complejidad, caracterizada por la calidad humana de un grupo multifuncional de profesionales con prestigio laboral, humano y ético; que responde a las expectativas de nuestros clientes y su entorno.</p>');
                   		});
                    	
                   		$("#mision").click(function(){
                    		
                    		$("#textoInfoEmpresa").html('<p>Elite Publicidad tiene como fin prestar servicios comprometidos que garanticen la satisfación de los clientes y el logro de los objetivos de la organización mediante la mejora continua de los procesos, la eficaz administración de los recursos y el mantenimiento d elos mismos</p>');
                   		});
                   		
                   		$("#vision").click(function(){
                    		
                    		$("#textoInfoEmpresa").html('<p>Para el año 2015 ser una institución líder en el eje cafetero en la promoción de la publicidad en todas sus disciplinas y ser modelo de responsabilidad social y empresaria, con un equipo humano de alta competencia y una cultura de permanente innovación y cercanía con nuestros usuarios.</p>');
                   		});
                    </script>
				</section>






	<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
			<?php
				getFooter();
			?>
		</div>
	</body>
	</html>