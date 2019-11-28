<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="NuevaInstitucion" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nueva Institución</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="error"></div>
				<form id="guardar_institucion" name="guardar_institucion" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-inline">
								<label for="dni_usua"  class="col-md-3 col-form-label">Institución</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="institucion" placeholder="Ingrese nombre de la Institución" required="">
								</div>
							</div>
						</div>
						

					</div>
					<div class="modal-footer">
						<button type="submit" name="guardar_datos" id="guardar_datos"  class="btn btn-primary">Crear Institución</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>


<!-- MODAL ACTUALIZAR  -->
<div class="modal fade  bd-example-modal-lg" id="EditInstitucion" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Actualizar Institución</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="error1"></div>
				<form id="actualizar_institucion" name="actualizar_institucion" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-inline">
								<label for="institucion"  class="col-md-3 col-form-label">Institución</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="nombre_institucion" id="nombre_institucion" placeholder="Ingrese nombre de la Institución" required="">
									<input type="text" hidden="" name="id_institucion" id="id_institucion" value="">
								</div>
							</div>
						</div>
						

					</div>
					<div class="modal-footer">
						<button type="submit" name="guardar_datos" id="guardar_datos"  class="btn btn-primary">Actualizar Institución</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>


<!-- ELIMINAR REPRESENTANTE -->
<div id="deleteInstitucionModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">

			<form name="delete_institucion" id="delete_institucion">
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar Institución</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Seguro que quieres eliminar este registro?</p>
					<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
					<input type="text" hidden="" name="id_delete" id="id_delete">
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-danger" value="Eliminar">
				</div>
			</form>
		</div>
	</div>
</div>