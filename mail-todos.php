<!DOCTYPE html>
<html lang="es">
	<div class ="img-bg">
		<head><script src="./js/jquery.js"></script>
			<script src="./js/bootstrap.min.js"></script>
			<script src="https://www.w3schools.com/lib/w3.js"></script>
			<link href="css/editor.css" type="text/css" rel="stylesheet">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<script src="js/editor.js"></script>
			<link rel="stylesheet" type="text/css" href="css/estilos.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="./css/estilos.css">
			<title>CIVICS -- Editar Congresista</title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
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
								<form method="post" enctype="multipart/form-data" action="mail-todos-send.php" id="inscrip-form" name="inscrip-form">
									<div class="form-header">
										<div class="row">
											<div class="col-lg-12">
												<center><p><h3>Enviar correo electrónico a todos los congresistas.</h3></p></center>
												<hr/>
											</div>
										</div>
									</div>
									<div class="form-body">
										<div class ="row">
											<div class="col-lg-12">
												<center><p><h4>CORREO DE DESTINATARIO <br>
												Atención: Este mensaje llegará a todos los congresistas que están matriculados.</h4></p></center>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<center><p><h4>ASUNTO DEL MENSAJE</h4></p></center>
											</div>
											<div class="col-lg-12">
												<input class="form-control" id="asunto" name="asunto" placeholder="Asunto del mensaje">
												<span class="help-block" id="error"></span>
											</div>
											<div class="col-lg-12">
												<br><center><p><h4>CUERPO DEL MENSAJE</h4></p></center>
											</div>
											<div class="col-lg-12 nopadding">
												<textarea id="txtEditor" name="txtEditor"></textarea>
												<textarea id="txtEditorContent" name="txtEditorContent" hidden=""></textarea>
											</div>
										</div>
									</div>	
									<div class="form-footer">
										<div class="row">
											<div class="col-lg-12">
												<center><input class = "btn btn-primary btn-stl btn-lg btn-identif" type="submit" value="Enviar mail a todos" name="botonenv" ></center>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</body>
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
	</div>
	<script language="javascript" type="text/javascript">
			$(document).ready( function() {
				$("#txtEditor").Editor();
				$("input:submit").click(function(){
					$('#txtEditorContent').text($('#txtEditor').Editor("getText"));
				});
			});
	</script>
</html>

