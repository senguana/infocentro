<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="NuevoAlumnoSuperior" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo Alumno</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div id="resultado"></div>
				<form id="guardar_alumno_superior" name="guardar_alumno_superior" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="dni">DNI</label>
								<input type="number" class="form-control input-square" name="dni" placeholder="Ingresar número de cédula">
							</div>
							<div class="form-group">
								<label for="nombres">Nombres</label>
								<input type="text" class="form-control input-square" name="nombres" placeholder="Ingresar dos nombres">
							</div>
			
							<div class="form-group">
								<label for="genero">Género</label>
								<select class="form-control input-square" name="genero">
									<option value="1" selected="">Seleccionar...</option>
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
								</select>
							</div>
							<div class="form-group">
								<label for="grado">Seccion</label>
								<select class="form-control input-square" name="seccion">
									<option value="" selected="">Seleccionar...</option>
								
									<?php 
									$sql = "SELECT id_carrera, nombre_carrera from carrera ";
									$stmt = $db->prepare($sql);
									$result_consulta = $stmt->execute();
									while ($cargar_datos = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
										<option value="<?php echo $cargar_datos->id_carrera;?> "><?php echo $cargar_datos->nombre_carrera; ?></option>
										
										
									<?php 
								}
									
									 ?>
							
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="apellidos">Apellidos</label>
								<input type="text" class="form-control input-square" name="apellidos" placeholder="Ingresar dos apellidos">
							</div>

							<div class="form-group">
								<label for="fech_nac">Fecha de Nacimiento</label>
								<input type="date" class="form-control input-square" name="fech_nac" placeholder="Ingresar Fecha de Nacimiento">
							</div>

							<div class="form-group">
								<label for="institucion">Institución</label>
								<select class="form-control input-square" name="institucion">
									<option value="" selected="">Seleccionar...</option>}
									option
									<?php 
									$sql = "SELECT id_institucion, nombre_institucion from institucion ";
									$stmt = $db->prepare($sql);
									$result_consulta = $stmt->execute();
									while ($cargar_datos = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
										<option value="<?php echo $cargar_datos->id_institucion;?> "><?php echo $cargar_datos->nombre_institucion; ?></option>
										
										
									<?php 
								}
									
									 ?>
							
								</select>
							</div>
						</div>			

					</div>
					<div class="modal-footer">
							<button type="submit" id="guardar_datos" class="btn btn-primary float-right mt-3 mt-sm-0 fw-bold" >Registrarse</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
<div class="modal fade  bd-example-modal-lg" id="EditAlumnoBasica" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Actualizar Alumno</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div id="add-brand-messages"></div>
				<form id="guardar_alumno_basica" name="guardar_alumno_basica" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="dni">DNI</label>
								<input type="number" class="form-control input-square" name="dni" placeholder="Ingresar número de cédula">
							</div>
							<div class="form-group">
								<label for="nombres">Nombres</label>
								<input type="text" class="form-control input-square" name="nombres" placeholder="Ingresar dos nombres">
							</div>
							<div class="form-group">
								<label for="apellidos">Apellidos</label>
								<input type="text" class="form-control input-square" name="apellidos" placeholder="Ingresar dos apellidos">
							</div>
							<div class="form-group">
								<label for="genero">Género</label>
								<select class="form-control input-square" name="genero">
									<option value="1" selected="">Seleccionar...</option>
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="fech_nac">Fecha de Nacimiento</label>
								<input type="date" class="form-control input-square" name="fech_nac" placeholder="Ingresar Fecha de Nacimiento">
							</div>

							<div class="form-group">
								<label for="institucion">Institución</label>
								<select class="form-control input-square" name="institucion">
									<option value="" selected="">Seleccionar...</option>}
									option
									<?php 
									$sql = "SELECT id_institucion, nombre_institucion from institucion ";
									$stmt = $db->prepare($sql);
									$result_consulta = $stmt->execute();
									while ($cargar_datos = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
										<option value="<?php echo $cargar_datos->id_institucion;?> "><?php echo $cargar_datos->nombre_institucion; ?></option>
										
										
									<?php 
								}
									
									 ?>
							
								</select>
							</div>
							<div class="form-group">
								<label for="grado">Grado</label>
								<select class="form-control input-square" name="grado">
									<option value="" selected="">Seleccionar...</option>
								
									<?php 
									$sql = "SELECT id_grado, descripcion from grado ";
									$stmt = $db->prepare($sql);
									$result_consulta = $stmt->execute();
									while ($cargar_datos = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
										<option value="<?php echo $cargar_datos->id_grado;?> "><?php echo $cargar_datos->descripcion; ?></option>
										
										
									<?php 
								}
									
									 ?>
							
								</select>
							</div>
							<div class="form-group">
								<label for="estado">Estado</label>
								<select class="form-control input-square" name="estado">
									<option value="0" selected="">Seleccionar...</option>
									<option value="Activo">Activo</option>
									<option value="Inactivo">Inactivo</option>
								
								</select>
							</div>
						</div>			

					</div>
					<div class="modal-footer">
							<button type="submit" id="guardar_datos" class="btn btn-primary float-right mt-3 mt-sm-0 fw-bold" >Registrarse</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>


<!-- ELIMINAR USUARIO -->
<div id="deleteAlumnoBasicaModal" class="modal fade">
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