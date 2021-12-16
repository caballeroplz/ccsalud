<!-- BIENVENIDOS --> 
<?php  
//conexión base de datos
include 'cdb.php';
$sqldcong = "Select * FROM Congresistas WHERE id = " . $_COOKIE['idcong'];
$resultdcong = $conn->query($sqldcong);
$rowdcong = $resultdcong->fetch_assoc();
?>
<!DOCTYPE html>
<div class="panel panel-default panel-izq-stl">
	<div class="panel-heading ">
		<h3 class="text-center"> <strong>Bienvenid@ </strong> <?php echo $_COOKIE['usercong']; ?></h3>
		<center><h5><a href="cerrarsesion.php"><font style="color:white;"> <strong>Cerrar sesión > </strong></font></a></h5></center>
	</div>
	<div class="panel-body panel-interior-stl" style="padding-top:0.4rem">
		<div class="row" width = "100%">
			<div class="col-md-12">
				<nav>
					<ul>
						<li>
							<label>Comunicaciones</label>
							<ul>			
								<li><a href="miscomunicaciones.php"><font style="color:black;">Mis comunicaciones > </font></a></li>
								<!--<li><a href="coposters.php"><font style="color:black;">Comunicaciones como co-autor ></font></a></li>-->
							</ul>
								
						</li>
						<li>
							<label>Ponencias</label>	
							<ul>
								<li><a ><font style="color:red;">Las ponencias estarán disponibles durante la celebración del congreso.</font></a></li>
							</ul>
						</li>
						<li>
							<label>Salas temáticas </label>
							<ul>
								<li>
									<a ><font style = "color: red;">Las salas temáticas estarán disponibles durante la celebración del congreso.</font></a>
								</li>
								<!--<li><a href="sala-tematica.php?sala=Actividad-fisica-y-rehabilitacion">Actividad física y rehabilitación</a></li>
								<li><a href="sala-tematica.php?sala=Cuidados-en-radiologia-y-radioterapia">Cuidados en radiología y radioterapia</a></li>
								<li><a href="sala-tematica.php?sala=Cuidados-medico-quirurgicos">Cuidados médico-quirúrgicos</a></li>
								<li><a href="sala-tematica.php?sala=Enfermeria-del-trabajo-y-prevencion-de-riesgos-lab">Enfermería del trabajo y prevención de riesgos laborales</a></li>
								<li><a href="sala-tematica.php?sala=Enfermeria-familiar-y-comunitaria">Enfermería familiar y comunitaria</a></li>
								<li><a href="sala-tematica.php?sala=Enfermeria-materno-infantil">Enfermería materno-infantil</a></li>
								<li><a href="sala-tematica.php?sala=Epidemiologia-y-Salud-Publica">Epidemiología y Salud Pública</a></li>
								<li><a href="sala-tematica.php?sala=Geriatria">Geriatría</a></li>
								<li><a href="sala-tematica.php?sala=Nutricion-y-dietetica">Nutrición y dietética</a></li>
								<li><a href="sala-tematica.php?sala=Oncologia-y-cuidados-paliativos">Oncología y cuidados paliativos</a></li>
								<li><a href="sala-tematica.php?sala=Salud-Mental">Salud Mental</a></li>
								<li><a href="sala-tematica.php?sala=Urgencias-emergencias-y-cuidados-criticos">Urgencias, emergencias y cuidados críticos</a></li>

								-->											  
							</ul>
						</li>
							<!--<li>
								<label>Actividad posters</label>
								<ul>
									<li>
										<a href="postercongreso1.php"><font style="color:black;">Ver mis posters ></font></a>
									</li>
								</ul>
							</li>-->					 
						<li>
							<label>Mi configuración</label>
							<ul>
								<li><a href="editar-congresista.php"><font style="color:black;">Editar mi perfil ></font></a></li>
							</ul>
						</li>
						<li>
							<label for="ap">Descargas</label>
							<ul>
								<li><a href="/plantilla/plantilla-poster.pptx"><font style="color:black;">Plantilla poster ></font></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<?php/*
				if($rowdcong['nponen']>=2 && $rowdcong['npost']>=20 && ($rowdcong['ncoment']+$rowdcong['npreg'])>=1 && $rowcong['pagado']='si'){
					echo '	<div class"col-md-12">
								<font style="color:green;"><h4>Ya tiene disponibles sus certificados aquí:</h4></font>
								<a class="btn btn-primary btn-stl" href="descarga-certificados.php">Descargar certificados</a>
							</div>';
				}else{
					
					echo '<font style="color:red;"><h4>Usted no cumple todos los requisitos para descargarse los certificados.</h4></font>';
				}*/
			?>
			<div class="col-md-12">
				<h3 class="text-center"> <strong>Tu participación virtual </strong></h3>
				<p><h4 style="text-align: justify;">Para obtener el certificado, es necesario cumplir con una <b>participación mínima</b> durante los días de celebración del congreso.</h4></p>
			</div>
			<div class="col-md-4">
				<br><center>Ponencias<br>visualizadas
				<h2><font <?php if($rowdcong['nponen']>=2){echo 'style = "color:green;"';}?>><?php echo $rowdcong['nponen'];?>0/2</font></h2></center>
			</div>
			<div class="col-md-4">
				<br><center>Posters<br>visualizados
				<h2><font <?php if($rowdcong['npost']>=20){echo 'style = "color:green;"';}?>><?php echo $rowdcong['npost'];?>0/20</font></h2></center>
			</div>
			<div class="col-md-4">
				<br><center>Preguntas/<br>Comentarios
				<h2><font <?php if(($rowdcong['ncoment']+$rowdcong['npreg'])>=1){echo 'style = "color:green;"';}?>><?php echo ($rowdcong['ncoment']+$rowdcong['npreg']);?>/1</font></h2></center>
			</div>
		</div>
	</div>
</div>
