<?php
	include ("../dataBase/conect.php");

 	if ($con->connect_error)
	{
    	die('Error de Conexión (' . $con->connect_errno . ') '. $con->connect_error);
	}

	$user = $_POST['usuario'];
	$pass = $_POST['pass'];	

	if (isset($user))
	{		
		session_start();

		$sql = "SELECT * FROM Usuario WHERE email='$user' AND clave='$pass'";
		$result=$con->query($sql);
		$rows = $result->fetch_array(MYSQLI_ASSOC);

		if (!$rows['email'])
		{
			header("Location: https://noha.cl/#login");
		}else
		{
			if($rows['email'] == $user && $rows['clave'] == $pass)  
		 	{
		 		$_SESSION['nombre'] = $rows['nombre'];

				header("Location: ../vista/sesion.php");
			}
			else{
				echo'<script type="text/javascript">
				    alert("usuario o clave incorrectos, intente nuevamente.");				  
				    </script>';
			}
		}
	}else{

	 	echo 'error2';
	}
?>