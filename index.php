<!DOCTYPE html>
<html class="no-js" lang="es">
	<head>
		
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="Cache-control" content="no-cache">	

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=no">

		<title>NoHa</title>

		<link rel="shortcut icon" href="imagenes/logo.ico">
		<link rel="stylesheet" type="text/css" href="css/tags.css"/>
		<link rel="stylesheet" type="text/css" href="css/popup.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/styleMobile.css"/>		
		<link rel="stylesheet" type="text/css" href="css/formularios.css"/>
		<link rel="stylesheet" type="text/css" href="css/productos.css"/>
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">		
		<script src="js/bodySlider.js"></script>

	</head>
	<body background="imagenes/f1.jpg">
		<div id="precarga">
			<!--precarga de backgrounds-->
		</div>

		<!-- Inicio de sesion -->
		<div id="login" class="panel">
			<div id="">
				<form method="post" action="control/login.php">
					<div class="login">
					  <div class="login-header">
					    <h1>login cliente</h1>
					  </div>
					  <div class="login-form">
					    <h3>usuario:</h3>
					    <input type="text" name="usuario" placeholder="correo" class="form-control"/><br>
					    <h3>clave:</h3>
					    <input type="password" name="pass" placeholder="Clave" class="form-control"/>
					    <br>
					    <input type="submit" value="Iniciar" class="btn btn-light" style="margin-top: 17px;
					    font-size: 19px;
					    width: 136px;
					    height: 78px;
					    background-color: white;
					    color: black;
					    font-weight: bold;					    
					    box-shadow: 0px 0px 8px 4px rgba(245, 245, 245, 1);"/> 
					  </div>
					</div>
				</form>
			</div>
			<a href="#">
					<img id="cerrarMenu" src="imagenes/cerrar.png">
			</a>
			<a href="#loginSocio" id="Lsocio" class="btn btn-light">iniciar como Socio</a>			
		</div>
		<div id="loginSocio" class="panel">
			<div id="">
				<form method="post" action="control/loginSocio.php">
					<div class="login">
					  <div class="login-header">
					    <h1>login socio</h1>
					  </div>
					  <div class="login-form">
					    <h3>usuario:</h3>
					    <input type="text" name="usuarioSocio" placeholder="Corre empresa o personal" class="form-control"/>
					    <h3>Rut:</h3>
					     <input type="text" name="rutSocio" placeholder="Rut empresa o personal" class="form-control"/>
					    <h3>clave:</h3>
					    <input type="password" name="passSocio" placeholder="Clave" class="form-control"/>
					   
					    <input type="submit" value="Iniciar" class="btn btn-light" style="margin-top: 17px;
					    font-size: 19px;
					    width: 136px;
					    height: 78px;
					    background-color: white;
					    color: black;
					    font-weight: bold;					   
					    box-shadow: 0px 0px 8px 4px rgba(245, 245, 245, 1);"/> 
					  </div>
					</div>
				</form>
			</div>
			<a href="#">
					<img id="cerrarMenu" src="imagenes/cerrar.png">
			</a>
			<a href="#login" id="Lsocio">iniciar como cliente</a>			
		</div>
		<!-- /inicio sesion -->

			<!-- menu de navegacion -->
		<div id="header">
			<h1 style="padding: 0px;"><img src="imagenes/icono3.png" style="height: 130px;"></h1>
			<ul id="navigation">
				<li>
					<a id="tram" href="#tramite">Servicios</a>
					<img id="ico" src="imagenes/ventas.png">
				</li>
				<li>
					<a id="new" href="#formNewCliente">Registro Cliente</a>
					<img id="ico2" src="imagenes/iconoCliente.png">
				</li>
				<li>
					<a id="new" href="#newPart">Registro Socio</a>
					<img id="ico3" src="imagenes/iconoSocios.png">
				</li>
				<li>
					<a id="serv" href="#servicio">Quienes Somos</a>
					<img id="ico4" src="imagenes/somos.png">
				</li>				
			</ul>
			<a href="#login" id="L" class="btn btn-primary btn-sm active">Iniciar Sesion</a>
		</div>

		<!-- Menu Servicios -->
		<div id="tramite" class="panel">
			<div id="tablaMenu">
				<table class="table table-sm table-borderless">
					<tr>
						<td>
							<div id="conf2">
								<a href="#revisiónTec" >
									<img id="menu2" src="imagenes/menuRevison.jpg" >
								</a>
								<label id="popup1">revision tecnica</label>
							</div>
						</td>
						<td>
							<div id="conf3">
								<a href="#encargosEnvios">
									<img id="menu3" src="imagenes/menuEncargoEnvios.jpg">
								</a>
								<label id="popup2">ENVIO ENCOMIENDAS</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div id="conf4">
								<a href="#canastas">
									<img id="menu4" src="imagenes/compras.jpg">
								</a>
								<label id="popup3">compra canastas</label>
							</div>
						</td>
						<td>
							<div id="conf1">
								<a href="#comprasVarias">
									<img id="menu1" src="imagenes/comprasVarias2.jpg">
								</a>
								<label id="popup4">COMPRA REGALOS</label>
							</div>
						</td>
					</tr>
				</table>
				<a href="#">
					<img id="cerrarMenu" src="imagenes/cerrar.png">
				</a>
			</div>
		</div>
		<!-- /Menu Servicios -->

		<!--Registro de clientes -->
		<div id="formNewCliente" class="panel">
			<div class="content">
				<h2>Registro Nuevo Cliente</h2>
				  <form id="clte" method="post" action="control/newCliente.php">
				  	<table class="table table-sm table-borderless table-responsive-sm" id="tablaClientes">
						<tr><td><input class="form-control" aria-label="Small" type="text" name="rut" placeholder="Rut ej:123457890" required></td></tr>
						<tr><td><input required class="form-control" type="text" name="nombre" placeholder="Nombre"></td></tr>
						<tr><td><input required class="form-control" type="text" name="apellido" placeholder="Apellido"></td></tr>
						<tr><td><input required class="form-control" type="text" name="mail" placeholder="Correo electrónico"></td></tr>
						<tr><td><input required class="form-control" type="text" name="fono" placeholder="Telefóno"></td></tr>				

						<tr><td><select class="form-control" name="region">
							<option>Seleccione Región</option>
							<option value="Metrolitana">Metropolitana de santiago</option>
						</select></td></tr>								
						
						<tr><td><select class="form-control" name="comunas">
							<option>Seleccione Comuna</option>
							<option value="Cerrillos">Cerrillos</option>												
							<option value="Estación Central">Estación Central</option>
							<option value="Maipu">Maipu</option>
							<option value="Penalolen">Penalolen</option>
							<option value="Providencia">Providencia</option>
							<option value="Vitacura">Vitacura</option>
							<option value="Las Condes">Las Condes</option>	
						</select></td></tr>	


						<tr><td><input required class="form-control" type="text" name="direccion" placeholder="Dirección"></td></tr>
						<tr><td><input required class="form-control" type="password" name="pass" placeholder="Clave"></td></tr>
						<tr><td><input required type="submit" class="btn btn-primary btn-sm active" id="BtnRegistrar" value="Registrarse" style="
							    margin-top: 17px;
							    font-size: 19px;
							    width: 146px;
							    height: 88px;
							    background-color: white;
							    color: black;
							    font-weight: 600;
							    border: outset;
							    box-shadow: 0px 0px 8px 4px rgba(245, 245, 245, 1);
							"></td></tr>
				  	</table>
				  </form>
				</div>
				<a href="#"><img id="cerrarMenu" src="imagenes/cerrar.png"></a>
			</div>
		</div>
		<!--/Registro de clientes -->

		<!-- Registro socio -->
		<div id="newPart" class="panel">
			<div class="content">
				<h2>Nuevo Socio</h2>				
				  <form id="newSocio" method="post" action="control/newSocio.php">
				  	<table class="table table-borderless table-sm" id="tablaClientes">
						<tr>
							<td colspan="2"><input name="rut" class="form-control" aria-label="Small" type="text" placeholder="Rut ej:123457890" required></td>
						</tr>
						<tr>
							<td><input name="nombre" class="form-control" type="text" placeholder="Nombre" required></td>
							<td><input name="apellido" class="form-control" type="text"  placeholder="Apellido" required></td>
						</tr>
						<tr>
							<td><input name="email" class="form-control" type="text" placeholder="Correo electrónico" required></td>
							<td><input name="fono" class="form-control" type="text" placeholder="Telefóno" required></td>
						</tr>
						<tr>
							<td>
								<select name="region" class="form-control">
									<option>Seleccione Región</option>
									<option value="Metrolitana">Metropolitana de santiago</option>
								</select>
							</td>
							<td>
								<select name="comunas" class="form-control">
									<option>Seleccione Comuna</option>
									<option value="Cerrillos">Cerrillos</option>
									<option value="Estación Central">Estación Central</option>
									<option value="Maipu">Maipu</option>
									<option value="Penalolen">Penalolen</option>
									<option value="Providencia">Providencia</option>
									<option value="Vitacura">Vitacura</option>
									<option value="Las Condes">Las Condes</option>	
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<input name="direccion" class="form-control" type="text" placeholder="Dirección" required>
							</td>
							<td>
								<select name="auto" class="form-control">
									<option>Tipo de vehículo</option>
									<option value="auto">Auto movil</option>
									<option value="moto">Motocicleta</option>
									<option value="bicicleta">Bicicleta</option>
								</select>
							</td>
						</tr>						
						<tr>
							<td><input name="patente" class="form-control" type="text" placeholder="Patente" required></td>
							<td><input name="modelo" class="form-control" type="text" placeholder="Modelo" required></td>
						</tr>						
						<tr>
							<td>
								<p style="color: white;font-weight: 600;text-shadow: 2px 2px 2px rgba(0,0, 0, 0.9);margin-bottom: 3px;">año Fabricacion</p>
								<input name="year" class="form-control" type="date"  value="<?php echo date("Y-m-d");?>" required>
							</td>
							<td><input name="pass" class="form-control" type="password" placeholder="Clave" style="margin-top: 26px;"></td>
						</tr>
						<tr>													
							<td colspan="2"><input type="submit" class="btn btn-primary btn-sm active" value="Registrarse" style="
							    margin-top: 17px;
							    font-size: 19px;
							    width: 146px;
							    height: 88px;
							    background-color: white;
							    color: black;
							    font-weight: 600;
							    border: outset;
							    box-shadow: 0px 0px 8px 4px rgba(245, 245, 245, 1);
							"></td>
				  		</tr>					
				  	</table>
				  </form>				
			</div>
			<a href="#"><img id="cerrarMenu" src="imagenes/cerrar.png"></a>
		</div>
		<!-- /Registro Socio -->

		<!-- Nuestro Servicio -->
		<div id="servicio" class="panel">
			<div  class="content">
				<h2>NoHa</h2>
				<div id="parrafo">
					<p>
						Actualmente en los tiempos de hoy en día como personas no disponemos de tiempo ya que están atados a un trabajo muy demandante y a una pandemia corriendo riesgos de contagio, el cual no les permite realizar actividades familiares. Este problema afecta la vida de miles de familias disminuyendo los tiempos de ocio que les gustaría tener disfrutando junto a los suyos. Sin embargo, la falta de tiempo genera que las personas soliciten permisos a sus trabajos para realizar estos trámites sencillos, generando un inconveniente para las mismas personas que las solicitan, como también colocan en riesgo su salud ante el contagio de Covit 19. También hay que señalar que al realizar todas estas cotidianidades generan una mala experiencia o se suele vivir malos ratos y riesgos saliendo a la calle, en ocasiones hay mucha gente en la feria el cual es difícil caminar entre tanta gente o realizar un regalo a un ser querido y no disponer del tiempo para comprarlo, realizar la revisión técnica en ocasiones es muy tedioso, y los tiempos de espera son muy largos y muchas veces superan los horarios de atención.<br>
						Estamos viviendo una contingencia donde le ofrecemos a nuestros clientes una mejor condición de vida junto a su familia y un resguardo a su salud ante cualquier riesgo de contagio.
					</p>
					<table class="table table-borderless table-sm" style="
					    width: 70%;					    
					    margin: 0 auto;
					    text-align: center;
					"> 
						<tr>
							<td><p style="margin-top: 17px;color: rgba(245, 245, 245, 1);font-style: oblique;
								">Consultas o reclamos aquí ---></p></td>
							<td>
								<a href="mailto:contacto@noha.cl"><img id="tecnico" src="imagenes/atencion.png"></a>
							</td>	
							<td>
								<a href="https://api.whatsapp.com/send?phone=56987549928" target="_blank"><img id="wasa" src="imagenes/Wasa.png"></a>
							</td>						
						</tr>	
					</table>
				</div>
			</div>
			<a href="#"><img id="cerrarMenu" src="imagenes/cerrar.png"></a>

		</div>
		<!-- /Nuestro Servicio -->

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
									<input type="text" class="form-control" maxlength="8" placeholder="ejemplo: 123456789" required/>
								</div>
				  			</td>
				  			<td>
				  				<input type="text" class="form-control" maxlength="6" placeholder="Patente sin guión ej: ffgg52" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control" placeholder="Nombre" required/>
				  			</td>
				  			<td>
				  				<input type="text" class="form-control" maxlength="4" placeholder="Año de Vehículo" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control" placeholder="Apellido" required/>
				  			</td>
				  			<td >
				  				<input type="text" class="form-control" placeholder="Marca de auto" required/>
				  			</td><img src="">
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control" placeholder="Dirección" required/>
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
				  				<input type="text" class="form-control" placeholder="Telefóno" required/>
				  			</td>
				  			<td>
				  				<input type="text" class="form-control" placeholder="Planta de revisión técnica" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control"placeholder="Correo electrónico" required/>
				  			</td>
				  			<td>
				  				<input type="date" class="form-control" placeholder="Fecha Inicio">
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
					<img id="volverrt" src="imagenes/volver.png">
				</a>

				<a href="#" id="btnvolver">
					<img id="cerrar" src="imagenes/cerrar.png">
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
										<input type="text" class="form-control"  maxlength="9" placeholder="ejemplo: 123456789 - sin guión" required="">
									</div>
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" placeholder="Nombre" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" placeholder="Apellido" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" placeholder="Dirección" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" placeholder="Telefóno" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" placeholder="Correo electrónico" required="">
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
										<input type="text" class="form-control"maxlength="9" placeholder="ejemplo: 123456789 - sin guión" required="">
									</div>
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" placeholder="Nombre" >
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" placeholder="Apellido" >
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control"placeholder="Dirección" >
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" placeholder="Telefóno" >
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control" placeholder="Correo electrónico">
					  			</td>
					  		</tr>
					  	</tbody>
				  </table>
				  <table id="tableEnvios3">
				  	<tr>
				  		<td><label id="subtitle">¿Cuanto Pesa?</label></td>

				  		<td><input type="text" class="form-control" placeholder="Kilogramos"></td>

				  		<td colspan="3">
				  			<select class="form-control">
				  				<option>Tipo de caja</option>
				  				<option>Caja chica</option>
				  				<option>Caja normal</option>
				  				<option>Caja mediana</option>
				  				<option>Caja grande</option>
				  			</select>
				  		</td>
				  	</tr>
				  	<tr>
				  		<td >
				  			<label id="subtitle">¿Cuanto Mide?</label>
				  		</td>
				  		<td>
				  			<input type="text" class="form-control" placeholder="Largo en cm.">
				  		</td>
				  		<td>
				  			<input type="text" class="form-control" placeholder="Ancho en cm.">
				  		</td>
				  		<td>
				  			<input type="text" class="form-control" placeholder="Profundidad en cm.">
				  		</td>
				  	</tr>
				  </table>
				  <center>
	  					<a href="#" id="guardarrt" class="btn btn-primary btn-sm active" role="button">Guardar</a>
	  			  </center>
				</div>
				<a href="#tramite" id="btnvolver">
					<img id="volverrtEE" src="imagenes/volver.png">
				</a>
				<a href="#">
						<img id="cerrarMenu" src="imagenes/cerrar.png">
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
						<img id="im" src="Productos/canasta1.png">
					</div>
					<div id="galery">
						<img id="im2" src="Productos/canasta1.jpeg">
					</div>
					<div id="galery">
						<button class="btn btn-warning"><strong>$11.990</strong></button>
					</div>
				</div>

				<div class="" id="galeria">
					<div id="galery">
						<img id="im" src="Productos/canasta2.png">
					</div>
					<div id="galery">
						<img id="im3" src="Productos/canasta2.jpeg">
					</div>
					<div id="galery">
						<button class="btn btn-warning"><strong>$18.990</strong></button>
					</div>
				</div>

				<div class="" id="galeria">
					<div id="galery">
						<img id="im" src="Productos/canasta3.png">
					</div>
					<div id="galery">
						<img id="im4" src="Productos/canasta3.jpeg">
					</div>
					<div id="galery">
						<button class="btn btn-warning"><strong>$12.500</strong></button>
					</div>
				</div>

				<div class="" id="galeria">
					<div id="galery">
						<img id="im5" src="Productos/italiano_opt.jpg">
					</div>
					<div id="galery">
						<img id="im6" src="Productos/italiano.jpeg">
					</div>
					<div id="galery">
						<button class="btn btn-warning"><strong>$7.500</strong></button>
					</div>
				</div>

			</div>
			<a href="#tramite" id="btnvolver">
					<img id="volverrtEE" src="imagenes/volver.png">
			</a>
			<a href="#">
					<img id="cerrarMenu" src="imagenes/cerrar.png">
			</a>
		</div>
		<!--/Menu compra canastas -->

		<!--Menu compra regalos -->
		<div id="comprasVarias" class="panel">
			<div class="content">
				<h2>Compras Regalos u otros</h2>
			
				
			</div>
			<a href="#tramite" id="btnvolver">
					<img id="volverrtCR" src="imagenes/volver.png">
				</a>
			<a href="#">
					<img id="cerrarMenu" src="imagenes/cerrar.png">
			</a>
		</div>
		<!--/Menu compra regalos -->
	</body>
	<script>

</html>
