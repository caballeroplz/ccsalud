<?php
	//conexión base de datos
	include 'cdb.php';

	if(isset($_POST["dni"]))
	{
		$dni = $_POST["dni"];
		$nombre = utf8_decode($_POST["nombre"]);
		$ap1 = utf8_decode($_POST["ap1"]);
		$ap2 = utf8_decode($_POST["ap2"]);
		$ocupacion = utf8_decode($_POST["ocupacion"]);
		$domicilio =utf8_decode($_POST["domicilio"]);
		$cp = $_POST["cp"];
		$localidad = utf8_decode($_POST["localidad"]);
		$provincia = utf8_decode($_POST["provincia"]);
		$pais = utf8_decode($_POST["pais"]);
		$tlfn = $_POST["tlfn"];
		$mail = $_POST["mail"];
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$passcif = md5($pass);
		$hoy = date("Ymd");

		$consultauser = "SELECT user FROM Congresistas WHERE user = '" . $user . "'";
		$resultado = $conn->query($consultauser);
		if ($resultado->num_rows <= 0) {
			$consulta = "INSERT INTO Congresistas 
							(dni, nombre, apellido1, apellido2, ocupacion, domicilio, localidad, provincia, pais, cp, tlfn, mail, user, pass, fecha) 
						VALUES ('$dni', '$nombre', '$ap1', '$ap2', '$ocupacion', '$domicilio',  '$localidad', '$provincia', '$pais', '$cp', '$tlfn', '$mail', '$user', '$passcif', '$hoy')";
			if($conn->query($consulta)){
				echo "<script language='javascript'> alert ('La inscripción se ha realizado con éxito. En unos momentos le llegará un correo de confirmación recordándole los datos de acceso que ha introducido'); </script>";
				include 'mail-registro.php';
			}
			else {
				echo "<script language='javascript'> alert('Ha ocurrido un error en el proceso de inscripción. Por favor intentelo de nuevo'); </script>";
			}
			}else{
				echo "<script language='javascript'> alert('Ha ocurrido un error en el proceso de inscripción. Por favor intentelo de nuevo'); </script>";
				
			}
		}
		else{
			echo "<script language='javascript'> alert('El nombre de usuario ya está en uso. Por favor introduzca otro distinto.'); </script>";
		}

	mysqli_close($conn);
	echo '<script> window.location="/index.php"; </script>';
?>