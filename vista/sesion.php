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

	</head>
	<body >		
			<!-- menu de navegacion -->
		<div id="header">
			<h1>Nosotros lo hacemos por ti</h1>
			<ul id="navigation">
				<li>
					<a id="tram" href="#tramite">Servicios</a>
					<img id="ico" src="../imagenes/servicios.png">
				</li>
				<li>
					<a id="new" href="#Mis_Compras">Mis Compras</a>
					<img id="ico2" src="../imagenes/iconoCliente.png">
				</li>
				<li>
					<a id="new" href="#Mis_Datos">Mis Datos</a>
					<img id="ico3" src="../imagenes/iconoSocios.png">
				</li>								
			</ul>


			<form action="../index.php" method="post">
				<table class="table table-sm table-hover table-dark table-borderless" style="
				    background-color: rgba(255, 170, 0);
				    text-align: center;
				    font-weight: 650;
				    text-shadow: 1px 1px 1px rgba(0,0, 0, 0.9);
				    margin-bottom: -6px;
				">
					<tbody>
						<tr>
							<td>Bienvenido</td>
							<td>
								<?php
									echo $_SESSION['nombre']
								?>							
							</td>
						</tr>
					</tbody>
				</table>
				<input id="L" style="font-size: 23px;letter-spacing: 1.5px;" type="submit" class="btn btn-primary btn-sm active" name="cerrar" value="Cerrar Sesión">	
			</form>

		</div>

		<!-- Menu Servicios -->
		<div id="tramite" class="panel">
			<div id="tablaMenu">
				<table class="table table-sm table-borderless">
					<tr>
						<td>
							<div id="conf2">
								<a href="#revisiónTec" >
									<img id="menu2" src="../imagenes/menuRevison.jpg" >
								</a>
								<label id="popup1">revision TECNICA</label>
							</div>
						</td>
						<td>
							<div id="conf3">
								<a href="#encargosEnvios">
									<img id="menu3" src="../imagenes/menuEncargoEnvios.jpg">
								</a>
								<label id="popup2">ENVIO ENCOMIENDAS</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div id="conf4">
								<a href="#canastas">
									<img id="menu4" src="../imagenes/compras.jpg">
								</a>
								<label id="popup3">compra canastas</label>
							</div>
						</td>
						<td>
							<div id="conf1">
								<a href="#comprasVarias">
									<img id="menu1" src="../imagenes/comprasVarias2.jpg">
								</a>
								<label id="popup4">COMPRA REGALOS</label>
							</div>
						</td>
					</tr>
				</table>
				<a href="#">
					<img id="cerrarMenu" src="../imagenes/cerrar.png">
				</a>
			</div>
		</div>
		<!-- /Menu Servicios -->

		<!--Registro de clientes -->
		<div id="Mis_Compras" class="panel">
			<div class="content">
				<h2>Mis Compras</h2>
				  <form action="" id="clte">
				  	<table class="table table-sm table-borderless table-responsive-sm" id="tablaClientes">
						
				  	</table>
				  </form>
				</div>
			</div>
		</div>
		<!--/Registro de clientes -->

		<!-- Registro socio -->
		<div id="Mis_Datos" class="panel">
			<div class="content">
			<h2>Mis Datos</h2>				
			  <form action="#" id="clte">
			  	<table class="table table-borderless table-sm" id="tablaClientes">
					
			  	</table>
			  </form>				
			</div>
		</div>
		<!-- /Registro Socio -->
		

		<!--Menu Revision Tecnica -->
		<div id="revisiónTec" class="panel">
			<div class="content">
				  <form action="">
				  	<table class="table table-borderless table-sm" id="tablePedidoRT">
				  		<tr>
				  			<td colspan="2">
				  				<h2>Reserva Revision Tecnica</h2>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td >
				  				<div class="input-group">
								  <div class="input-group-prepend">
								    <span class="form-control">Rut</span>
								  </div>
									<input type="text" class="form-control" name="" id="" maxlength="8" placeholder="ejemplo: 12345678" required/>
								</div>
				  			</td>
				  			<td>
				  				<input type="text" class="form-control" name="" id="" maxlength="6" placeholder="Patente sin guión ej: ffgg52" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control" name="" id="" placeholder="Nombre" required/>
				  			</td>
				  			<td>
				  				<input type="text" class="form-control" name="" id="" maxlength="4" placeholder="Año de Vehículo" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control" name="" id="" placeholder="Apellido" required/>
				  			</td>
				  			<td >
				  				<input type="text" class="form-control" name="" id="" placeholder="Marca de auto" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control" name="" id="" placeholder="Dirección" required/>
				  			</td>
				  			<td>
								<div class="container">
								    <label class="custom-file" id="customFile">
								        <input type="file" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp">
								        <span class="custom-file-control form-control-file"></span>
								    </label>
								</div>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control" name="" id="" placeholder="Telefóno" required/>
				  			</td>
				  			<td>
				  				<input type="text" class="form-control" name="" id="" placeholder="Planta de revisión técnica" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control" name="" id="" placeholder="Correo electrónico" required/>
				  			</td>
				  			<td>
				  				<input type="date" class="form-control" name="" placeholder="Fecha Inicio">
				  			</td>
				  		</tr>
				  		<tr>
				  			<td colspan="2">
				  				<center>
				  					<a href="#" id="" class="btn btn-info btn-sm active" role="button">Guardar</a>
				  				</center>
				  			</td>
				  		</tr>
				  	</table>
				  </form>

				<a href="#tramite" id="btnvolver">
					<img id="volverrt" src="../imagenes/volver.png">
				</a>

				<a href="#" id="btnvolver">
					<img id="cerrar" src="../imagenes/cerrar.png">
				</a>
			</div>
		</div>
		<!--/Menu Revision Tecnica -->

		<!--Menu Envio Encomiendas -->
		<div id="encargosEnvios" class="panel">
			<div class="content">
				<h2>Encargos o envios</h2>
				<div id="frmDelivery">
					<table class="table table-borderless table-sm" id="tableEnvios1">
				  		<tbody>
					  		<tr>
					  			<td><p id="subtitle">Remitente</p></td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<div class="input-group">
									  <div class="input-group-prepend">
									    <span class="form-control">Rut</span>
									  </div>
										<input type="text" class="form-control" name="rutCli" id="" maxlength="9" placeholder="ejemplo: 123456789 - sin guión" required="">
									</div>
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="nombreCli" id="" placeholder="Nombre" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="apellidoCli" id="" placeholder="Apellido" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="DirecciónCli" id="" placeholder="Dirección" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="telefonoCli" id="" placeholder="Telefóno" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="emailCli" id="" placeholder="Correo electrónico" required="">
					  			</td>
					  		</tr>
					  	</tbody>
				  </table>
				  <table class="table table-borderless table-sm" id="tableEnvios2">
				  		<tbody>
				  			<tr>
					  			<td><p id="subtitle">Destinatario</p></td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<div class="input-group">
									  <div class="input-group-prepend">
									    <span class="form-control">Rut</span>
									  </div>
										<input type="text" class="form-control" name="" id="" maxlength="9" placeholder="ejemplo: 123456789 - sin guión" required="">
									</div>
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="" id="" placeholder="Nombre" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="" id="" placeholder="Apellido" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="" id="" placeholder="Dirección" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="" id="" placeholder="Telefóno" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" name="" id="" placeholder="Correo electrónico" required="">
					  			</td>
					  		</tr>
					  	</tbody>
				  </table>
				  <table id="tableEnvios3">
				  	<tr>
				  		<td><label id="subtitle">¿Cuanto Pesa?</label></td>

				  		<td><input type="text" class="form-control" id="" placeholder="Kilogramos"></td>

				  		<td colspan="3">
				  			<select class="form-control">
				  				<option>TIPO DE CAJA</option>
				  				<option>CAJA CHICA</option>
				  				<option>CAJA NORMAL</option>
				  				<option>CAJA MEDIANA</option>
				  				<option>CAJA GRANDE</option>
				  			</select>
				  		</td>
				  	</tr>
				  	<tr>
				  		<td >
				  			<label id="subtitle">¿Cuanto Mide?</label>
				  		</td>
				  		<td>
				  			<input type="text" class="form-control" id="" placeholder="Largo en cm.">
				  		</td>
				  		<td>
				  			<input type="text" class="form-control" id="" placeholder="Ancho en cm.">
				  		</td>
				  		<td>
				  			<input type="text" class="form-control" id="" placeholder="Profundidad en cm.">
				  		</td>
				  	</tr>
				  </table>
				  <center>
	  					<a href="#" id="guardarrt" class="btn btn-primary btn-sm active" role="button">Guardar</a>
	  			  </center>
				</div>
				<a href="#tramite" id="btnvolver">
					<img id="volverrtEE" src="../imagenes/volver.png">
				</a>
				<a href="#">
						<img id="cerrarMenu" src="../imagenes/cerrar.png"">
				</a>
			</div>
		</div>
		<!--/Menu Envio Encomiendas -->

		<!--Menu compra canastas -->
		<div id="canastas" class="panel">
			<div class="content">
				<h2>canastas</h2>

				<div class="" id="galeria">
					<div id="galery">
						<img id="im" src="../Productos/canasta1.png">
					</div>
					<div id="galery">
						<img id="im2" src="../Productos/canasta1.jpeg">
					</div>
					<div id="galery">
						<button class="btn btn-warning"><strong>$11.990</strong></button>
					</div>
				</div>

				<div class="" id="galeria">
					<div id="galery">
						<img id="im" src="../Productos/canasta2.png">
					</div>
					<div id="galery">
						<img id="im3" src="../Productos/canasta2.jpeg">
					</div>
					<div id="galery">
						<button class="btn btn-warning"><strong>$18.990</strong></button>
					</div>
				</div>

				<div class="" id="galeria">
					<div id="galery">
						<img id="im" src="../Productos/canasta3.png">
					</div>
					<div id="galery">
						<img id="im4" src="../Productos/canasta3.jpeg">
					</div>
					<div id="galery">
						<button class="btn btn-warning"><strong>$12.500</strong></button>
					</div>
				</div>

				<div class="" id="galeria">
					<div id="galery">
						<img id="im5" src="../Productos/italiano_opt.jpg">
					</div>
					<div id="galery">
						<img id="im6" src="../Productos/italiano.jpeg">
					</div>
					<div id="galery">
						<button class="btn btn-warning"><strong>$7.500</strong></button>
					</div>
				</div>

			</div>
			<a href="#tramite" id="btnvolver">
					<img id="volverrtEE" src="../imagenes/volver.png">
			</a>
			<a href="#">
					<img id="cerrarMenu" src="../imagenes/cerrar.png"">
			</a>
		</div>
		<!--/Menu compra canastas -->

		<!--Menu compra regalos -->
		<div id="comprasVarias" class="panel">
			<div class="content">
				<h2>Compras Regalos u otros</h2>

				
				
			</div>
			<a href="#tramite" id="btnvolver">
					<img id="volverrtCR" src="../imagenes/volver.png">
				</a>
			<a href="#">
					<img id="cerrarMenu" src="../imagenes/cerrar.png"">
			</a>
		</div>
		<!--/Menu compra regalos -->

	
	</body>
</html>
