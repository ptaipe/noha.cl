<?php 	
	session_start();

	$varsesion = $_SESSION['nombre'];
	if($varsesion == null || $varsesion ='') {
	 	echo "No se puede ingresar de esta manera";	 	
	 	die();
	 } 

	 session_destroy();
	 header("Location: ../index.php")

?>