<?php

//conexión base de datos
include 'cdb.php';

if(isset($_POST["id"]))
{
	$id = $_POST["id"];
	$dni = $_POST["dni"];
	$nombre = $_POST["nombre"];
	$mail = $_POST["mail"];
	$apellido1 = $_POST["apellido1"];
	$apellido2 = $_POST["apellido2"];

}

var_dump($_POST);

$maxlimit = 5000000000; // Máximo límite de tamaño (en bits)
$allowed_ext = "pdf"; // Extensiones permitidas (usad una coma para separarlas)
$overwrite = "yes"; // Permitir sobreescritura? (yes/no)
$match = ""; 

// SUBIDA JUSTIFICANTES
$folderjustif = "justificantes/"; // Carpeta a la que queremos subir los archivos

$filesizejustif = $_FILES['userfile']['size'][0]; // toma el tamaño del archivo
$filenamejustif = strtolower($_FILES['userfile']['name'][0]); // toma el nombre del archivo y lo pasa a minúsculas
if(!$filenamejustif || $filenamejustif==""){ // mira si no se ha seleccionado ningún archivo
   $error = "- Ningún archivo selecccionado para subir.<br>";
   
}elseif(file_exists($folderjustif.$filenamejustif) && $overwrite=="no"){ // comprueba si el archivo existe ya
   $error = "- El archivo <b>$filenamejustif</b> ya existe<br>";
   
}

// comprobar tamaño de archivo
if($filesizejustif < 1){ // el archivo está vacío
   $error .= "- Archivo vacío.<br>";
   
}elseif($filesizejustif > $maxlimit){ // el archivo supera el máximo
   $error .= "- Este archivo supera el máximo tamaño permitido.<br>";
   
}

$file_ext = preg_split("/\./",$filenamejustif); // aquí no tengo claro lo que hace xD
$allowed_ext = preg_split("/\,/",$allowed_ext); // ídem, algo con las extensiones
foreach($allowed_ext as $ext){
   if($ext==$file_ext[1]) $match = "1"; // Permite el archivo
}

// Extensión no permitida
if(!$match){
   $error .= "- Este tipo de archivo no está permitido: $filenamejustif<br>";
   
}

if($error){
   print "Se ha producido el siguiente error al subir el archivo:<br> $error"; // Muestra los errores
   
}else{
			
   if(move_uploaded_file($_FILES['userfile']['tmp_name'][0], $folderjustif.$dni."-".$id."-justificante.pdf")){ // Finalmente sube el archivo
	  
	  print "<b>$filenamejustif</b> se ha subido correctamente!"; //el mensaje que saldra cuando el archivo este subido
	  $nombrejustificante = $folderjustif.$dni."-".$id."-justificante.pdf";
	  $consulta = "UPDATE Congresistas SET ".
				"justificante = '" . $nombrejustificante . "'," .
				"pagado = 'si'" .		
		" WHERE id='" . $id. "'";
		

	  $respuesta = new stdClass();
 
		if($conn->query($consulta)){
			echo "<script language='javascript'> alert ('Se ha subido el justificante con éxito, En unos momentos le llegará un correo para confirmarlo.'); </script>";
			include 'mail-justificante.php';
	
			$respuesta->mensaje = "Se guardo correctamente";
	  
		}else {
			echo "<script language='javascript'> alert('Ha ocurrido un error en la subida del archivo. Por favor intentelo de nuevo'); </script>";
			$respuesta->mensaje = "Ocurrió un error";
			
		}
	}else{
			print "Error! Puede que el tamaño supere el máximo permitido por el servidor. Inténtelo de nuevo."; // Otro error
			
	}
}


  //echo json_encode($respuesta);


mysqli_close($conn);
echo '<script> window.location="editar-congresista.php"; </script>';


?><!--<form>
     <INPUT TYPE="button" VALUE="Atrás" onClick="history.back()">
</form>--> 