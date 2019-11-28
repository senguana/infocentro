<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div  id="error" class="btn-danger" style="display: none; height: 30px; padding: 5px; text-align: center; border-radius: 2px;">	
				</div>
			
				
				<form id="guardar_usuario" name="guardar_usuario" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group form-inline">
								<label for="dni_usua"  class="col-md-3 col-form-label">DNI</label>
								<div class="col-md-9 p-0">
									<input type="hidden" name="id_user"  class="form-control">
									<input type="number" class="form-control input-full" name="dni_usua" id="dni" maxlength="12" placeholder="Ingrese nùmero de cedula" ><i>(Máximo 10 dígitos)</i>
								</div>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group form-inline">
								<label for="nombre_usua"  class="col-md-3 col-form-label">Nombre</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="nombre_usua"   placeholder="Ingrese nombre" >
								</div>
							</div>
						
							<div class="form-group form-inline">
								<label for="correo_usua"  class="col-md-3 col-form-label">Correo</label>
								<div class="col-md-9 p-0">
									<input type="email" class="form-control input-full" name="correo_usua"  placeholder="Ingrese correo">
								</div>
							</div>
							<div class="form-group form-inline">
								<label for="usuario_usua"  class="col-md-3 col-form-label">Usuario</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="usuario_usua" placeholder="usuario">
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group form-inline">
								<label for="apell_usua"  class="col-md-3 col-form-label">Apellido</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="apell_usua" placeholder="Ingrese apellido" >
								</div>
							</div>
							<div class="form-group form-inline">
								<label for="genero_usua"  class="col-md-3 col-form-label">Gènero</label>
								<div class="col-md-9 p-0">
									<select class="form-control input-full" name="genero_usua" >
										<option value="0" selected>Seleccionar...</option>
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
									
									</select>
								</div>
							</div>
	
							<div class="form-group form-inline">
								<label for="password_usua"  class="col-md-3 col-form-label">Password</label>
								<div class="col-md-9 p-0">
									<input type="password" class="form-control input-full" name="password_usua" placeholder="************" >
								</div>
							</div>				
						</div>

					</div>
					<div class="modal-footer">
						<button type="submit" id="guardar_datos"  class="btn btn-primary">Nuevo usuario</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>


<!-- MODAL ACTUALIZAR  -->
<div class="modal fade  bd-example-modal-lg" id="EditUsuario">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div  id="success" class="btn-success" style="display: none; height: 30px; padding: 5px; text-align: center; border-radius: 2px;">	
				</div>
				<form id="editar_usuario" name="editar_usuario" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<div class="col-sm-6">
							<p id="error"></p>
							<div class="form-group form-inline">
								<label for="dni_usua"  class="col-md-3 col-form-label">DNI</label>
								<div class="col-md-9 p-0">
									<input type="hidden" name="id_user" id="id_user" class="form-control">
									<input type="text" class="form-control input-full" name="dni_usua" id="dni_usua" placeholder="Ingrese nùmero de cedula" required="">
								</div>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group form-inline">
								<label for="nombre_usua"  class="col-md-3 col-form-label">Nombre</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="nombre_usua" id="nombre_usua" placeholder="Ingrese nombre" required>
								</div>
							</div>
						
							<div class="form-group form-inline">
								<label for="correo_usua"  class="col-md-3 col-form-label">Correo</label>
								<div class="col-md-9 p-0">
									<input type="email" class="form-control input-full" name="correo_usua" id="correo_usua" placeholder="Ingrese correo" required>
								</div>
							</div>
							
						</div>
						<div class="col-sm-6">
							<div class="form-group form-inline">
								<label for="apell_usua"  class="col-md-3 col-form-label">Apellido</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="apell_usua" id="apell_usua" placeholder="Ingrese apellido" required>
								</div>
							</div>
							<div class="form-group form-inline">
								<label for="genero_usua"  class="col-md-3 col-form-label">Gènero</label>
								<div class="col-md-9 p-0">
									<select class="form-control input-full" name="genero_usua" id="genero_usua" >
										<option value="0" selected>Seleccionar...</option>
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
									
									</select>
								</div>
							</div>				
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="actualizar_datos" id="actualizar_datos"  class="btn btn-primary">Actualizar usuario</button>
					</div>
				</form>

				<h4 class="card-title">Cambiar contraseña o usuario</h4>
				<hr>
				
				<form id="editar_password" name="editar_password" autocomplete="off"   accept-charset="utf-8">
					<h4 id="notificacion" class="btn-warning" style="display: none; height: 30px; padding: 5px; text-align: center; border-radius: 2px;"></h4>
					<div class="row">

						<div class="col-sm-6">
							<input type="hidden" name="id_user1" id="id_user1" class="form-control">
							<div class="form-group form-inline">
								<label for="usuario_usua"  class="col-md-3 col-form-label">Usuario</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="usuario_usua" id="usuario_usua" placeholder="usuario" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group form-inline">
								<label for="password_usua"  class="col-md-3 col-form-label">Password</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="password_usua" placeholder="************" >
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group form-inline ">
								<label for="confirmpassword"  class="col-md-3 col-form-label">Confirmar <br>Password</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="confirmpassword" placeholder="************" >
								</div>
							</div>
						</div>	
					</div>
					<div class="modal-footer">
						<button type="submit" name="actualizar_password" id="actualizar_password"  class="btn btn-primary">Actualizar usuario</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- ELIMINAR USUARIO -->
<div id="deleteUsuarioModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="delete_usuario" id="delete_usuario">
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar Usuario</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Seguro que quieres eliminar este registro?</p>
					<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
					<input type="hidden" name="delete_id" id="delete_id">
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-danger" value="Eliminar">
				</div>
			</form>
		</div>
	</div>
</div>