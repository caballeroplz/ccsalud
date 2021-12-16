<?php 
setcookie("idadm",$_GET['id'],time()+(3600*24*30),"/");
setcookie("useradm",$_GET['user'],time()+(3600*24*30),"/");
echo '<script> window.location="index.php"; </script>';
?>