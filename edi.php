<?php
	include 'cdb.php';
	//obtención nombre de páginas
	$sqlnombres = "SELECT nombre FROM Textos";
	$resultnombres = $conn->query($sqlnombres);
	$nombrepag = $_POST['nombretexto'];
	$sqlpag = "SELECT titulo, descripcion, cuerpo FROM Textos WHERE nombre = '" . $nombrepag . "'";
	$resultpag = $conn->query($sqlpag);
	if ($resultpag->num_rows > 0) { 

		$rowpag = $resultpag->fetch_assoc(); 
	}
?>
<html lang="es">
	<head>
		<meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<title> Congreso de Enfermería -- Inicio</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0,maximum-scale=1.0, minimum-scale=1.0">
		<script src="https://www.w3schools.com/lib/w3.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/editor.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="css/editor.css" type="text/css" rel="stylesheet"/>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/editor.js"></script>
				
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
				<div class="col-md-9 ">	
					<?php
						echo $_POST['txtEditorContent'];
						echo $rowpag['cuerpo'];
					?>
					<form method="post"  id="seltext-form" name="seltext-form">
						<input id="sele" name="sele" type="text" value = "<?php echo $_POST['nombretexto'] ;?>">
						<select class="form-control" id="nombretexto" name="nombretexto" >
							<option value="seleccione" >Seleccione un texto...</option>
							<?php 
								while($rownombres = $resultnombres->fetch_assoc()){
							?>	
									<option value= "<?php echo $rownombres['nombre']; ?>" <?php if($_POST['nombretexto']==$rownombres['nombre']){echo 'selected';}?>> <?php echo$rownombres['nombre']; ?> </option>
							<?php	
								} 
							?>
						</select>
						<input type="submit" value="Seleccionar">
					</form>	
					<form id="form" name="form" method="post">
						<div class="col-lg-12 nopadding">
							<textarea id="txtEditor" name="txtEditor"></textarea>
							<textarea id="txtEditorContent" name="txtEditorContent" hidden=""></textarea>
						</div>
						<input type="submit" value="Guardar">
					</form>							
				</div>
			</div>
		</div>
	</body>
	<script language="javascript" type="text/javascript">
		$(document).ready( function() {
			$("#txtEditor").Editor();
			$("input:submit").click(function(){
				$('#txtEditorContent').text($('#txtEditor').Editor("getText"));
			});
		});
	</script>
</html>