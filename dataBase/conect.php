<?php 
	$host="noha.cl";
	$port="3306";	
	$user="nohacl_ptaipe";
	$password="W8HmYYnu-srE";
	$dbname="nohacl_Noha";

	$con = new mysqli($host, $user, $password, $dbname, $port)
		or die ('No se puede conectar a la base de datos.' . mysqli_connect_error());			
?>