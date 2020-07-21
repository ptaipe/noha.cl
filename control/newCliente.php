<?php
	include ("../dataBase/conect.php");

	if ($con->connect_error)
	{
    	die('Error de Conexión (' . $con->connect_errno . ') '. $con->connect_error);
	}

	$rut = $_POST['rut'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$mail = $_POST['mail'];
	$fono = $_POST['fono'];
	$region = $_POST['region'];
	$comuna = $_POST['comunas'];
	$direccion = $_POST['direccion'];
	$pass = $_POST['pass'];

	if (isset($rut))	{
		$sql = "SELECT * FROM Usuario";
		$result=$con->query($sql);
		$rows = $result->fetch_array(MYSQLI_ASSOC);

		if($rut == $rows['rut'] && $mail == $rows['email'])
		{
			echo'<script type="text/javascript">
				    alert("Esta cuenta usuario ya existe");
				    window.location.href="../index.php#login";
				    </script>';
		}else{
			session_start();

			$guardarCliente = "INSERT INTO Usuario (rut, nombre, apellido, email, telefono, region, comuna, direccion, clave) 
			VALUES ('$rut', '$nombre', '$apellido', '$mail', '$fono', '$region', 'comuna', '$direccion', '$pass')";
			

			if( $con->query($guardarCliente) ==TRUE)
			{
				echo'<script type="text/javascript">
				    alert("Felicidades su cuenta a sido creada);
				    window.location.href="index.php#login";
				    </script>';

				header("Location: ../index.php");
			}			
		} 
	}
?>