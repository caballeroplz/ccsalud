<!DOCTYPE html>
<html lang="es">
	<div class ="img-bg">
		<head>
			<meta http-equiv="expires" content="0">
 			<meta http-equiv="Cache-Control" content="no-cache">
 			<meta http-equiv="Pragma" CONTENT="no-cache">
			<meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
			<!--<meta charset="UTF-8">-->
			<link rel="stylesheet" type="text/css" href="css/estilos.css" />
			
			<script src="./js/jquery.js"></script>
			<script src="./js/bootstrap.min.js"></script>
			<script type="text/javascript" src="./js/cssrefresh.js"></script>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
			<link rel="stylesheet" href="./css/bootstrap.min.css">
			<link rel="stylesheet" href="./css/estilos.css">
			<script src="https://www.w3schools.com/lib/w3.js"></script>
			<title>CIVICS -- Formulario de inscripci&oacute;n</title>
		
			<!--COMPROBACIÓN CAMPOS DE CONTRASEÑA-->
			<SCRIPT LANGUAGE="JavaScript">
				function validar_clave() {
				var cla1 = document.inscrip-form.pass.value;
				var cla2 = document.inscrip-form.rpass.value;
				if (cla1 == '' || cla2 == '') {
					alert('Debes introducir tu clave en los dos campos.');
					return false;
				}
				else {
					if (cla1 != cla2) {
						alert ("Las claves introducidas no son iguales");
						return false;
					}
					else {
						return true;
					}
				}
			}
			</script>
		</head id="inicioweb">
		<body>
		<?php
			include 'header.php';
		?>
			<div class="container sombra">
				<div class="row">
					<div class="col-md-3 ">
						<!-- BIENVENIDOS -->
						<?php
							include 'side-bienvenidos.php';
						?>
					</div>
					<div  class="col-md-6">
						<div class="panel" style="text-align: justify;">
							<div class="panel-body parrafos">			
								<h3>FORMULARIO DE REGISTRO</h3><hr/>
								<h4>Por favor, rellene el siguiente formulario para inscribirse:</h4>
								<h4><font style = "color:red;">¡ATENCIÓN! Los campos solo permiten rellenarse EN MAYÚSCULAS. Ponga especial atención cumplimentando el formulario. Introduzca su nombre tal cual figure en su DNI (incluido acentos, etc..) para que tengan validez los certificados.</font></h4>
				
								<!-- form start -->
								<form method="post" enctype="multipart/form-data" action="save-inscrip.php" id="inscrip-form" name="inscrip-form" onSubmit="return validar_clave()" autocomplete="off">
							 		<div class="form-header">
									</div>
									<div class="form-body">
							 			<div class="row">
											<div class="col-lg-12">
												<p><h3>Datos personales</h3></p>
											</div>
											<div class="col-lg-6">
												<label for="dni"> DNI / NIE</label>
												<input id="dni" name="dni" type="text" class="form-control" placeholder="DNI / NIE" required autofocus pattern="[A-Z0-9]{1}[0-9]{7}[A-Z]{1}" title="Debe introducir el DNI sin guión y con la letra mayuscula. Ej: 00000000A">
												<span class="help-block" id="error"></span>
											</div>
										</div>
									<div class="row">
										<div class="col-lg-6">
											<label for="nombre"> Nombre</label>
											<input name="nombre" type="text" class="form-control" placeholder="Nombre" required pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,50}" title="Debe rellenar el campo CON MAYÚSCULAS">
											<span class="help-block" id="error"></span> 
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<label for="ap1"> Primer apellido</label>
											<input name="ap1" type="text" class="form-control" placeholder="Primer apellido" required pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,50}" title="Debe rellenar el campo CON MAYÚSCULAS">
											<span class="help-block" id="error"></span>
										</div>
										<div class="col-lg-6">
											<label for="ap2"> Segundo apellido</label>
											<input name="ap2" type="text" class="form-control" placeholder="Segundo apellido" pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,50}" title="Debe rellenar el campo CON MAYÚSCULAS">
											<span class="help-block" id="error"></span>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<label for="ocupacion"> Categor&iacute;a </label>
												<select class="form-control" id="ocupacion" name="ocupacion">
													<option value="DIETETICA-Y-NUTRICION">DIETÉTICA Y NUTRICIÓN</option>
													<option value="ENFERMERIA">ENFERMERÍA Y SUS ESPECIALIDADES</option>
													<option value="FARMACIA">FARMACIA Y SUS ESPECIALIDADES</option>
													<option value="FISIOTERAPIA">FISIOTERAPIA</option>
													<option value="LOGOPEDIA">LOGOPEDIA</option>
													<option value="MEDICINA">MEDICINA Y SUS ESPECIALIDADES</option>
													<option value="ODONTOLOGIA">ODONTOLOGÍA</option>
													<option value="PSICOLOGÍA">PSICOLOGÍA</option>
													<option value="TERAPIA-OCUPACIONAL">TERAPIA OCUPACIONAL</option>
													<option value="TECNICO-ESPECIALISTA">TÉCNICO ESPECIALISTA RELACIONADO CON LA SALUD</option>
												</select> 
												<span class="help-block" id="error"></span>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<p><h3>Información de contacto</h3></p>
											</div>
											<div class="col-lg-12">
												<label for="domicilio"> Domicilio</label>
												<input name="domicilio" type="text" class="form-control" placeholder="Domicilio" required pattern="[A-Z0-9ÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,300}" title="Debe rellenar el campo CON MAYÚSCULAS">
												<span class="help-block" id="error"></span>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<label for="ap2"> Localidad</label>
												<input name="localidad" type="text" class="form-control" placeholder="Localidad" required pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,100}" title="Debe rellenar el campo CON MAYÚSCULAS">
												<span class="help-block" id="error"></span>
											</div>
											<div class="col-lg-6">
												<label for="provincia"> Provincia</label>
												<input name="provincia" type="text" class="form-control" placeholder="Provincia" required pattern="[0-9A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,100}" title="Debe rellenar el campo CON MAYÚSCULAS">
												<span class="help-block" id="error"></span>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<label for="cp"> Código postal</label>
												<input name="cp" type="text" class="form-control" placeholder="Código Postal" required pattern="[0-9]{5}">
												<span class="help-block" id="error"></span>
											</div>
											<div class="col-lg-8">
												<label for="pais"> País</label>
												<input name="pais" type="text" class="form-control" placeholder="País" required required pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,60}" title="Debe rellenar el campo CON MAYÚSCULAS">
												<span class="help-block" id="error"></span>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<label for="tlfn"> Teléfono</label>
												<input name="tlfn" type="text" class="form-control" placeholder="Teléfono" required pattern="[0-9]{9}">
												<span class="help-block" id="error"></span>
											</div>
											<div class="col-lg-8">
												<label for="mail"> Correo electrónico</label>
												<input name="mail" type="text" class="form-control" placeholder="Correo electrónico" required pattern="^[A-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[A-Z0-9-]+(?:\.[A-Z0-9-]+)*$" title="Debe rellenar el campo CON MAYÚSCULAS">
												<span class="help-block" id="error"></span>
											</div>
										</div>		
										<div class="row">
											<div class="col-lg-12">
												<p><h3>Configuración de acceso al Congreso Virtual</h3></p>
									 		</div>
											<div class="form-group col-lg-6">
												<label for="user"> Nombre de usuario</label>
												<div class="input-group">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-user"></span>
													</div>
													<input name="user" type="text" class="form-control" placeholder="Nombre de usuario" required pattern="[A-Za-z0-9_-]{3,15}">
												</div>  
												<span class="help-block" id="error"></span>                    
									   		</div>
										</div>
								  		<div class="row">
										   <div class="form-group col-lg-6">
											   <label for="pass"> Contraseña</label>
												<div class="input-group">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-lock"></span>
													</div>
													<input name="pass" id="pass" type="password" class="form-control" placeholder="Contraseña" required pattern="[A-Za-z0-9!?-]{8,15}" title="La contaseña ha de tener de 8 a 12 caracteres (Puede contener mayúsculas, minúsculas, números y los caracteres !?-) ">
												</div>  
												<span class="help-block" id="error"></span>                    
									   		</div>
										   	<div class="form-group col-lg-6">
												<label for="rpass">Repetir contraseña</label>
												<div class="input-group">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-lock"></span>
													</div>
													<input name="rpass" type="password" class="form-control" placeholder="Repetir contraseña" required pattern="[A-Za-z0-9!?-]{8,15}">
												</div>  
												<span class="help-block" id="error"></span>                    
									   		</div>
								 		</div>
									</div>
								</div>
								<div class="form-footer">
									<div class="checkbox">
										<label>
										<input type="checkbox" name="acepto" id="acepto"  title="Debe aceptar los términos y condiciones" required> 
										<a href="condiciones-legales.php"  target="_blank"> He leído y acepto los términos y condiciones legales del congreso </a>
										</label>
									</div>
									<br>
									<center><input class = "btn btn-primary btn-stl btn-lg btn-identif" type="submit" value="Incribirse" name="inscribir"  ></center>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="clearfix visible-sm-block"></div> -->
		<body>
	</div>
</html>
