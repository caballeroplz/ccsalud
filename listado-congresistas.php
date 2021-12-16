<?php

if(!isset($_COOKIE['idadm'])){
	echo "error";
}else{
	//conexión base de datos
	include './cdb.php';

	//Obtenemos los datos del usuario.
	$sql = "SELECT * FROM Congresistas";
	$result = $conn->query($sql);
	//$mostrarpp = 40;
	$ncong = $result->num_rows; 
	//$actpag = 1;
	if ($result->num_rows > 0) { 
		//$row = $result->fetch_assoc(); 
		//var_dump ($row);
	?>
<html lang="es">
	<div class ="img-bg">
		<head id="inicioweb">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
			<script src="https://code.jquery.com/jquery-latest.min.js"></script>
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap-social.css">
			<meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/estilos.css" />
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css" />
			<script src="js/jquery.dataTables.min.js"></script>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
			<link rel="stylesheet" href="./css/bootstrap.min.css">
			<link rel="stylesheet" href="./css/estilos.css">
			<script src="https://www.w3schools.com/lib/w3.js"></script>
			<title> CIVICS -- Listado de Congresistas</title>		
		</head >
		<body>
			<?php
				include './header.php';
			?>
			<div class="container sombra">
				<div class="row">
					<?php
					if($_COOKIE['idadm']){
						include 'menuadm.php';
					}
					?>
					</div>
					<div  class="col-md-9">
						<table id="example" class="display" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Id</th>
									<th>DNI</th>
									<th>Nombre</th>
									<th>Apellido 1</th>
									<th>Apellido 2</th>
									<th>Pago</th>
									<th>Perfil</th>
									<th>Mail</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Id</th>
								<th>DNI</th>
								<th>Nombre</th>
								<th>Apellido 1</th>
								<th>Apellido 2</th>
								<th>Pago</th>
								<th>Perfil</th>
								<th>Mail</th>

							</tr>
						</tfoot>
						<tbody>
							<?php
							while($row = $result->fetch_assoc()){
							/*	
								$sqlest1 = "SELECT estado_r, profesor FROM Resumenes WHERE alumno_r = '" . $row['id_alumno'] . "' AND nresumen= 1";
								$resultest1 = $conn->query($sqlest1);
								
								if ($resultest1->num_rows > 0) {
									// 
									$rowest1 = $resultest1->fetch_assoc(); 
									
									if($rowest1['profesor'] == NULL) {
										$br1="#FF6464";
									}else{
										$br1="#000000";
									}

									switch ($rowest1['estado_r']) {
										case 'recibido':
											$cr1="#9ED6F4";
											break;
										case 'pendiente':
											$cr1="#F9CB8E";
											break;
										case 'aceptado':
											$cr1="#AFCC44";
											break;
										case 'rechazado':
											$cr1="#FF6464";
											break;
									}
								}else{
									$cr1="#D2D2D2";
									$br1="#FFFFFF";
								}
	
								$sqlest2 = "SELECT estado_r, profesor FROM Resumenes WHERE alumno_r = '" . $row['id_alumno'] . "' AND nresumen= 2";
								$resultest2 = $conn->query($sqlest2);
								if ($resultest2->num_rows > 0) {
									// 
									$rowest2 = $resultest2->fetch_assoc(); 
									
									if($rowest2['profesor'] == NULL) {
										$br2="#FF6464";
									}else{
										$br2="#000000";
									}
							
									switch ($rowest2['estado_r']) {
										case 'recibido':
											$cr2="#9ED6F4";
											break;
										case 'pendiente':
											$cr2="#F9CB8E";
											break;
										case 'aceptado':
											$cr2="#AFCC44";
											break;
										case 'rechazado':
											$cr2="#FF6464";
											break;
								}
								}else{
									$cr2="#D2D2D2";
									$br2="#FFFFFF";
								}
									
								$sqlestp1 = "SELECT estado_p, profesor FROM Posters WHERE alumno_p = '" . $row['id_alumno'] . "' AND nposter= 1";
								$resultestp1 = $conn->query($sqlestp1);
							
								if ($resultestp1->num_rows > 0) {
									// 
									$rowestp1 = $resultestp1->fetch_assoc(); 
									
									if($rowestp1['profesor'] == NULL) {
										$bp1="#FF6464";
									}else{
										$bp1="#000000";
									}
									
									switch ($rowestp1['estado_p']) {
										case 'recibido':
											$cp1="#9ED6F4";
											break;
										case 'pendiente':
											$cp1="#F9CB8E";
											break;
										case 'aceptado':
											$cp1="#AFCC44";
											break;
										case 'rechazado':
											$cp1="#FF6464";
											break;
									}
								}else{
									$cp1="#D2D2D2";
									$bp1="#FFFFFF";
								}

								$sqlestp2 = "SELECT estado_p ,profesor FROM Posters WHERE alumno_p = '" . $row['id_alumno'] . "' AND nposter= 2";
								$resultestp2 = $conn->query($sqlestp2);
								
								if ($resultestp2->num_rows > 0) {
									// 
									$rowestp2 = $resultestp2->fetch_assoc(); 
									
									if($rowestp2['profesor'] == NULL) {
										$bp2="#FF6464";
									}else{
										$bp2="#000000";
									}
									
									switch ($rowestp2['estado_p']) {
										case 'recibido':
											$cp2="#9ED6F4";
											break;
										case 'pendiente':
											$cp2="#F9CB8E";
											break;
										case 'aceptado':
											$cp2="#AFCC44";
											break;
										case 'rechazado':
											$cp2="#FF6464";
											break;
									}
								}else{
									$cp2="#D2D2D2";
									$bp2="#FFFFFF";
								}
							*/	
								$sqlest2 = "SELECT pagado FROM Congresistas WHERE id = '" . $row['id']."'";
								$resultp = $conn->query($sqlest2);

								if ($resultp->num_rows > 0) {
									// 
									$rowp = $resultp->fetch_assoc(); 
									switch ($rowp['pagado']) {
										;
										case 'no':
											$cp="#F9CB8E";
											break;
										case 'si':
											$cp="#AFCC44";
											break;
										
									}
								}else{
									$cp="#D2D2D2";
								}
								
								$cm="#FFFFFF";
								echo "<tr>" .
											"<td>".$row['id']."</td>" .
											"<td>".$row['dni']."</td>" . 
											"<td>".utf8_encode($row['nombre'])."</td>" .
											"<td>".utf8_encode($row['apellido1'])."</td>" .
											"<td>".utf8_encode($row['apellido2'])."</td>" 
											/*.'<td><form method="post" enctype="multipart/form-data" action="alterr1.php" id="alterr1-form" name="alterr1-form">
											<input type="text" value="'.$row["id_alumno"].'" name="idal" hidden=true>
											<input class = "btn btn-primary " style=" color: '.$br1.';background:'.$cr1.'; border-color:'.$br1.'" type="submit" value="R1" name="verr1" >
											</form></td>'
											.'<td><form method="post" enctype="multipart/form-data" action="alterr2.php" id="alterr2-form" name="alterr2-form">
											<input type="text" value="'.$row["id_alumno"].'" name="idal" hidden=true>
											<input class = "btn btn-primary " style=" color: '.$br2.';background:'.$cr2.'; border-color:'.$br2.'" type="submit" value="R2" name="verr2" >
											</form></td>'
											.'<td><form method="post" enctype="multipart/form-data" action="alterp1.php" id="alterp1-form" name="alterp1-form">
											<input type="text" value="'.$row["id_alumno"].'" name="idal" hidden=true>
											<input class = "btn btn-primary "  style=" color: '.$bp1.';background:'.$cp1.'; border-color:'.$bp1.'" type="submit" value="P1" name="verp1" >
											</form></td>'
											.'<td><form method="post" enctype="multipart/form-data" action="alterp2.php" id="alterp2-form" name="alterp2-form">
											<input type="text" value="'.$row["id_alumno"].'" name="idal" hidden=true>
											<input class = " btn btn-primary  " style=" color: '.$bp2.';background:'.$cp2.'; border-color:'.$bp2.'" type="submit" value="P2" name="verp2" >
											</form></td>'
											*/
											.'<td><form method="post" enctype="multipart/form-data" target="_blank" action="editar-alumno.php" id="alteral-form" name="alteral-form">
											<input type="text" value="'.$row["id"].'" name="idal" hidden=true>
											<input class = "btn btn-primary " style="background:'.$cp.'" type="submit" value="Pago" name="alteral" >
											</form></td>'
											.'<td><form method="post" enctype="multipart/form-data" action="editar-alumno.php" id="alteral-form" name="alteral-form">
											<input type="text" value="'.$row["id"].'" name="idal" hidden=true>
											<input class = "btn btn-primary " type="submit" value="Editar" name="alteral" >
											</form></td>'
											.'<td><form method="post" enctype="multipart/form-data" action="mandamaila.php" id="mail-form" name="mail-form">
											<input type="text" value="'.$row["id"].'" name="idal" id="idal" hidden=true>
											<input class = "btn btn-primary " type="submit" value="Mail" name="mail" >
											</form></td>'
											/*.'<td><form method="post" enctype="multipart/form-data" action="descarga-certificados.php" id="mail-form" name="mail-form">
											<input type="text" value="'.$row["id_alumno"].'" name="idalumno" id="idalumno" hidden=true>
											<input class = "btn btn-primary " type="submit" value="Ver certificados" name="mail" >
											</form></td>'
											*/
									.'</tr>';
										
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<body>
	</div>
</html>
<?php } 
	}
?>
<script>
			$(document).ready(function() {
				$('#example').DataTable();
			} );
</script>