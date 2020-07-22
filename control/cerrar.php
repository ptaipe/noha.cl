<?php 	
	session_start();

	if ($_SESSION['nombre'])
	{		
		session_destroy();
		header("Location: https://noha.cl/");
		
	}else{
		header("Location: https://noha.cl/");
	}

?>