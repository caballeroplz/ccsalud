<?php
// Acceso identificado
//Conexión a la base de datos
include 'cdb.php';

if(isset($_POST["user"]) && isset($_POST["pass"])){
	                                        
	if($_POST["user"]=="" || $_POST["pass"]== ""){
	
		echo '<script language="javascript">
				alert("Por favor, introduzca un nombre de usuario o contraseña");
			</script>';
		echo '<script> window.location="/index.php"; </script>';
	
	}else{
		
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$sql = "SELECT id, user, pass FROM adm WHERE user = '" . $user . "'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

			$row = $result->fetch_assoc(); 
	
			if($row["pass"] == md5($pass)){
			
				echo '<script> window.location="/cookie-adm.php?id='. $row["id"].'&user='.$row["user"].'"; </script>';
				//conectarse como administradores
				/*echo '<script language="javascript">
				alert("Se está actualizando el apartado de administración. Estará disponible en unas horas. Disculpen las molestias.");
					</script>';
				echo '<script> window.location="/index.php"; </script>';*/
				
			}else{

				echo '<script language="javascript">
				alert("La contraseña no es correcta.");
				</script>';
				echo '<script> window.location="index.php"; </script>';
			}

		} else {

			$sqlc = "SELECT id, user, pass FROM Congresistas WHERE user = '" . $user . "'";
	
			$resultc = $conn->query($sqlc);
			if ($resultc->num_rows > 0){
				$rowc = $resultc->fetch_assoc(); 
		
				if($rowc["pass"] == md5($pass)){
					
					echo '<script> window.location="/cookie-cong.php?id='. $rowc["id"].'&user='.$rowc["user"]. '"; </script>';
					
					/*echo '<script language="javascript">
						alert("Por cuestiones de mantenimiento, el inicio de sesión no está disponible en este momento. Inténtelo en unas horas. Perdone las molestias. Gracias.");
						</script>';*/
					//conectarse como usuario
					echo '<script> window.location="/index.php"; </script>';
				}else{

					//Contraseña incorrecta
					echo '<script language="javascript">
						alert("La contraseña no es correcta.");
					</script>';
					echo '<script> window.location="index.php"; </script>';
				}
			}else{

				$sqle = "SELECT id, user, pass FROM eval WHERE user = '" . $user . "'";
		
				$resulte = $conn->query($sqle);
				if ($resulte->num_rows > 0){

					$rowe = $resulte->fetch_assoc(); 
			
					if($rowe["pass"] == md5($pass)){

						$_SESSION['eval'] = $user;
						$_SESSION['passe'] = md5($pass);
						$_SESSION['ide'] = $rowe["id"];				
						//conectarse como usuario
						echo '<script> window.location="/index.php"; </script>';
					}else{

						//Contraseña incorrecta
						echo '<script language="javascript">
							alert("La contraseña de evaluador no es correcta.");
						</script>';
						echo '<script> window.location="/index.php"; </script>';
					}			
				}else{	
						 
					//No existe usuario ni administrador						
					echo '<script language="javascript">
							alert("Por favor, introduzca un nombre de usuario correcto. Si no dispone de usuario, puede matricularse para acceder al congreso.");
						</script>';
					echo '<script> window.location="/index.php"; </script>';
	
				}					
			}
		}

	}
}
?>
