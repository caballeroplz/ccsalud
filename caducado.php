<?php
setcookie("idadm","0",time()-(3600*24*30),"/");
setcookie("useradm","0",time()-(3600*24*30),"/");
setcookie("idcong","0",time()-(3600*24*30),"/");
setcookie("usercong","0",time()-(3600*24*30),"/");
?>
<!DOCTYPE html>
<html lang="es">
<div class ="img-bg">
	<head>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
		<meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
		<!--<meta charset="UTF-8">-->
		<link rel="stylesheet" type="text/css" href="css/estilos.css">

		<title>CIVICS -- Su sesi&oacute;n ha caducado</title>
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
				<div class="col-md-3 ">
					<!-- BIENVENIDOS -->
					<?php
						include 'side-bienvenidos.php';
					?>
					
					<!-- PATROCINADORES -->
					<?php
						include 'entidades-colaboradoras.php';
					?>
				</div>
				
				<div  class="col-md-6">
					<div class="panel" style="text-align: justify;">
						<div class="panel-body parrafos">
							
							<h3>Su sesión ha caducado</h3><hr/>
							<h4>Vuelva a iniciar sesión.</h4>
						</div>					
					</div>	
				</div>
				<div class="col-md-3 ">
					<!-- PANEL INICIO DE SESIÓN -->
					<?php
					
						if(!isset($_COOKIE['idadm']) && !isset($_COOKIE['idcong']) && !isset($_COOKIE['ideval'])){
							include 'inicio-sesion.php';
						}
						
					?>
					<!-- noticias -->
					<?php
						include 'side-noticias.php';
					?>
					<!-- FECHAS IMPORTANTES -->
					<?php
						include 'fechas-importantes.php';
					?>
				</div>
			</div>
		</div>
		<footer>
				<?php include "cookies.php"; ?>
		</footer>
	</body>
</div>
</html>
