<!-- PANEL INICIO DE SESIÓN -->
<div class="panel panel-default  panel-der-stl ">
	<div class="panel-heading "><h3 class="text-center"> Inicio de sesión </h3></div>
		<div class="panel-body panel-interior-stl">
			<form method="post" action="accesoidentificado.php" id="identificacion-form" name="identificacion-form" autocomplete="off">
				<label for="user">Usuario</label>
				<input class="form-control" id="user" name="user" type="text" placeholder="Usuario"  disabled>

				<label for="pass">Contraseña</label>
				<input class="form-control" id="pass" name="pass" type="password" placeholder="Contraseña" disabled>
				<br>
				<input class = "btn btn-primary " type="submit" value="Identificarse" name="identificarse" disabled>
				<br>
				<a href="#"  data-toggle="modal" disabled> ¿Ha olvidado sus datos de acceso? </a>
				
				<!--<div class="checkbox" disabled>
					<label>
						<input type="checkbox" name="recuerdame" id="recuerdame"> 
					Recuérdame</label>
				</div>-->
				<!--<div class="form-group">
					<a href="#acceso" class="btn btn-primary btn-stl btn-lg btn-identif" data-toggle="modal"> Identificarse </a>
					<div class="modal fade" id="acceso">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h3 class="modal-title"> INICIO DE SESIÓN </h3>
								</div>
								<div class="modal-body">
									<p>El inicio de sesión no está disponible en este momento por cuestiones de mantenimiento. </br>
									 Estamos llevando a cabo una actualizando muy importante en la web para mejorar los servicios.Por favor, intentenlo en unas horas. Disculpe las molestias.</p>
								</div>
							</div>
						</div>
					</div>
					<input class = "blanco-stl" type="submit" value "." name="test">
				</div>-->
			</form>
		</div>
	</div>