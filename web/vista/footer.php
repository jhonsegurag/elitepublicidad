<?php

	
	
    function getFooter()
	{
		include_once '../controlador/funciones.php';
		$productos=getProductos();
		$servicios=getServicios();
		?>	
			<footer>
				<div id="contenedorFooter">
					<div id="panelFooterServiciosHide" class="panelFooter">
						<div class="itemPanelFooter">
							<h3>PRODUCTOS</h3>
							<?php
							
							for ($i=0; $i < sizeof($productos); $i++)
							{ 			
							?>
							<p>
								<a href="infoProducto?idproducto=<?php echo $productos[$i]['idproducto']; ?>"><?php echo $productos[$i]['nombre']; ?></a>
							</p>
							<?php
							}
							?>
						</div>
						
					</div>
					
					<div id="panelFooterNosotrosHide" class="panelFooter">
						<div class="itemPanelFooter">
							<h3>SERVICIOS</h3>
							<?php
							$servicios=getServicios();
							for ($i=0; $i < sizeof($servicios); $i++)
							{ 			
							?>
							<p>
								<a href="infoServicio?idservicio=<?php echo $servicios[$i]['idservicio']; ?>"><?php echo $servicios[$i]['nombre']; ?></a>
							</p>
							<?php
							}
							?>
							
						</div>
					</div>
					
					<div class="panelFooter">
						<div class="itemPanelFooter">
							<h3>CONTACTO</h3>
							<p>
								<div class="imgItemPanelFoter">
									<img src="../../imagenes/contacto/movil.png" />
								</div>
								<div class="textItemPanelFooter">(6) 731 9926 / 320 285 5536 / 320 629 7474</div>	
							</p>
													
							
							
							<p>
								<div class="imgItemPanelFoter">
										<img src="../../imagenes/contacto/ubicacion.png" />	
								</div>
								<a class="enlace" href="https://www.google.com/maps/place/Carrera+21+%23+15-3/@4.53881,-75.67379,3a,90y,186h,90t/dat
									a=!3m4!1e1!3m2!1sGqfN2nvxwwYX65UQj8A59Q!2e0!4m2!3m1!1s0x8e38f5a97708046f:0xd9f7d001201fc8d3!6m1!1e1"
									target="_blank">
									<div class="textItemPanelFooter">Armenia - Quindío</div>
								</a>							
							</p>
							
							<p>
								<div class="imgItemPanelFoter">
									<img src="../../imagenes/contacto/email.png" />
								</div>
								<a class="enlace" href="mailto:info@elitepublicidad.com.co">
									<div class="textItemPanelFooter"> info@elitepublicidad.com.co</div>	
								</a>
							</p>
							
							<p>
								<div class="imgItemPanelFoter">
									<img src="../../imagenes/contacto/web.png" />
								</div>
								<div class="textItemPanelFooter"> www.elitepublicidad.com.co</div>	
							</p>
							<p>
								<div class="imgItemPanelFoter">
									<img src="../../imagenes/contacto/viber.png" />
								</div>
								<div class="textItemPanelFooter"> 320-285-55-36 / 320 629 7474</div>	
							</p>
							<p>
								<div class="imgItemPanelFoter">
									<img src="../../imagenes/contacto/line.png" />
								</div>
								<div class="textItemPanelFooter"> 320-285-55-36 / 320 629 7474</div>	
							</p>
							<p>
								<div class="imgItemPanelFoter">
									<img src="../../imagenes/contacto/whatsapp.png" />
								</div>
								<div class="textItemPanelFooter"> 320-285-55-36 / 320 629 7474</div>	
							</p>
						</div>
					</div>
				</div>
				
				<div id="subFooter">
					<div class="itemSubFooter">
						<p>© 2014 Elite Publicidad. Todos los derechos reservados.</p>
						
					</div>
					<div class="itemSubFooter">
						<div id="logoSubFooter">
							<a href="inicio">
								<img style="width: 100%;" src="../../imagenes/logo.png" />
							</a>
						</div>
					</div>
					
				</div>
		
			</footer>
		<?php
	}
?>