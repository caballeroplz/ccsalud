<!DOCTYPE html>

<?php
if(!isset($_COOKIE['idadm']) && !isset($_COOKIE['idcong'])){
	echo '<script> window.location="caducado.php"; </script>';
}else{

	$nr = $_GET['nr'];

	include 'cdb.php';
	//DATOS CONGRESISTA
	$sqlc = "SELECT * FROM Congresistas WHERE id = '" . $_COOKIE['idcong'] . "'";
	$resultc = $conn->query($sqlc);
	if ($resultc->num_rows > 0) { 
		$rowc = $resultc->fetch_assoc(); 
	}
	//DATOS RESUMEN
	$sqlr = "SELECT * FROM Resumenes WHERE idc = '" . $_COOKIE['idcong'] . "' AND nr ='". $nr ."'";
	$resultr = $conn->query($sqlr);
	
?>

	<html lang="es">
	<div class ="img-bg">
		<head>
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
		
			<meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
			<!--<meta charset="UTF-8">-->
			<link rel="stylesheet" type="text/css" href="css/estilos.css" />
			<title>CIVICS -- Resumen</title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/estilos.css">
			<script src="https://www.w3schools.com/lib/w3.js"></script>
		</head>
		
		<body>
			<?php
				include 'header.php';
			?>
		
			<div class="container sombra">
				<div class="row">					
					<div  class="col-md-6">
						<div class="panel" style="text-align: justify;">
							<div class="panel-body parrafos">
								<div class="panel" style="text-align: justify;">
									<div class="panel-body parrafos">
										<ul class="nav nav-tabs">
											<li><a href="miscomunicaciones.php">Mis Comunicaciones</a></li>
											<li <?php if($nr==1){echo 'class="active"';} ?>><a href="resumen.php?nr=1">Resumen 1</a></li>
											<li <?php if($nr==2){echo 'class="active"';} ?>><a href="resumen.php?nr=2">Resumen 2</a></li>
											<!--<li<?php //if($np==1){echo 'class="active"';} ?>><a href="poster.php?np=1">Poster 1</a></li>
											<li<?php //if($np==2){echo 'class="active"';} ?>><a href="poster.php?np=2">Poster 2</a></li>-->
										</ul>
										<div class="panel">
											<div class="panel-heading ">
												<h3 class="text-center"> Resumen <?php echo $nr;?> </h3>
											</div>
											<?php
											//SI HA ENTREGADO EL RESUMEN
											if ($resultr->num_rows > 0) { 
												$rowr = $resultr->fetch_assoc();
												$url = "https://docs.google.com/viewer?url=" . "https://".$_SERVER["SERVER_NAME"] ."/resumenes/". $rowc['dni']."-" .$rowr['idc']. "-". $nr .".pdf?ticket=<alf_ticket>&amp;embedded=true";
												
											?>
												<div class="panel-body panel-interior-stl"> 
													<div class="panel-group" id="accordion">
														<div class="panel panel-default">
															<div class="panel-heading heading-acordeon">
																<h5 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Información del Resumen</a>
																</h5>
															</div>
															<div id="collapse1" class="panel-collapse collapse in">
																<div class="panel-body ">
																	<div class="row">
																		<div class="col-lg-3">
																			<label for="Id_r">Id resumen</label>
																			<input id="id" name="id" type="text" class="form-control" value="<?php echo $rowr['id'];?>" disabled>
																			<span class="help-block" id="error"></span>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-12">
																			<label>Título del resumen</label>
																			<input name="titulo" type="text" class="form-control" value="<?php echo utf8_encode($rowr['titulo']);?>" disabled >
																			<span class="help-block" id="error"></span> 
																		</div>
																	</div>
																	<div class="row">
																		<?php include salas-tematicas.php; ?>
																			<div class="col-lg-12">
																				<p><h4>TIPO DE COMUNICACIÓN</h4></p>
																			</div>
																			<div class="col-lg-3">
																				<select class="form-control" id="tipo" name="tipo" disabled>
																					<option value="Caso clínico" <?php if(utf8_encode($rowr['tipo'])=='Caso clínico'){echo 'selected';}?> >Caso clínico</option>
																					<option value="Revisión" <?php if(utf8_encode($rowr['tipo'])=='Revisión'){echo 'selected';}?>>Revisión</option>
																					<option value="Original" <?php if(utf8_encode($rowr['tipo'])=='Original'){echo 'selected';}?>>Original</option>
																				</select> 
																				<span class="help-block" id="error"></span>
																			</div>
																		<div class="col-lg-12">
																			<div>
																				<label for="comalumno" class="control-label"> Comentarios adjuntos.</label>
																			</div>
																			<div class="container" >
																				<textarea width = "80%"  name="comentario" rows="10" cols="95" disabled><?php echo utf8_encode($rowr['comentarios']);?></textarea>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading heading-acordeon">
																<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Correcciones y estado del resumen</a>
																</h4>
															</div>
															<div id="collapse2" class="panel-collapse collapse">
																<div class="panel-body">
																	<div class="row">
																		<div class="col-lg-12">
																			<?php 	
																				switch ($row['estado']){
																					case "ENVIADO":
																						echo 	'<h4>Su resumen ha sido recibido correctamente. Espere a que sea revisado para conocer el resultado de la evaluación. Gracias.</h4>
																								<br><br>
																								<h5>
																									<font style = "color:red;"><br>Si ha cometido algún error al subir el resumen, puede borrarlo aquí :</font>
																									<font style = "color:white;">
																									<form method="post" enctype="multipart/form-data" action="borrar-resumen.php" id="borrar-form" name="borrar-form">
																										<input type="text" value="'. $rowr['id'].'" name="idr" hidden=true>
																										<input class = "button" style="background: red;" type="submit" value="Borrar resumen" name="alteral" >
																									</form>
																								</font>
																								';
																						break;
																					
																					case "PENDIENTE":
																						echo 	'<h4>Su resumen precisa cambios para ser aceptado. Lea los comentarios para ampliar la información.<br> Gracias.
																								<br><br>
																								<center><a href="#subir-resumen-congresista" class="btn btn-primary btn-stl btn-lg btn-identif" data-toggle="modal">Reenvía tu resumen</a></center>';
																						include "subir-resumen-congresista.php";
																						break;
																					
																					case "ACEPTADO":
																						echo 	"<br><h4>¡Enhorabuena!. Su resumen ha sido aceptado. Gracias por su colaboración.<h4><br>";
																						break;
																					
																					case "RECHAZADO":
																						echo 	'<h4>Lo sentimos. Su resumen ha sido rechazado porque no cumple los requisitos.
																								<br>Gracias<br><br>
																								<br><center><a href="#subir-resumen-congresista" class="btn btn-primary btn-stl btn-lg btn-identif" data-toggle="modal">Reenvía tu resumen</a></center>';
																						include "subir-resumen-congresista.php";
																					break;
																				}
																			?>
																			<img src="<?php echo '../img/estados/'. $rowr['estado'] . '.gif';?>" width ="100%">
																		</div>
																		<div class="col-lg-12">
																			<label for="comalumno" class="control-label"> Comentarios sobre la corrección.</label>
																		</div>
																		<div class="col-lg-12">
																			<textarea  name="comalumno" rows="10" cols="95" disabled><?php echo $row['comprofesor'];?></textarea>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-12">
																			<center><p><h4>---------- Documento presentado ----------</h4></p></center>
																		</div>
																		<div class="col-lg-12">
																			<iframe src="<?php echo $url; ?>" width="100%" height="780" ></iframe>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>
											<?php
											//SI NO HA ENTREGADO EL RESUMEN	
											}else{ 
											?>
												<div class="panel-body"><p><h3>Formulario de envío de resumen</h3><hr/></p>
													<!-- form start -->
													<h4><p>Con este formulario se enviará su resumen <?php echo $nr;?></p></h4>
													<form method="post" enctype="multipart/form-data" action="upresumen.php" id="upresumen-form" name="upresumen-form" autocomplete="off">
														<input name="nr" id="nr" type="text" class="form-control" placeholder="nr" value = "<?php echo $nr;?>" hidden >
														<div class="form-header">
														</div>
															<div class="form-body">
																<div class="row">
																	<div class="col-lg-12">
																		<p><h4>AREA TEMÁTICA</h4></p>
																		<p><h4><font color=red> ¡Atención, asegúrese que el area temática seleccionada es correcta!.</font></h4></p>
																	</div>
																	<?php include sala.php;?>
																</div>
																<div class="row">
																	<div class="col-lg-12">
																		<p><h4>TIPO DE COMUNICACIÓN</h4></p>
																	</div>
																	<div class="col-lg-3">
																		<select class="form-control" id="tipo" name="tipo">
																			<option value="Caso clínico" selected>Caso clínico</option>
																			<option value="Revisión" >Revisión</option>
																			<option value="Original" >Original</option>
																		</select> 
																		<span class="help-block" id="error"></span>
																	</div>
																</div>
															<div class="row">
																<div class="col-lg-12">
																	<br><p><h4>ENVÍO DE ARCHIVO</h4></p>
																</div>
																<div class="col-lg-12">
																	<label>Título del resumen</label><input class="form-control" id="titulo" name="titulo" placeholder="Título del resumen" required pattern="[A-Z0-9ÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,300}" title="Debe rellenar el campo CON MAYÚSCULAS">
																	<span class="help-block" id="error"></span>
																</div>
																<div class="col-lg-12">
																	<div>
																		<label>Archivo resumen.</label>
																		<input type="file" name = "userfile[]" accept=".pdf" required>
																		<p class="help-block">Archivo en formato PDF.</p>
																	</div>
																</div>
																<div class="col-lg-12">
																	<div>
																		<label for="comentario" class="control-label">Si tienes algún comentario, duda o aclaración, puedes escribirlo aquí.</label>
																	</div>
																	<textarea  name="comentario" rows="10" cols="95" placeholder="Escribe aquí tu comentario..."></textarea>
																</div>
															</div>
															<div class="form-footer">
																<div class="row">
																	<div class="col-lg-12">
																		<center><input class = "btn btn-primary btn-stl btn-lg btn-identif" type="submit" value="Enviar resumen" name="botonenv"></center>
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>
											<?php	
											}//FIN SI NO HA ENTREGADO RESUMEN
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
		<footer>
			<?php include "cookies.php"; ?>
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
	</div>
</html>
<?php } ?>