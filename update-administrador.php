<?php
  //echo "entra";
  //conexión base de datos
  include 'cdb.php';

  if(isset($_POST["id"]))
  {
    $id= $_POST["id"];
    
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];

  $consulta = "UPDATE adm SET ".				
                  "nombre = '" . utf8_decode($nombre) . "'," .
                  "ap1 = '" . utf8_decode($apellido1). "'," .
                  "ap2 = '" . utf8_decode($apellido2) . "'," .		
            " WHERE id='" . $id . "'";

    $respuesta = new stdClass();
    if($conn->query($consulta)){
      echo "<script language='javascript'> alert ('Se han guardado los cambios con éxito.'); </script>";
      //include 'mail-registro.php';
      $respuesta->mensaje = "Se guardo correctamente";
    }
    else {
      echo "<script language='javascript'> alert('Ha ocurrido un error. Por favor intentelo de nuevo'); </script>";
      $respuesta->mensaje = "Ocurrió un error";
    }
    echo json_encode($respuesta);
  }
  mysqli_close($conn);
  echo '<script> window.location="editar-administrador.php"; </script>';
?>
<!--<form>
     <INPUT TYPE="button" VALUE="Atrás" onClick="history.back()">
</form>-->