<?php
if(!isset($_COOKIE['idadm']) && !isset($_COOKIE['idcong'])){
	echo '<script> window.location="caducado.php"; </script>';
}else{

	//conexión base de datos
	include 'cdb.php';

	$idc = $_COOKIE['idcong'];
	
	$titulo = utf8_decode($_POST["titulo"]);
	$resumen = $_FILES['userfile'];
	$sala =  utf8_decode($_POST["sala"]);
	$comentario = utf8_decode($_POST["comentario"]);
	$tipo = utf8_decode($_POST['tipo']);
	
	$sqlc = "SELECT dni, mail FROM Congresistas WHERE id ='". $idc . "'";
	$result = $conn->query($sqlc);
	if ($result->num_rows > 0) { 
		$row = $result->fetch_assoc(); 
	}
	$nr = $_POST['nr'];
	$hoy = date("Ymd");
	$maxlimit = 50000000; // Máximo límite de tamaño (en bits)
	$allowed_ext = "pdf"; // Extensiones permitidas (usad una coma para separarlas)
	$overwrite = "yes"; // Permitir sobreescritura? (yes/no)
	$match = ""; 
	$nombreresumen = "NULL";
	// SUBIDA JUSTIFICANTES
	$folderresumen = "./resumenes/"; // Carpeta a la que queremos subir los archivos 

	$filesizeresumen = $_FILES['userfile']['size'][0]; // toma el tamaño del archivo
	$filenameresumen = strtolower($_FILES['userfile']['name'][0]); // toma el nombre del archivo y lo pasa a minúsculas
	if(!$filenameresumen || $filenameresumen==""){ // mira si no se ha seleccionado ningún archivo
	   $error = "- Ningún archivo selecccionado para subir.<br>";
	   
	}elseif(file_exists($folderresumen.$filenameresumen) && $overwrite=="no"){ // comprueba si el archivo existe ya
	   $error = "- El archivo <b>$filenameresumen</b> ya existe<br>";
	   
	} 
 
	// comprobar tamaño de archivo
	if($filesizeresumen < 1){ // el archivo está vacío
	   $error .= "- Archivo vacío.<br>";
	   
	}elseif($filesizeresumen > $maxlimit){ // el archivo supera el máximo
	   $error .= "- Este archivo supera el máximo tamaño permitido.<br>";
	   
	}

	$file_ext = preg_split("/\./",$filenameresumen); 
	$allowed_ext = preg_split("/\,/",$allowed_ext);
	foreach($allowed_ext as $ext){
	   if($ext==$file_ext[1]) $match = "1"; // Permite el archivo
	}

	// Extensión no permitida
	if(!$match){
	   $error .= "- Este tipo de archivo no está permitido: $filenameresumen<br>";
	   
	}

	if($error){
	   print "Se ha producido el siguiente error al subir el archivo:<br> $error"; // Muestra los errores
	   
	}else{
		
		$nombreresumen = $folderresumen.$row['dni']."-". $idc. "-". $nr .".pdf";
		echo $nombreresumen;
	   if(move_uploaded_file($_FILES['userfile']['tmp_name'][0], $nombreresumen)){ // Finalmente sube el archivo
		 // print "<b>$filenameresumen</b> se ha subido correctamente!"; //el mensaje que saldra cuando el archivo este subido
		  
		 
		  $consulta = "INSERT INTO Resumenes 
		(id, idc, nr , tipo,  sala, titulo, fecha, modificado, nmodificado, estado, comentarios) 
		VALUES ( '' , $idc , '$nr', '$tipo', '$sala', '$titulo', '$hoy', '$hoy' , 1 , 'ENVIADO','$comentario')";

		  $respuesta = new stdClass();
		 
		  if($conn->query($consulta)){
			echo "<script language='javascript'> alert ('El envio del resumen se ha realizado con éxito, En unos momentos le llegará un correo para confirmarlo. Guárdelo como justificante de envío.'); </script>";
			//include 'mail-resumen-env.php';
			
			$respuesta->mensaje = "Se guardo correctamente";
			
		  }
		  else {
			echo "<script language='javascript'> alert('Ha ocurrido un error en el envío del resumen. Por favor intentelo de nuevo'); </script>";
			$respuesta->mensaje = "Ocurrió un error";
			
		  }
		  
		  
		  
		  
	   }else{
		  echo "<script language='javascript'> alert('Error! Puede que el tamaño supere el máximo permitido por el servidor. Inténtelo de nuevo.'); </script>"; // Otro error
		  
	   }
	}
  echo json_encode($respuesta);
mysqli_close($conn);
echo '<script> window.location="resumen.php"; </script>';

}

?>