<div class="modal fade  bd-example-modal-lg" id="EditAlumnoCurso" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo Curso</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div  id="error" class="btn-warning" style="display: none; height: 30px; padding: 5px; text-align: center; border-radius: 2px;">	
				</div>
				<form id="guardar_curso" name="guardar_curso" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<b id="msg_error"></b>
						<div class="col-md-12">
							<div class="form-group">
								<label for="curso">Curso</label>
								<input type="text" class="form-control" name="curso"  placeholder="Ingrese curso">
							</div>
							<div class="form-group">
								<label for="fecha_inicio">Fecha Inicio</label>
								<input type="date" class="form-control" name="fecha_inicio" >
							</div>
							<div class="form-group">
								<label for="fecha_fin">Fecha Fin</label>
								<input type="date" class="form-control" name="fecha_fin" >
							</div>
							<div class="form-group">
								<label for="total_horas">Total Horas</label>
								<input type="text" class="form-control" name="total_horas" >
							</div>
							<div class="form-group">
								<label for="docente">Seleccionar Docente</label>
								<select class="form-control" name="docente">
									<option value="" selected="">Seleccionar...</option>}
									
								
								</select>
							</div>

					
						</div>

					</div>
					<div class="modal-footer">
						<button type="submit" id="guardar_datos" class="btn btn-primary float-right mt-3 mt-sm-0 fw-bold" >Nuevo curso</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>