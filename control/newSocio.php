<?php
	include ("../dataBase/conect.php");

	if ($con->connect_error)
	{
    	die('Error de Conexión (' . $con->connect_errno . ') '. $con->connect_error);
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
	$year = $_POST['year'];
	$pass = $_POST['pass'];

	if (isset($rut)){
		$consulta = "SELECT * FROM Socios";
		$result=$con->query($consulta);
		$rows = $result->fetch_array(MYSQLI_ASSOC);

		if ($rut == $rows['rut'] && $mail == $rows['email']){
			echo'<script type="text/javascript">
				    alert("Esta cuenta de socio ya existe.");
				    window.location.href="../index.php#login";
				    </script>';
		}
		else{
			$newSocio = "INSERT INTO Socios (rut,nombre,apellido,email,telefono,region,comuna,Direccion,vehiculo,patente, modelo,año,clave) VALUES ('$rut','$nombre','$apellido','$mail','$fono','$region','$comuna','$direccion','$auto','$patente','$modelo','$year', '$pass')";

			if( $con->query($newSocio) ==TRUE){
				echo'<script type="text/javascript">
				    alert("Felicidades ahora eres unos de nuestros socios.);
				    window.location.href="index.php#login";
				    </script>';

				header("Location: ../index.php");

			}
		}	

	}


	
?>