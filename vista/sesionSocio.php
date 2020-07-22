<?php
	include ("../dataBase/conect.php");
	session_start();

	if (!$_SESSION)
	{
		header("Location: ../index.php");
	}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=no">
		<meta name="google-signin-client_id" content="554781700782-0e42vcdoof308bd61h8tnmioiblhsvko.apps.googleusercontent.com">

		<title>NoHa</title>

		<link rel="shortcut icon" href="../imagenes/logo.ico">
		<link rel="stylesheet" type="text/css" href="../css/tags.css"/>
		<link rel="stylesheet" type="text/css" href="../css/popup.css"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<link rel="stylesheet" type="text/css" href="../css/styleMobile.css"/>
		
		<link rel="stylesheet" type="text/css" href="../css/formularios.css"/>
		<link rel="stylesheet" type="text/css" href="../css/productos.css"/>
		<link rel="stylesheet" type="text/css" href="../css/login.css"/>

		<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1/dist/css/bootstrap.min.css">

		<script src="../js/bodySlider2.js"></script>

	</head>
	<body background="../imagenes/sociosFondo.jpg">		

			<!-- menu de navegacion -->
		<div id="header">
			<h1 style="padding: 0px;"><img src="../imagenes/icono3.png" style="height: 130px;"></h1>
			<ul id="navigation">
				<li>
					<a id="tram" href="#misServicios">Mis Productos</a>
					<img id="ico" src="../imagenes/ventas.png">
				</li>
				<li>
					<a id="new" href="#Mis_ofertas">Solicitudes</a>
					<img id="ico2" src="../imagenes/conf.png" style="height: 50px;margin-left: 181px;margin-top: -72px;">
				</li>
				<li>
					<a id="new" href="#Mis_Datos">Mis Datos</a>
					<img id="ico3" src="../imagenes/misDatos.png" style="height: 50px; width: 47px;margin-top: -69px;margin-left: 185px;">
				</li>								
			</ul>

			<form action="../control/cerrar.php" method="post">
				<table class="table table-sm table-hover table-dark table-borderless" style="
				    background-color: rgba(255, 170, 0);
				    text-align: center;
				    font-weight: 650;
				    text-shadow: 1px 1px 1px rgba(0,0, 0, 0.9);
				    margin-bottom: -6px;
				">
					<tbody>
						<tr><td colspan="2">Bienvenido</td></tr>
						<tr><td>
								<?php
									echo $_SESSION['nombre'];									
								?>							
							</td>
						</tr>						
					</tbody>
				</table>
				<input id="L" style="font-size: 23px;letter-spacing: 1.5px;" type="submit" class="btn btn-primary btn-sm active" name="cerrar" value="Cerrar Sesión">	
			</form>

		</div>

		<!-- Servicios Subidos -->
		<div id="misServicios" class="panel">
			<div class="content">
				<h2>mis productos</h2>
				<div>
					
				</div>				 			
				<a href="#">
					<img id="cerrarMenu" src="../imagenes/cerrar.png">
				</a>
			</div>
		</div>
		<!-- /Servicios Subidos -->

		<!--ofertas subidas -->
		<div id="Mis_ofertas" class="panel">
			<div class="content">
				<h2>Mis nuevas solicitudes de productos</h2>
				<div>
					
				</div>				 			
				<a href="#">
					<img id="cerrarMenu" src="../imagenes/cerrar.png">
				</a>
			</div>
		</div>
		<!--/ofertas subidas -->

		<!-- Datos socio -->
		<div id="Mis_Datos" class="panel">
			<div class="content">
			<h2>Mis Datos</h2>				
			  			
			</div>
			<a href="#">
					<img id="cerrarMenu" src="../imagenes/cerrar.png">
				</a>
		</div>
		<!-- /Datos Socio -->
	</body>
</html>
