<!-- BIENVENIDOS --> 
<!DOCTYPE html>
<div class="panel panel-default panel-izq-stl">
	<div class="panel-heading "><h3 class="text-center"> <strong>Bienvenid@ </strong> <font style="color:black;"> <?php echo $_COOKIE['useradm']; ?> </font></h3>
		<center><h5><a href="/cerrarsesion.php"> <font style="color:black;">Cerrar sesión</font></a></h5></center>
	</div>
	<div class="panel-body panel-interior-stl" style = "padding-top:0.30rem;">
		<div class="wrapper">
			<nav class=" navbar navbar-default ">
				<ul>
					<li>
						<label>Congresistas</label>
							<div>
								<ul>
									<li><a href="listado-congresistas.php"><font style="color:black;">Listado congresistas ></font></a></li>
									<!--<li><a href="listado-consultas.php"><font style="color:black;">Consultas ></font></a></li>
									<li><a href="limpieza.php"><font style="color:black;">Limpieza de congresistas ></font></a></li>
									<li><a href="noob.php"><font style="color:black;">Congresistas sin objetivos ></font></a></li>-->
								</ul>
							</div>
					</li>
					<li>
						<label for="st">Salas temáticas </label>
						<div>
							<ul>
								<li><a href=""><font style="color:black;">Salas (no disponible)></font></a></li>
								<!--<li><a href="#">Ver todas</a></li>
								<li><a href="sala-tematica.php?sala=Actividad-fisica-y-rehabilitacion">Actividad física y rehabilitación</a></li>
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
								<li><a href="sala-tematica.php?sala=Urgencias-emergencias-y-cuidados-criticos">Urgencias, emergencias y cuidados críticos</a></li>-->
							</ul>
						</div>
					</li>
					<li>
						<label for="pon">Ponencias</label>
						<div>
							<ul>
								<li><a href=""><font style="color:black;">Ver ponencias (no disponible)></font></a></li>
							</ul>
						</div>
					</li>
					<li>
						<label for="ad">Administradores</label>
						<div>
							<ul>
								<li><a href="listado-administradores.php"><font style="color:black;">Listado administradores ></font></a></li>
								<!--<li><a href="#">Añadir administrador</a></li>-->
							</ul>
						</div>
					</li>
					<li>
						<label for="ev">Evaluadores</label>
						<div>
							<ul>
								<li><a href="listadoeval.php"><font style="color:black;">Listado evaluadores ></font></a></li>
								<!--<li><a href="#">Añadir evaluador</a></li>-->

							</ul>
						</div>
					</li>
					<li>
						<label for="m">Envio de correos</label>
						<div>
							<ul>
								<li><a href="mail-todos.php"><font style="color:black;">Envío a todos ></font></a></li>
								<li><a href="mail-masivo-antiguos.php"><font style="color:black;">Masivo antiguos congresistas ></font></a></li>
								<!--<li><a href="#">Envío con filtro ></a></li>-->
							</ul>
						</div>
					</li>
					<li>
						<label for="perf">Mi configuración</label>
						<div>
							<ul>
								<li><a href="editar-administrador.php"><font style="color:black;">Editar mi perfil ></font></a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>  
		<!--<nav class="navbar navbar-default menuu" role="navigation" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<span class="visible-xs navbar-brand">Sidebar menu</span>
			</div>
			<center>
				<ul  class="nav menu">
				<center> Gestión de alumnos</center>
				<li><a href="listado-al.php"><h4>Listado alumnos</h4></a></li>
				<ul class="nav menu">
					<li><h4>Consultas</h4>
						<li><a href="envio-resumen.php"><h4>Pagos</h4></a></li>
						<li><a href="envio-resumen.php"><h4>Resúmenes</h4></a></li>
						<li><a href="envio-resumen.php"><h4>Posters</h4></a></li>
					</li>
				</ul>
				<li><a href="envio-resumen.php"><h4>Envío de resúmenes</h4></a></li>
				<li><a href="#" onclick = "alert('El envío de posters estará disponible en las próximas horas.')"><h4>Envio de posters</h4></a></li>
				<li><a href="#" onclick = "alert('¡Las salas temáticas están a punto de abrirse!.Podrá ver y comentar los posters de los demás participantes del congreso.')"><h4>Salas temáticas</h4></a></li>
				<li class="divider"></li>
				<li><a href="editar-adm.php"><h4>Editar mi perfil</h4></a></li>
				
				</ul>
			</center>
		</nav>-->
	</div>
</div>