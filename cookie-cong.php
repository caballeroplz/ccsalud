<?php 
setcookie("idcong",$_GET['id'],time()+3600,"/");
setcookie("usercong",$_GET['user'],time()+3600,"/");
echo '<script> window.location="index.php"; </script>';
?>