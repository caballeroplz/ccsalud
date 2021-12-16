<?php

if(!isset($_COOKIE['idadm'])){
	echo "error";
}else{
	//conexión base de datos
	include './cdb.php';

	//Obtenemos los datos del usuario.
	$sql = "SELECT * FROM adm";
	$result = $conn->query($sql);
	//$mostrarpp = 40;
	$ncong = $result->num_rows; 
	//$actpag = 1;
	if ($result->num_rows > 0) {
		// 
		//$row = $result->fetch_assoc(); 
	//var_dump ($row);
?>

	<html lang="es">
	<div class ="img-bg">
		<head>
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
			<title> CIVICS -- Listado de Administradores</title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
			<link rel="stylesheet" href="./css/bootstrap.min.css">
			<link rel="stylesheet" href="./css/estilos.css">
			<script src="https://www.w3schools.com/lib/w3.js"></script>
		</head id="inicioweb">
		
		<body>
			<?php
				include './header.php';
			?>
			
			<div class="container sombra">
				<div class="row">
					<div class="col-md-3 ">
						<?php
						if($_COOKIE['idadm']){
							include 'menuadm.php';
						}
						?>
					</div>
					<div  class="col-md-9">
						<center><p><h3>Listado de administradores</h3> <a href ="#add-adm" class="btn btn-success" data-toggle="modal" >+ AÑADIR ADMINISTRADOR</a>
						<?php include 'add-administrador.php';?>
						<hr><br>
						<table id="lista-eval" class="display" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nombre</th>
									<th>Apellido 1</th>
									<th>Apellido 2</th>
									<th>Usuario</th>
									<th>Editar</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Id</th>
									<th>Nombre</th>
									<th>Apellido 1</th>
									<th>Apellido 2</th>
									<th>Usuario</th>
									<th>Editar</th>

								</tr>
							</tfoot>
							<tbody>
								<?php
								while($row = $result->fetch_assoc()){

									echo "<tr>" .
												"<td>".$row['id']."</td>" . 
												"<td>".utf8_encode($row['nombre'])."</td>" .
												"<td>".utf8_encode($row['ap1'])."</td>" .
												"<td>".utf8_encode($row['ap2'])."</td>".				
											"<td>".$row['user']."</td>" 							 

												.'<td><form method="post" enctype="multipart/form-data" action="editar-administrador.php" id="alteral-form" name="alteral-form">
												<input type="text" value="'.$row["id"].'" name="idev" hidden=true>
												<input class = "btn btn-primary " type="submit" value="Editar" name="alteral" >
												</form></td>'
																			
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
					
<?php
	}
}
?>
<script>
			$(document).ready(function() {
				$('#lista-eval').DataTable();
			} );
</script>