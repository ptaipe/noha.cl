<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=no">
		<meta name="google-signin-client_id" content="554781700782-0e42vcdoof308bd61h8tnmioiblhsvko.apps.googleusercontent.com">

		<title>NoHa</title>
    
		<link rel="shortcut icon" href="imagenes/logo.ico">
		<link rel="stylesheet" type="text/css" href="css/tags.css"/>
		<link rel="stylesheet" type="text/css" href="css/popup.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/styleMobile.css"/>
		<link rel="stylesheet" type="text/css" href="css/formRegisUser.css"/>
		<link rel="stylesheet" type="text/css" href="css/formularios.css"/>
		<link rel="stylesheet" type="text/css" href="css/productos.css"/>

		<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">

		<script src="js/validarRut.js?v=1"></script>
		<script src="js/bodySlider.js?v=1"></script>

	</head>
	<body background="imagenes/fondo6.jpg">
		<div id="precarga">
			<!--precarga de backgrounds-->
		</div>

		<!-- Tramites -->
		<div id="tramite" class="panel">
			<div id="tablaMenu">
				<table class="table table-sm table-borderless">
					<tr>
						<td>
							<div id="conf2">
								<a href="#revisiónTec" >
									<img id="menu2" src="imagenes/menuRevison.jpg" >
								</a>
								<label id="popup1">revision TECNICA</label>
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
		<!-- /Trámites -->

		<!-- Compras -->
		<div id="tienda" class="panel">
			<div class="content">
				<h2>Compras</h2>
			</div>
		</div>
		<!-- /Compras -->

		<!-- Nuevo socio -->
		<div id="newPart" class="panel">
			<div class="content">
				<h2>Nuevo Socio Partner</h2>
				<div class="testbox">
				  <center><titulo class="tituloForm">Registro</titulo></center>

				  <form action="">
					  <hr>

					  <input type="text" name="rut" id="txtRut" maxlength="8" placeholder="Rut" required/>
					  <input type="text" name="dv" id="txtDv" maxlength="1" placeholder="Dv" required/>

					  <input type="text" name="nombre" id="txtNombre" placeholder="Nombre" required/>
					  <input type="text" name="apellido" id="txtApellido" placeholder="Apellido" required/>
					  <input type="text" name="Dirección" id="txtDirecc" placeholder="Dirección" required/>
					  <input type="text" name="telefono" id="txtTelefono" placeholder="Telefóno" required/>
					  <input type="text" name=" id="txt placeholder="Correo electrónico" required/>
					  <hr>
					   <center><a href="#" class="button">Guardar</a></center>
				  </form>
				</div>
			</div>
		</div>
		<!-- /Nuevo Socio -->

		<!-- Nuestro Servicio -->
		<div id="servicio" class="panel">
			<div  class="content">
				<h2>NoHa</h2>
				<p>
					En la actualidad las personas no disponen de tanto tiempo, ya que, están atados a un trabajo muy demandante o después del trabajo van a sus estudios superiores durante la tarde. Este problema de cotidianidad afecta la vida familiar de las personas y los tiempos de ocio que les gustaría tener. Además este problema de falta de tiempo genera que las personas soliciten permisos a sus trabajos para realizar estos trámites sencillos, generando un inconveniente para las mismas personas que las solicitan.  También hay que señalar que al realizar todas estas cotidianidades generan una mala experiencia o se suele vivir malos ratos, ya que la fila en las sucursales de pagos, supermercados, tiendas para comprar regalos, realizar la revisión técnica, llevar a lavar el auto o realizar trámites en el registro civil, son demasiados largas y lentas.
				</p>
			</div>
		</div>
		<!-- /Nuestro Servicio -->

		<!--Interior de Menu de tramites -->
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
								    <span class="form-control form-control-sm">Rut</span>
								  </div>
									<input type="text" class="form-control form-control-sm" name="rutCli" id="" maxlength="8" placeholder="ejemplo: 12345678" required/>
								</div>
				  			</td>
				  			<td>
				  				<input type="text" class="form-control form-control-sm" name="txtPatente" id="" maxlength="6" placeholder="Patente sin guión ej: ffgg52" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control form-control-sm" name="nombreCli" id="" placeholder="Nombre" required/>
				  			</td>
				  			<td>
				  				<input type="text" class="form-control form-control-sm" name="añoAuto" id="" maxlength="4" placeholder="Año de Vehículo" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control form-control-sm" name="apellidoCli" id="" placeholder="Apellido" required/>
				  			</td>
				  			<td >
				  				<input type="text" class="form-control form-control-sm" name="marcaAuto" id="" placeholder="Marca de auto" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control form-control-sm" name="DirecciónCli" id="" placeholder="Dirección" required/>
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
				  				<input type="text" class="form-control form-control-sm" name="telefonoCli" id="" placeholder="Telefóno" required/>
				  			</td>
				  			<td>
				  				<input type="text" class="form-control form-control-sm" name="plantarevisión" id="" placeholder="Planta de revisión técnica" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" class="form-control form-control-sm" name="" id="" placeholder="Correo electrónico" required/>
				  			</td>
				  			<td>
				  				<input type="date" class="form-control form-control-sm" name="" placeholder="Fecha Inicio">
				  			</td>
				  		</tr>
				  		<tr>
				  			<td colspan="2">
				  				<center>
				  					<a href="#" id="guardarrt" class="btn btn-primary btn-sm active" role="button">Guardar</a>
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
									    <span class="form-control form-control-sm">Rut</span>
									  </div>
										<input type="text" class="form-control form-control-sm" name="rutCli" id="RtxtRutCli" maxlength="9" placeholder="ejemplo: 123456789 - sin guión" required="">
									</div>
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="nombreCli" id="RtxtNombreCli" placeholder="Nombre" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="apellidoCli" id="RtxtApellidoCli" placeholder="Apellido" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="DirecciónCli" id="RtxtDireccCli" placeholder="Dirección" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="telefonoCli" id="RtxtTelefonoCli" placeholder="Telefóno" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="emailCli" id="" placeholder="Correo electrónico" required="">
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
									    <span class="form-control form-control-sm">Rut</span>
									  </div>
										<input type="text" class="form-control form-control-sm" name="rutCli" id="RtxtRutCli" maxlength="9" placeholder="ejemplo: 123456789 - sin guión" required="">
									</div>
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="nombreCli" id="RtxtNombreCli" placeholder="Nombre" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="apellidoCli" id="RtxtApellidoCli" placeholder="Apellido" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="DirecciónCli" id="RtxtDireccCli" placeholder="Dirección" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="telefonoCli" id="RtxtTelefonoCli" placeholder="Telefóno" required="">
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<input type="text" class="form-control form-control-sm" name="emailCli" id="" placeholder="Correo electrónico" required="">
					  			</td>
					  		</tr>
					  	</tbody>
				  </table>
				  <table id="tableEnvios3">
				  	<tr>
				  		<td><label>¿Cuanto Pesa?</label></td>

				  		<td><input type="text" class="form-control form-control-sm" id="" placeholder="Kilogramos"></td>

				  		<td colspan="3">
				  			<select class="form-control form-control-sm">
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
				  			<label>¿Cuanto Mide?</label>
				  		</td>
				  		<td>
				  			<input type="text" class="form-control form-control-sm" id="" placeholder="Largo en cm.">
				  		</td>
				  		<td>
				  			<input type="text" class="form-control form-control-sm" id="" placeholder="Ancho en cm.">
				  		</td>
				  		<td>
				  			<input type="text" class="form-control form-control-sm" id="" placeholder="Profundidad en cm.">
				  		</td>
				  	</tr>
				  </table>
				  <center>
	  					<a href="#" id="guardarrt" class="btn btn-primary btn-sm active" role="button">Guardar</a>
	  			  </center>
				</div>
			</div>
		</div>

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
		</div>

		<div id="comprasVarias" class="panel">
			<div class="content">
				<h2>Compras Regalos u otros</h2>

				<div class="testbox3">
				  <form action="">
				  	<table id="tabla3" align="center">
				  		<tr>
				  			<td>
				  				<input type="text" name="rutCli" id="RtxtRutCli" maxlength="8" placeholder="Rut" required/>
				  				<input type="text" name="dvCli" id="RtxtDvCli" maxlength="1" placeholder="Dv" required/>
				  			</td>
				  			<td><input type="text" name="txtPatente" id="RtxtPatente" maxlength="6" placeholder="" required/></td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input disabled="on" type="text" name="nombreCli" id="RtxtNombreCli" placeholder="Nombre" required/>
				  			</td>
				  			<td>
				  				<input type="text" name="tipoCompra" id="tpCompra" maxlength="4" placeholder="Tipo de compra" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input disabled="on" type="text" name="apellidoCli" id="RtxtApellidoCli" placeholder="Apellido" required/>
				  			</td>
				  			<td ><input type="text" name="marcaAuto" id="RtxtMarca" placeholder="Marca de auto" required/></td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input disabled="on" type="text" name="DirecciónCli" id="RtxtDireccCli" placeholder="Dirección" required/>
				  			</td>
				  			<td>
				  				<input type="text" name="adressTramite" id="RadressTramite" placeholder="Marca de Auto" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input disabled="on" type="text" name="telefonoCli" id="RtxtTelefonoCli" placeholder="Telefóno" required/>
				  			</td>
				  			<td>
				  				<input type="text" name="plantarevisión" id="Rplantarevisión" placeholder="Planta de revisión tecnica" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input disabled="on" type="text" name="emailCli" id="" placeholder="Correo electrónico" required/>
				  			</td>
				  			<td></td>
				  		</tr>
				  		<tr>
				  			<td colspan="2">
				  				<center><a href="#" class="button2">Guardar</a></center>
				  			</td>
				  		</tr>
				  	</table>
				  </form>
				</div>
				<a href="#tramite"><img id="btnRegresar" src="imagenes/regresar.png"></a>
			</div>
		</div>

		<!--Registro de clientes -->

		<div id="formNewCliente" class="panel">
			<div class="content">
				<h2>Registro Nuevo Cliente</h2>
				<div class="testbox2">
				  <form action="">
				  	<table id="tabla2" align="center">
				  		<tr>
				  			<td>
				  				<input type="text" name="rutCli" id="txtRutCli" maxlength="8" placeholder="Rut" required/>
				  				<input type="text" name="dvCli" id="txtDvCli" maxlength="1" placeholder="Dv" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" name="nombreCli" id="txtNombreCli" placeholder="Nombre" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" name="apellidoCli" id="txtApellidoCli" placeholder="Apellido" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" name="DirecciónCli" id="txtDireccCli" placeholder="Dirección" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td><input type="text" name="telefonoCli" id="txtTelefonoCli" placeholder="Telefóno" required/></td>
				  		</tr>
				  		<tr>
				  			<td><input type="text" name="emailCli" id="txtEmailCli" placeholder="Correo electrónico" required/></td>
				  		</tr>
				  		<tr>
				  			<td><center><a href="#" class="button2">Guardar</a></center></td>
				  		</tr>
				  	</table>
				  </form>
				</div>
				<a href="#"><img id="btnRegresar" src="imagenes/regresar.png"></a>
			</div>
		</div>
		<!--/Registro de clientes -->

		<!-- menu de navegacion -->
		<div id="header">
			<h1>Nosotros lo hacemos por ti</h1>
			<ul id="navigation">
				<li>
					<a id="tram" href="#tramite">Servicios</a>
					<img id="ico" src="imagenes/iconoTramites.png">
				</li>
				<li>
					<a id="new" href="#formNewCliente">Registro Cliente</a>
					<img id="ico3" src="imagenes/iconoSocios.png">
				</li>
				<li>
					<a id="new" href="#newPart">Registro Socio</a>
					<img id="ico3" src="imagenes/iconoSocios.png">
				</li>
				<li>
					<a id="serv" href="#servicio">Nuestro Servicio</a>
				</li>
			</ul>
		</div>

		<footer id="footer">
			<div>
				<table class="table table-sm table-borderless" style="text-align: center;">
					<tr>
						<td>Dirección</td>
						<td>Telefono</td>
						<td>Celular</td>
						<td>Email</td>
					</tr>
					<tr>
						<td>Av. Americo Vespucio 1940, Santiago, Conchalí, Oficina: 814</td>
						<td>+56 227340487</td>
						<td>+569 71920899 - +569 87549928</td>
						<td>contacto@noha.cl</td>
					</tr>
				</table>
			</div>
		</footer>
	</body>
</html>
