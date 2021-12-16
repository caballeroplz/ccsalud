<!DOCTYPE html>
<html>
	<head>
		<style> 
			input:invalid {
			border: 2px solid #ff0000;
			}
		</style>
	</head>
	<body>
		<div class="modal fade " id="add-adm" >
			<div class="modal-dialog">
				<div class="modal-content inscripcion-stl">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title"> FORMULARIO DE ALTA DE NUEVO ADMINISTRADOR</h3>
					</div>
					<div class="modal-body">
						<!-- form start -->
						<form method="post" enctype="multipart/form-data" action="save-adm.php" id="inscrip-form" name="inscrip-form" autocomplete="off">
							<div class="form-body">
								<div class="row">
									<div class="col-lg-12">
										<center><p><h4>Datos personales del nuevo adminstrador</h4></p></center>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<label for="nombre"> Nombre</label>
										<input name="nombre" type="text" class="form-control" placeholder="Nombre" required pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,50}" title="Debe rellenar el campo CON MAYÚSCULAS">
										<span class="help-block" id="error"></span> 
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<label for="ap1"> Primer apellido</label>
										<input name="ap1" type="text" class="form-control" placeholder="Primer apellido" required pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,50}" title="Debe rellenar el campo CON MAYÚSCULAS">
										<span class="help-block" id="error"></span>
									</div>
									<div class="col-lg-6">
										<label for="ap2"> Segundo apellido</label>
										<input name="ap2" type="text" class="form-control" placeholder="Segundo apellido" pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇñŒÆČŠŽ∂ðñ/ªº ,.'-]{2,50}" title="Debe rellenar el campo CON MAYÚSCULAS">
										<span class="help-block" id="error"></span>
									</div>
								</div>
								<!--<div class="row">
									<div class="col-lg-12">
									<input name="ocupacion_a" type="text" class="form-control" placeholder="Ocupación" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ñð ,.'-]{2,30}">
									<span class="help-block" id="error"></span>
									</div>
								</div>-->
								<div class="row">
									<div class="col-lg-12">
										<p><h3>Configuración de acceso al Congreso Virtual</h3></p>
									</div>
									<div class="form-group col-lg-6">
										<label for="user"> Nombre de usuario</label>
											<div class="input-group">
												<div class="input-group-addon">
													<span class="glyphicon glyphicon-user"></span>
												</div>
											<input name="user" type="text" class="form-control" placeholder="Nombre de usuario" required pattern="[A-Za-z0-9_-]{3,15}">
										</div>  
										<span class="help-block" id="error"></span>                    
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6">
										<label for="pass"> Contraseña</label>
										<div class="input-group">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-lock"></span>
											</div>
											<input name="pass" id="pass" type="password" class="form-control" placeholder="Contraseña" required pattern="[A-Za-z0-9!?-+]{8,15}" title="La contaseña ha de tener de 8 a 12 caracteres (Puede contener mayúsculas, minúsculas, números y los caracteres !?-) ">
										</div>  
										<span class="help-block" id="error"></span>                    
									</div>
									<div class="form-group col-lg-6">
										<label for="rpass">Repetir contraseña</label>
										<div class="input-group">
											<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
											<input name="rpass" type="password" class="form-control" placeholder="Repetir contraseña" required pattern="[A-Za-z0-9!?-+]{8,15}">
									</div>  
										<span class="help-block" id="error"></span>                    
									</div>
								</div>
							</div>
							<div class="form-footer">
									<center><input class = "btn btn-primary btn-stl btn-lg btn-identif" type="submit" value="Alta evaluador" name="Altaeval"></center>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>