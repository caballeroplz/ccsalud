<!DOCTYPE html>
<?php
if(!isset($_COOKIE['idadm']) && !isset($_COOKIE['idcong'])){
	echo '<script> window.location="caducado.php"; </script>';
}else{
	include 'cdb.php';
	//ESTADO RESUMEN 1
	$sqlr1 = "SELECT estado FROM Resumenes WHERE idc = '" . $_COOKIE['idcong'] . "' AND nr ='1'";
	$resultr1 = $conn->query($sqlr1);
	if ($resultr1->num_rows > 0) { 
		$rowr1 = $resultr1->fetch_assoc(); 
		$estador1 = $rowr1['estado'];
	}else{
		$estador1 = "NO ENTREGADO";
	}
	//ESTADO RESUMEN 2
	$sqlr2 = "SELECT estado FROM Resumenes WHERE idc = '" . $_COOKIE['idcong'] . "' AND nr ='2'";
	$resultr2 = $conn->query($sqlr2);
	if ($resultr2->num_rows > 0) { 
		$rowr2 = $resultr2->fetch_assoc(); 
		$estador2 = $rowr2['estado'];
	}else{
		$estador2 = "NO ENTREGADO";
	}
?>
<html lang="es">
	<div class ="img-bg">
		<head>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
		<!--<meta charset="UTF-8">-->
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="https://www.w3schools.com/lib/w3.js"></script>
		<title>CIVICS -- Comunicaciones</title>
	</head>
	
	<body>
		<?php
			include 'header.php';
		?>
		<div class="container sombra">
			<div class="row">
				<div class="col-md-3 ">
				</div>
				<div  class="col-md-6">
					<div class="panel" style="text-align: justify;">
						<div class="panel-body parrafos">
							<div class="panel" style="text-align: justify;">
								<div class="panel-body parrafos">
									<ul class="nav nav-tabs">
										<li class="active"><a href="miscomunicaciones.php">Mis Comunicaciones</a></li>
										<li><a href="resumen.php?nr=1">Resumen 1</a></li>
										<li><a href="resumen.php?nr=2">Resumen 2</a></li>
										<!--<li><a href="poster.php?np=1">Poster 1</a></li>
										<li><a href="poster.php?np=2">Poster 2</a></li>-->
									</ul>
									<div class="row">
										<div class="col-lg-12">	
											<div class="container" style="width:100%" >
												<table class="table" >
													<thead>
														<tr>
															<th></th>
															<th>Estado</th>
															<th>Acción </th>
													  	</tr>
													</thead>
													<tbody>
														<tr>
															<td><strong>Resumen 1</strong></td>
															<?php
																switch ($estador1) {
																	case 'ENVIADO':
																		$cr1="#8ED1F2";
																		break;
																	case 'PENDIENTE':
																		$cr1="#F6B761";
																		break;
																	case 'ACEPTADO':
																		$cr1="#9BBF16";
																		break;
																	case 'RECHAZADO':
																		$cr1="#FF6767";
																		break;
																	case 'NO ENTREGADO':
																	$cr1="#EBEBE4";
																	break;
																}
															?>
															<td style="color:<?php echo $cr1;?>;"><?php echo $estador1;?></td>
															<td><a href="resumen.php?nr=1"><?php if($estado == "NO ENTREGADO"){ echo "SUBIR RESUMEN"; } else{echo "VER RESUMEN";} ?></a></td>
													  	</tr>
													  	<tr>
															<td><strong>Resumen 2</strong></td>
															<?php
																switch ($estador2) {
																	case 'ENVIADO':
																		$cr2="#8ED1F2";
																		break;
																	case 'PENDIENTE':
																		$cr2="#F6B761";
																		break;
																	case 'ACEPTADO':
																		$cr2="#9BBF16";
																		break;
																	case 'RECHAZADO':
																		$cr2="#FF6767";
																		break;
																	case 'NO ENTREGADO':
																	$cr2="#EBEBE4";
																	break;
																}
															?>
															<td style="color:<?php echo $cr2;?>;"><?php echo $estador2;?></td>
															<td><a href="resumen.php?nr=2"><?php if($estado == "NO ENTREGADO"){ echo "SUBIR RESUMEN"; } else{echo "VER RESUMEN";} ?> </a>
														</tr>
													</tbody>
												</table>
											</div>	
											<!--<h4 style="color:red;"><strong>ATENCIÓN: la subida de resúmenes estará activa en los próximos días. Muchas gracias.</strong></h4>-->
										</div>
									</div>		
								</div>
							</div>
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
<?php } ?>