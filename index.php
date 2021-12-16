<!DOCTYPE html>
<?php
	include 'cdb.php';
	//Obtenemos el nombre de la página para recuperar el contenido del cuerpo.
	$nombrepag = $_GET['nombrepag'];
	$sql = "SELECT titulo, descripcion, cuerpo FROM Textos WHERE nombre = '" . $nombrepag . "'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) { 
		$row = $result->fetch_assoc(); 
	}
?>

<html lang="es">
	<div class ="img-bg">
		<head>
			<link rel="stylesheet" href="./css/font-awesome.min.css">
			<link rel="stylesheet" href="./css/bootstrap-social.css">
			
			<meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/estilos.css" />
			
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			
			<title> CIVICS -- <?php echo $nombrepag; ?></title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/estilos.css">
			<script src="https://www.w3schools.com/lib/w3.js"></script>
		</head >
		
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
						<!-- PATROCINADORES -->
						<?php
							include 'entidades-colaboradoras.php';
						?>
					</div>
					<!--mostramos el contenido del cuerpo según el nombre de la página.-->
					<div  class="col-md-6">
						<div class="panel" style="text-align: justify;">
							<div class="panel-body parrafos">
								<h4><?php echo utf8_encode($row["cuerpo"]); ?></h4></p>
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
						<!-- NOTICIAS -->
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
		<body>
	</div>
</html>
