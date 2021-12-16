<?php
	if(!isset($_SESSION['ida']) && !isset($_SESSION['idc'])){
	
		echo "error";
	}else{
	
		//conexión base de datos
		include 'cdb.php';

		if(isset($_SESSION['idcongresista'])){
	
			$congresista = $_SESSION['idcongresista'];
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
						<link rel="stylesheet" type="text/css" href="css/estilos.css" />
					
						<script src="./js/jquery.js"></script>
						<script src="./js/bootstrap.min.js"></script>
						<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
						<link rel="stylesheet" href="./css/bootstrap.min.css">
						<link rel="stylesheet" href="./css/estilos.css">
						<script src="https://www.w3schools.com/lib/w3.js"></script>
						<title>CIVICS -- Editar Congresista</title>
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
									if(isset($_COOKIE['idadm'])){
										include 'menuadm.php';
									}
									?>
								</div>
							<div  class="col-md-6">
							<div class="panel" style="text-align: justify;">
								<div class="panel-body parrafos">
									<form method="post" enctype="multipart/form-data" action="update-administrador.php" id="update-congresista-form" name="update-congresista-form" autocomplete="off">
										<div class="form-header">
		
										</div>
										<div class="form-body">
											<div class="row">
												<div class="col-lg-12">
													<center><p><h4>---------- Datos personales ----------</h4></p></center>
												</div>
												<br>
												<div class="col-lg-6">
													<label for="id">ID Administrador</label>
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
										</div>
										<br>
										<div class="form-footer">
											 <center><input class = "btn btn-primary btn-stl btn-lg btn-identif" type="submit" value="Modificar datos" name="update-congresista" ></center>
										</div>
									</form>	
									<br><br>
									<form method="post" enctype="multipart/form-data" action="deletealumn.php" id="alterpass-form" name="alterpass-form">
										<input id="id"  name="id" hidden=true value="<?php echo $row['id'];?>">
										<?php
											if(isset($_SESSION['ida'])){
												echo '<div class="row">
														<div class="col-lg-12">
															<center><p><h4>---------- ELIMINAR ADMINISTRADOR ----------</h4></p></center>								 
														</div>		
													</div>
										
													<div class="form-footer">
													
														<center><input class = "btn btn-warning " type="submit" value="ELIMINAR USUARIO" name="delete" ></center>
													</div>';
											}
										?>
									</form>
									<br>
								</div>
							</div>
						</div>

						<div class="col-md-3 ">
						</div>
					</body>
				</div>
			</html>
<?php 	
		}
	}
?>