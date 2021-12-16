<?php
  //echo "entra";
  //conexión base de datos
  include 'cdb.php';

  if(isset($_POST["id"]))
  {
    $id= $_POST["id"];
    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $domicilio = $_POST["domicilio"];
    $cp = $_POST["cp"];
    $localidad = $_POST["localidad"];
    $provincia = $_POST["provincia"];
    $pais = $_POST["pais"];
    $tlfn = $_POST["tlfn"];
    $mail = $_POST["mail"];
    $ocupacion = $_POST["ocupacion"]; 

    $consulta = "UPDATE Congresistas 
                  SET ".
                        "dni = '" . $dni . "'," .
                        "nombre = '" . utf8_decode($nombre) . "'," .
                        "apellido1 = '" . utf8_decode($apellido1)
                        . "'," .
                        "apellido2 = '" . utf8_decode($apellido2) . "'," .
                        "domicilio = '" . utf8_decode($domicilio) . "'," .
                        "cp = '" . $cp . "'," .
                        "localidad = '" . utf8_decode($localidad) . "'," .
                        "provincia = '" . utf8_decode($provincia) . "'," .
                        "pais = '" . utf8_decode($pais) . "'," .
                        "tlfn = '" . $tlfn . "'," .
                        "mail = '" . $mail . "'," .
                        "ocupacion = '" . $ocupacion . "'" .
              		" WHERE id='" . $id . "'";
    $respuesta = new stdClass();
    if($conn->query($consulta)){
	    echo "<script language='javascript'> alert ('Se han guardado los cambios con éxito.'); </script>";
	    //include 'mail-registro.php';
      $respuesta->mensaje = "Se guardo correctamente";
    }
    else {
	    echo "<script language='javascript'> alert('Ha ocurrido un error en el proceso de inscripción. Por favor intentelo de nuevo'); </script>";
      $respuesta->mensaje = "Ocurrió un error";
	  }
    echo json_encode($respuesta);
  }
  mysqli_close($conn);
  echo '<script> window.location="editar-congresista.php"; </script>';

?>
<!--<form>
     <INPUT TYPE="button" VALUE="Atrás" onClick="history.back()">
</form>-->