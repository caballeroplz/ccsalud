
<?php

$servername = "db729421691.db.1and1.com";
$username = "dbo729421691";
$password = "xxxxxxxxxx";
$dbname = "db729421691";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);


// Comprobación conexión
if ($conn ->connect_error) {
  die("Connection failed: " . $conn ->connect_error);
}

?>