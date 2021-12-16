<?php
//conexión base de datos
include 'cdb.php';

$nombre = utf8_decode($_POST["nombre"]);
$ap1 = utf8_decode($_POST["ap1"]);
$ap2 = utf8_decode($_POST["ap2"]);
$user = $_POST["user"];
$pass = $_POST["pass"];
$passcif = md5($pass);

$consultauser = "SELECT user FROM Congresistas WHERE user = '" . $user;
$resultado = $conn->query($consultauser);

if ($resultado->num_rows <= 0) {
  $consulta = "INSERT INTO adm 
		              (id, nombre, ap1, ap2, user , pass) 
		          VALUES ('', '$nombre', '$ap1', '$ap2', '$user' , '$passcif')";

  $respuesta = new stdClass();
 
  if($conn->query($consulta)){
  	echo "<script language='javascript'> alert ('Se ha dado de alta el administrador con éxito'); </script>";
	  //include 'mail-nuevo-admin.php';
    $respuesta->mensaje = "Se guardo correctamente";
  }
  else {
	  echo "<script language='javascript'> alert('Ha ocurrido un error en el proceso de inscripción. Por favor intentelo de nuevo'); </script>";
    $respuesta->mensaje = "Ocurrió un error";
  }
  echo json_encode($respuesta);
  mysqli_close($conn);

}else{
	echo "<script language='javascript'> alert('El nombre de usuario ya está en uso. Por favor introduzca otro distinto.'); </script>";
}
echo '<script> window.location="listado-administradores.php"; </script>';
?>