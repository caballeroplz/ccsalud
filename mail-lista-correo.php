<?php
include 'cdb.php';


//Obtenemos los datos del usuario.
$sql = 'SELECT * FROM alumnos';

$result = $conn->query($sql);
var_dump($result);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()){
		
		header("Content-Type: text/html;charset=utf-8");
		$destinatario = $row['mail_a']; 
		$asunto = "Nuevo congreso para profesionales de la salud."; 
		$cuerpo = ' 
					<html> 
						<head> 
							<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
						<title>CIVICS</title> 
						</head> 
						<body> 

						</body> 
					</html> 
				'; 

		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		//dirección del remitente 
		$headers .= "From: CIVICS <no-reply@ccsalud.com>\r\n"; 

		//dirección de respuesta, si queremos que sea distinta que la del remitente 
		//$headers .= "Reply-To: @\r\n"; 

		//ruta del mensaje desde origen a destino 
		//$headers .= "Return-path: @\r\n"; 

		//direcciones que recibián copia 
		//$headers .= "Cc: @\r\n"; 

		//direcciones que recibirán copia oculta 
		//$headers .= "Bcc: @\r\n"; 
		//echo $destinatario.$asunto.$cuerpo.$headers;
		mail($destinatario,utf8_decode($asunto),utf8_decode($cuerpo),$headers);
		//echo $row['mail_a']. '<br>';
	}
	
}

echo "<script language='javascript'> alert ('Los correos se han enviando con éxito.'); </script>";
echo '<script> window.location="index.php"; </script>';

?>