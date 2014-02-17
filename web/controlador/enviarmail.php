<?php

/**
 * @author Jhon Segura
 * @copyright 2013
 */


    $nombreContacto=$_POST['nombre'];
   	$telefonoContacto=$_POST['telefono'];
    $emailContacto=$_POST['email'];
    $mensajeContacto=$_POST['mensaje'];


    /*
	=====================================================================================================
    Destinatarios
	=====================================================================================================
	*/
    $usuariosDestino= "elitepublicidad12@gmail.com".","."";
	
    /*
	=====================================================================================================
    Titulo Email
	=====================================================================================================
	*/
    $tituloEmail = "Elite Publicidad";


	/*
	=====================================================================================================
    Cuerpo mensaje
	=====================================================================================================
	*/
    $contenidoEmail="
     <html lang='es'>
		<head>
                                
		</head>
		
		<body>
			
			<section style='width: 80%; margin: auto;'>
				<article >
					<header>
						<h2>Informacion de cliente</h2>
					</header>
					<section>
						<p>
							<table style='width: 80%; margin: auto;'>
								<tr>
									<td style='color: #555;'>Nombre Apellido: </td><td>".$nombreContacto."</td>
								</tr>
								<tr>
									<td style='color: #555;'>Telefono: </td><td>".$telefonoContacto."</td>
								</tr>
								<tr>
									<td style='color: #555;'>Email: </td><td>".$emailContacto."</td>
								</tr>
								<tr>
									<td style='color: #555;'>Mensaje: </td><td>".$mensajeContacto."</td>
								</tr>
							</table>
						</p>
						
					</section>
					<footer>
						<h3>Elite Publicidad</h3>
					</footer>
				</article>
			</section>
		</body>
    </html>
	";

	
    
	
	
    /*
	=====================================================================================================
    Fijar Parametros Encabezado
	=====================================================================================================
	*/
    $encabezado  = 'MIME-Version: 1.0' . "\r\n";
    $encabezado.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    /*
	=====================================================================================================
    Encabezado adicional
	=====================================================================================================
	*/
    $nombreEmpresa="Elite Publicidad";
    $email="spyriadeveloper@gmail.com";
    $encabezado .='From:'.$nombreEmpresa.' <'.$email.'>';



    /*
	=====================================================================================================
    Funcion para enviar el mail
	=====================================================================================================
	*/
    $respuesta=mail($usuariosDestino, $tituloEmail, $contenidoEmail, $encabezado);
    
    if ( $respuesta == true)
	{
    	echo "<script type='text/javascript'>alert('El formulario ha sido enviado correctamente. Gracias'); document.location.href='../vista/contacto.php';</script>";
	}
    else
	{
        echo "<script type='text/javascript'>alert('Error al enviar el formulario. Por favor intente de nuevo. Gracias'); document.location.href='../vista/contacto.php';</script>";
		
    }

?>


