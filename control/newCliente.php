<?php
	include ("../dataBase/conect.php");

	if ($con->connect_error)
	{
    	die('Error de Conexión (' . $con->connect_error . ') '. $con->connect_error);
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

	$sql = "SELECT * FROM Usuario WHERE rut='$rut' AND email='$mail'";
	$result=$con->query($sql);
	$rows = $result->fetch_array(MYSQLI_ASSOC);

	$guardarCliente = "INSERT INTO Usuario (rut, nombre, apellido, email, telefono, region, comuna, direccion, clave) 
			VALUES ('$rut', '$nombre', '$apellido', '$mail', '$fono', '$region', '$comuna', '$direccion', '$pass')";

	if($rut == $rows['rut'] && $mail == $rows['email'])
	{
		echo'<script type="text/javascript">
		    alert("Esta cuenta ya existe, intenta nuevamente o registrate nuevamente.");
		    window.location.href="https://noha.cl/#formNewCliente";
		    </script>';
	}
	else{
		if ($con->query($guardarCliente) ==TRUE) {

			echo'<script type="text/javascript">
		    alert("Felicidades su cuenta a sido creada.");
		    window.location.href="https://noha.cl/#login";
		    </script>';			
		}
		else{
			echo '<script type="text/javascript">
		    alert("UPS... Algo salio mal XD, revisa bien los \nque estas ingresando.");
		    window.location.href="https://noha.cl";
		    </script>';
		}
	}	
?>