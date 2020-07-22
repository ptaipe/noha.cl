<?php
	include ("../dataBase/conect.php");

 	if ($con->connect_error)
	{
    	die('Error de Conexión (' . $con->connect_errno . ') '. $con->connect_error);
	}

	$userSocio = $_POST['usuarioSocio'];
	$rutSocio = $_POST['rutSocio'];
	$passSocio = $_POST['passSocio'];	

	if (isset($userSocio))
	{		
		session_start();

		$sql = "SELECT * FROM Socios WHERE email='$userSocio' AND rut='$rutSocio' AND clave='$passSocio'";
		$result=$con->query($sql);
		$rows = $result->fetch_array(MYSQLI_ASSOC);

		if (!$rows['rut'])
		{
			header("Location: https://noha.cl/#loginSocio");
		}
		else
		{
			if($rows['email']==$userSocio&&$rows['rut']==$rutSocio&&$rows['clave']==$passSocio)  
		 	{
		 		$_SESSION['nombre'] = $rows['nombre'];

				header("Location: ../vista/sesionSocio.php");
			}
			else{
				echo'<script type="text/javascript">
				    alert("Usuario o clave incorrectos, intente nuevamente.");				  
				    </script>';
			}
		}
	}else{

	 	echo 'error2';
	}
?>