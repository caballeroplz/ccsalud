<?php 
setcookie("idadm","0",time()-(3600*24*30),"/");
setcookie("useradm","0",time()-(3600*24*30),"/");
setcookie("idcong","0",time()-(3600*24*30),"/");
setcookie("usercong","0",time()-(3600*24*30),"/");
echo '<script> window.location="/index.php"; </script>';
?>