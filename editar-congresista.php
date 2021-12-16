<?php
	if(!isset($_COOKIE['idadm']) && !isset($_COOKIE['idcong'])){
		
		echo '<script> window.location="caducado.php"; </script>';
	}else{
	
		//conexión base de datos
		include 'cdb.php';

		if(isset($_COOKIE['idcong'])){
			
			$congresista = $_COOKIE['idcong'];
		}
		//Obtenemos los datos del usuario.
		$sql = "SELECT * FROM Congresistas WHERE id = '" . $congresista . "'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			
			$row = $result->fetch_assoc(); 
?>
	
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

						<title>CIVICS -- Editar Congresista</title>
						<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
						<link rel="stylesheet" href="./css/bootstrap.min.css">
						<link rel="stylesheet" href="./css/estilos.css">
						<script src="https://www.w3schools.com/lib/w3.js"></script>
			
					</head>
	
					<body>
					<?php
						include 'header.php';
					?>
					<div class="container sombra">
						<div class="row">
							<div class="col-md-3 ">
								<!-- BIENVENIDOS -->
								<?php
									$identificado = false;
									if(isset($_COOKIE['idadm'])){
										
										include 'menuadm.php';
										$identificado = true;
									}
									if(isset($_COOKIE['idcong'])){

										include 'menucong.php';
										$identificado = true;
									}
									if($identificado == false){
										include 'side-bienvenidos.php';
									}
									
								?>
							</div>
							<div  class="col-md-6">
								<div class="panel" style="text-align: justify;">
									<div class="panel-body parrafos">
										<ul class="nav nav-tabs"><li class="active"><a href="editar-alumno.php">Congresista</a></li>
											<!--<li><a href="miscomunicaciones.php">Comunicaciones</a></li>
											<li><a href="alterr1.php">Resumen 1</a></li>
											<li ><a href="alterr2.php">Resumen 2</a></li>
											<li ><a href="alterp1.php">Poster 1</a></li>
											<li><a href="alterp2.php">Poster 2</a></li>-->
										</ul>
										<form method="post" enctype="multipart/form-data" action="update-congresista.php" id="update-congresista-form" name="update-congresista-form" autocomplete="off">
											<div class="form-header">
											  <!--<h4 class="form-title"><i class="fa fa-user"></i>¡Rellene los siguientes datos para inscribirse!</h4>-->
											</div>
											<div class="form-body">
												<div class="row">
													<div class="col-lg-12">
														<center><p><h4>---------- Datos personales ----------</h4></p></center>
													</div>
													<br>
													<div class="col-lg-6">
														<label for="dni">DNI</label>
														<input id="dni" name="dni" type="text" class="form-control" value="<?php echo $row['dni'];?>" placeholder="DNI/NIE" required autofocus pattern="[A-Z0-9]{1}[0-9]{7}[A-Z]{1}" title="Debe introducir el DNI/NIE sin guión y con la letra mayuscula. Ej: 00000000A">
														<span class="help-block" id="error"></span>
													</div>
													<div class="col-lg-6">
														<label for="id">ID congresista</label>
														<input class="form-control" id="id2"  name="id2" value="<?php echo $row['id'];?>" disabled>
														<input  id="id" hidden=true name="id" value="<?php echo $row['id'];?>" >
														<span class="help-block" id="error"></span>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6">
														<label>Nombre</label>
														<input name="nombre" type="text" class="form-control" value="<?php echo utf8_encode($row['nombre']);?>" placeholder="Nombre" required pattern="[A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ð ,.'-]{2,30}">
														<span class="help-block" id="error"></span> 
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6">
														<label>Primer Apellido</label>
														<input name="apellido1" type="text" class="form-control" value="<?php echo utf8_encode($row['apellido1']);?>" placeholder="Primer apellido" required pattern="[A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔñÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}">
														<span class="help-block" id="error"></span>
													</div>
													<div class="col-lg-6">
														<label>Segundo Apellido</label>
														<input name="apellido2" type="text" class="form-control" value="<?php echo utf8_encode($row['apellido2']);?>" placeholder="Segundo apellido" pattern="[A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪñŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}">
														<span class="help-block" id="error"></span>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<label for="ocupacion"> Categor&iacute;a </label>
														<select class="form-control" id="ocupacion" name="ocupacion">
															<option value="DIETETICA-Y-NUTRICION" <?php if($row['ocupacion']=="DIETETICA-Y-NUTRICION" ){ echo 'selected';} ?>>DIETÉTICA Y NUTRICIÓN</option>
															<option value="ENFERMERIA" <?php if($row['ocupacion']=="ENFERMERIA" ){ echo 'selected';} ?>>ENFERMERÍA Y SUS ESPECIALIDADES</option>
															<option value="FARMACIA" <?php if($row['ocupacion']=="FARMACIA" ){ echo 'selected';} ?>>FARMACIA Y SUS ESPECIALIDADES</option>
															<option value="FISIOTERAPIA" <?php if($row['ocupacion']=="FISIOTERAPIA" ){ echo 'selected';} ?>>FISIOTERAPIA</option>
															<option value="LOGOPEDIA" <?php if($row['ocupacion']=="LOGOPEDIA" ){ echo 'selected';} ?>>LOGOPEDIA</option>
															<option value="MEDICINA" <?php if($row['ocupacion']=="MEDICINA" ){ echo 'selected';} ?>>MEDICINA Y SUS ESPECIALIDADES</option>
															<option value="ODONTOLOGIA" <?php if($row['ocupacion']=="ODONTOLOGIA" ){ echo 'selected';} ?>>ODONTOLOGÍA</option>
															<option value="PSICOLOGÍA" <?php if($row['ocupacion']=="PSICOLOGÍA" ){ echo 'selected';} ?>>PSICOLOGÍA</option>
															<option value="TERAPIA-OCUPACIONAL" <?php if($row['ocupacion']=="TERAPIA-OCUPACIONAL" ){ echo 'selected';} ?>>TERAPIA OCUPACIONAL</option>
															<option value="TECNICO-ESPECIALISTA" <?php if($row['ocupacion']=="TECNICO-ESPECIALISTA" ){ echo 'selected';} ?>>TÉCNICO ESPECIALISTA RELACIONADO CON LA SALUD</option>
															
														</select> 
														<span class="help-block" id="error"></span>
													</div>
												</div>
												
												<div class="row">
													<div class="col-lg-12">
														<center><p><h4>---------- Información de contacto ----------</h4></p></center>
													</div>
													<div class="col-lg-12">
														<label>Domicilio</label>
														<input name="domicilio" type="text" class="form-control" value="<?php echo utf8_encode($row['domicilio']);?>" placeholder="Domicilio" required pattern="[0-9A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ðñ/ªº ,.'-]{2,150}">
														<span class="help-block" id="error"></span>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6"><label>Localidad</label>
														<input name="localidad" type="text" class="form-control" value="<?php echo utf8_encode($row['localidad']);?>" placeholder="Localidad" required pattern="[A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ðñ ,.'-]{2,30}">
														<span class="help-block" id="error"></span>
													</div>
													<div class="col-lg-6">
														<label>Provincia</label>
														<input name="provincia" type="text" class="form-control" value="<?php echo utf8_encode($row['provincia']);?>" placeholder="Provincia" required pattern="[A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ðñ ,.'-]{2,30}">
														<span class="help-block" id="error"></span>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4"><label>Código postal</label>
														<input name="cp" type="text" class="form-control" value="<?php echo $row['cp'];?>" placeholder="Código Postal" required pattern="[0-9]{5}">
														<span class="help-block" id="error"></span>
													</div>
													<div class="col-lg-8">
														<label>País</label>
														<input name="pais" type="text" class="form-control" value="<?php echo utf8_encode($row['pais']);?>" placeholder="País" required required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ðñ ,.'-]{2,48}">
														<span class="help-block" id="error"></span>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4">
														<label>Teléfono</label>
														<input name="tlfn" type="text" class="form-control" value="<?php echo $row['tlfn'];?>" placeholder="Teléfono" required pattern="[0-9]{9}">
														<span class="help-block" id="error"></span>
													</div>
													<div class="col-lg-8">
														<label>Correo electrónico</label>
														<input name="mail" type="text" class="form-control" value="<?php echo $row['mail'];?>" placeholder="Correo electrónico" required pattern="^[A-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
														<span class="help-block" id="error"></span>
													</div>
												</div>
											</div>
											<br>
											<div class="form-footer">
												 <center><input class = "btn btn-primary btn-stl btn-lg btn-identif" type="submit" value="Modificar datos" name="update-congresista" ></center>
											</div>
										</form>	
										<?php
											if(isset($_COOKIE['idadm'])){
												echo 	'<div class="row">
															<div class="col-lg-12">
																<center><p><h4>---------- Comunicarse con el congresista ----------</h4></p></center>
															</div>
															<div class="col-lg-12"><br>
																<form method="post" enctype="multipart/form-data" target="_blank" action="mail-congresista.php" id="mail-form" name="mail-form">
																	<input type="text" value="<?php echo $row["id"];?>" name="id" id="idc" hidden=true>
																	<center><input class = "btn btn-primary btn-stl btn-lg btn-identif " type="submit" value="Mandar un correo" name="mail" ></center>
																 </form>
															</div>
															<br>
														</div>';
											}
										?>
										<div class="row">
											<div class="col-lg-12">
													<center><p><h4>---------- Justificante de pago ----------</h4></p></center>
											</div>
											<?php
											
												if($row['pagado']== 'no'){
													
													echo '
														<form method="post" enctype="multipart/form-data" action="up-justificante.php" id="uppago-form" name="uppago-form">
															<input id="id"  name="id" hidden=true value="'.$row["id"].'">
															<input id="nombre"  name="nombre" hidden=true value="'.$row["nombre"].'">
															<input id="dni"  name="dni" hidden=true value="'.$row["dni"].'">
															<input id="mail"  name="mail" hidden=true value="'.$row["mail"].'">
															<input id="apellido1"  name="apellido1" hidden=true value="'.$row["apellido1"].'">
															<input id="apellido2"  name="apellido2" hidden=true value="'.$row["apellido2"].'">
															<div class="col-lg-12"><font color=red><h4>¡Atención! Aún no hemos recibido su justificante de pago. </h4></font><br>
																
																<b>Haga click en examinar... para subir el justificante en formato PDF desde su ordenador.</b><br><br>
																<input class="col-lg-8" type="file" name = "userfile[]" accept=".pdf">
																<br><p class="help-block">Archivo en formato PDF.</p>
															</div>
															<div class="form-footer class="col-lg-12"">
																<br><br><center><input class = "btn btn-primary btn-stl btn-lg btn-identif" type="submit" value="Enviar justificante" name="enviarjustificante" ></center>
																<br>
															</div>
														</form>
														';
												}else{ 
													if($row['pagado']=='si' && $row['pagook']=='no'){
														echo '<div class="col-lg-12"><br><br><h4> Ya hemos recibido su justificante de pago. Recibirá un correo cuando el pago sea verificado por secretaría. Muchas gracias.</h4><br></div>';

														$url1 = "https://docs.google.com/viewer?url=" . "https://".$_SERVER["SERVER_NAME"] . "/".$row['justificante'] . "?ticket=<alf_ticket>&embedded=true";
														echo '
																<div class="col-lg-12">
																
																	<div class="panel-group" id="accordion1">
																		<div class="panel panel-default">
																			<div class="panel-heading heading-acordeon">
																				<h5 class="panel-title">
																					<a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
																					Justificante de pago presentado</a>
																				</h5>
																			</div>
																			<div id="collapse1" class="panel-collapse collapse">
																				<div class="panel-body ">
																					<div class="row">
																						<div class="col-lg-12">
																							<iframe src="'.$url1.'" width="90%" height="780" ></iframe>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																</div>';
														if(isset($_COOKIE['idadm'])){
															echo '<div class="col-lg-12">
																	<font style = "color:red; ">
																			<h5> En caso necesario, puede borrar el justificante de pago. Tenga en cuenta que una vez eliminado no podrá ser recuperado.<br>
																			
																	</font>
																	<font style = "color:white;">
																		<form method="post" enctype="multipart/form-data" action="borrar-justif.php" id="borrar-form" name="borrar-form">
																			<input type="text" value="'. $row["id"] .'" name="id" hidden=true>
																			<input class = "button" style="background: red;" type="submit" value="Borrar justificante" name="alteral" >
																		</form>
																	</font>
																			
																			</h5>
																</div>';
														
															echo ' <form method="post" enctype="multipart/form-data" action="verificarpago.php" id="upcertif-form" name="upcertif-form">
																<input id="id"  name="id" hidden=true value="'.$row["id"].'">
																<input id="nombre"  name="nombre" hidden=true value="'.$row["nombre"].'">
																<input id="mail"  name="mail" hidden=true value="'.$row["mail"].'">
																
																
																	<div class="col-lg-12">
																		<h4><br><b>Para verificar el pago primero revise los documentos. <br>
																		<font color=red> </font></b><br></h4>
																	</div>
																	<br>
																	<div class="form-footer class="col-lg-12"">
																		<br><br><center><input class = "btn btn-primary btn-stl btn-lg btn-identif" type="submit" value="Verificar pago" name="verificarpago" ></center>
																		<br>
																	</div>
																
																	</form>';
														}
													}else{
														if($row['pagook']== 'si'){
															echo '<div class="col-lg-12"><font color=green><h4>¡Ya hemos verificado su pago!. </h4></font><br>
																		<p><h4>Muchas gracias. Esperamos que disfrute y aprenda en el congreso.</h4></p> </div>';
															
															$url = "https://docs.google.com/viewer?url=" . "https://".$_SERVER["SERVER_NAME"] . substr($row['hustificante'],2) . "?ticket=<alf_ticket>&embedded=true";
															
															echo '<div class="col-lg-12">
																	<div class="panel-group" id="accordion">
																		<div class="panel panel-default">
																			<div class="panel-heading heading-acordeon">
																				<h5 class="panel-title">
																					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Justificante de pago presentado</a>
																				</h5>
																				</div>
																				<div id="collapse1" class="panel-collapse collapse">
																					<div class="panel-body ">											  
																						<div class="row">
																							<div class="col-lg-12">
																								<iframe src="'.$url.'" width="90%" height="780" ></iframe>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																';
															if(isset($_COOKIE['idadm'])){
																echo '<div class="col-lg-12">
																		<font style = "color:red; ">
																				<h5> En caso necesario, puede borrar el justificante de pago. Tenga en cuenta que una vez eliminado no podrá ser recuperado.</h5><br>
																		</font>
																		<font style = "color:white;">
																			<form method="post" enctype="multipart/form-data" action="borrar-justif.php" id="borrar-form" name="borrar-form">
																				<input type="text" value="'. $row["id"] .'" name="id" hidden=true>
																				<input class = "button" style="background: red;" type="submit" value="Borrar justificante" name="alteral" >
																			</form>
																		</font>																					
																	</div>';
															}
														}
													}
													
												}
											?>
										</div>
										<br><br>
										<form method="post" enctype="multipart/form-data" action="deletealumn.php" id="alterpass-form" name="alterpass-form">
											<input id="id"  name="id" hidden=true value="<?php echo $row['id'];?>">
											<?php
												if(isset($_COOKIE['idadm'])){
													echo 	'<div class="row">
																<div class="col-lg-12">
																	<center><p><h4>---------- ELIMINAR USUARIO ----------</h4></p></center>
																</div>
															</div>
													<div class="form-footer">
														<p><h4>¡Atención!.Si elimina el usuario, se borrarán todos los datos relacionados de manera permanente.</h4></p>
														 <center><input class = "btn btn-warning " type="submit" value="ELIMINAR USUARIO" name="delete" ></center>
													</div>';
												}
											?>
										</form>
										<br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer>
					<!--<div class="container">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-success">
									<br><br><br>
									</div>
								</div>
							</div>
						</div>
					</div>-->
				</footer>
				<!-- <div class="clearfix visible-sm-block"></div> -->
			</body>
		</div>
	</html>
<?php
	}
} 
?>