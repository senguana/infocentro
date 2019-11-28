<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="NuevoNivel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo Nivel</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div  id="error">	
				</div>
				<form id="guardar_nivel" name="guardar_nivel" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-inline">
								<label for="dni_usua"  class="col-md-2 col-form-label">Grado</label>
								<div class="col-md-9 p-0">
									<input type="text" class="form-control input-full" name="grado" placeholder="Ingrese el grado" required="">
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="modal-footer">
						<button type="submit" name="guardar_nivel" id="guardar_nivel"  class="btn btn-primary">Crear nivel</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
<!-- EDITAR CURSO -->
<div class="modal fade  bd-example-modal-lg" id="EditNivel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Actualizar Nivel</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div  id="error1">	
				</div>
				<form id="actualizar_nivel" name="actualizar_nivel" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-inline">
								<label for="dni_usua"  class="col-md-2 col-form-label">Grado</label>
								<div class="col-md-9 p-0">
									<input type="text" hidden=""  name="id_nivel" id="id_nivel" value="" placeholder="">
									<input type="text" class="form-control input-full" name="nivel" id="nivel" placeholder="Ingrese Nivel">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" id="actualizar_nivel" class="btn btn-primary float-right mt-3 mt-sm-0 fw-bold" >Actualizar nivel</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>


<!-- ELIMINAR USUARIO -->
<div id="deleteNivelModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="delete_nivel" id="delete_nivel">
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar Curso</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Seguro que quieres eliminar este registro?</p>
					<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
					<input type="text" hidden="" name="delete_id" id="delete_id">
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-danger" value="Eliminar">
				</div>
			</form>
		</div>
	</div>
</div>