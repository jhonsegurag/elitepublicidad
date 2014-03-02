<?php
	session_start();
	unset($_SESSION["idusuario"]); 
	unset($_SESSION['nombre']);
	unset($_SESSION['apellido']);
	session_destroy();
	header("Location: ../vista/inicio");
	exit;
?>