<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="NuevoDocente" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo Docente</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="add-brand-messages"></div>

					<form id="guardar_docente" name="guardar_docente" autocomplete="off"   accept-charset="utf-8">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-inline">
									<label for="nombres_docente" class="col-md-2 col-form-label">Nombres</label>
									<div class="col-md-10 p-0">
										<input type="text" class="form-control input-full" name="nombres_docente" placeholder="Ingresar nombres">
									</div>
								</div>
								<div class="form-group form-inline">
									<label for="apellidos_docente" class="col-md-2 col-form-label">Apellidos</label>
									<div class="col-md-10 p-0">
										<input type="text" class="form-control input-full" name
										="apellidos_docente" placeholder="Ingresar apellidos">
									</div>
								</div>
								<div class="form-group form-inline">
									<label for="correo_docente" class="col-md-2 col-form-label">Correo <br>Electrónico</label>
									<div class="col-md-10 p-0">
										<input type="email" class="form-control input-full" name="correo_docente" required="" placeholder="Ingresar el correo electrónico">
									</div>
								</div>
								<div class="form-group form-inline">
									<label for="tell_docente" class="col-md-2 col-form-label">Teléfono</label>
									<div class="col-md-10 p-0">
										<input type="number" class="form-control input-full" name="tell_docente" required="" placeholder="Ingresar el número de teléfono">
									</div>
								</div>

								<div class="form-group form-inline">
									<label for="genero_docente" class="col-md-2 col-form-label">Gènero</label>
									<div class="col-md-10 P-0">
										<select class="form-control input-full" name="genero_docente">
											<option disabled="" selected="">Seleccionar...</option>
											<option value="Masculino">Masculino</option>
											<option value="Femenino">Femenino</option>
										</select>
									</div>
								</div>
							</div>


						</div>
						<div class="modal-footer">
							<button type="submit" name="guardar_datos" id="guardar_datos"  class="btn btn-primary">Crear Representante</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
			</div>
		</div>
	</div>
</div>


<!-- MODAL ACTUALIZAR  -->
<div class="modal fade  bd-example-modal-lg" id="EditDocente">
	<div class="modal-dialog modal-lx" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Docente</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="small" id="resultado"></p>
				<form id="editar_docente" name="editar_docente" autocomplete="off" accept-charset="utf-8">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-inline">
								<label for="nombre_docente"  class="col-md-3 col-form-label">Nombres</label>
								<div class="col-md-9 p-0">
									<input type="hidden" name="id_docente" id="id_docente" class="form-control">
									<input type="text" class="form-control input-full" name="nombre_docente" id="nombre_docente" placeholder="Ingrese nombre" required>
								</div>
							</div>
							<div class="form-group form-inline">
								<label for="apell_docente"  class="col-md-3 col-form-label">Apellidos</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="apell_docente" id="apell_docente" placeholder="Ingrese apellido" required>
								</div>
							</div>
							<div class="form-group form-inline">
								<label for="correo_docente"  class="col-md-3 col-form-label">Correo</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="correo_docente" id="correo_docente" placeholder="Ingrese correo" required>
								</div>
							</div>

							<div class="form-group form-inline">
								<label for="tel_docente"  class="col-md-3 col-form-label">Telèfono</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="tel_docente" id="tel_docente" placeholder="Ingrese telèfono" required>
								</div>
							</div>

							<div class="col-sm-12">
							   <div class="form-group form-inline">
								<label for="genero_docente"  class="col-md-3 col-form-label">Gènero</label>
								<div class="col-md-8 p-0">
									<select class="form-control input-square" name="genero_docente" id="genero_docente" >
										<option value="0" disabled selected>Seleccionar...</option>
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
									</select>
								</div>
							</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="submit" name="actualizar_datos" id="actualizar_datos"  class="btn btn-primary">Actualizar docente</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>


<!-- ELIMINAR REPRESENTANTE -->
<div id="deleteDocente" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="delete_docente" id="delete_docente">
				<div class="modal-header">
					<h4 class="modal-title">Eliminar Representante</h4>
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