<?php
	include ("../dataBase/conect.php");

	if ($con->connect_error)
	{
    	die('Error de Conexión (' . $con->connect_error . ') '. $con->connect_error);
	}

	$rut = $_POST['rut'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$mail = $_POST['email'];
	$fono = $_POST['fono'];
	$region = $_POST['region'];
	$comuna = $_POST['comunas'];
	$direccion = $_POST['direccion'];
	$auto = $_POST['auto'];
	$patente = $_POST['patente'];
	$modelo = $_POST['modelo'];
	$year = date($_POST['year']);
	$pass = $_POST['pass'];

	$consulta = "SELECT * FROM Socios WHERE rut='$rut' AND email='$mail'";
	$result=$con->query($consulta);
	$rows = $result->fetch_array(MYSQLI_ASSOC);

	$nuevoSocio = "INSERT INTO Socios (rut,nombre,apellido,email,telefono,region,comuna,Direccion,vehiculo,patente, modelo,año,clave) VALUES ('$rut','$nombre','$apellido','$mail','$fono','$region','$comuna','$direccion','$auto','$patente','$modelo','$year', '$pass')";

	
	if ($rut == $rows['rut'] && $mail == $rows['email']){
		echo'<script type="text/javascript">
		    alert("Esta cuenta de socio ya existe,\n intenta nuevamente o registrate nuevamente.");
		    window.location.href="https://noha.cl/#newPart";
		    </script>';
	}else{
		if( $con->query($nuevoSocio) == TRUE)
		{
			echo'<script type="text/javascript">
		    alert("Felicidades ahora eres unos \nde nuestros nuevos socios.");
		    window.location.href="https://noha.cl";
		    </script>';
		}else{
			echo'<script type="text/javascript">
		    alert("UPS... Algo salio mal XD, revisa bien los \nque estas ingresando.");
		    window.location.href="https://noha.cl";
		    </script>';
		}
	}
?>