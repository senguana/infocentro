<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="NuevoCurso" tabindex="-1" role="dialog" aria-hidden="true">
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
									option
									<?php 
									$sql = "SELECT id_docente, nombre, apellido from docente ";
									$stmt = $db->prepare($sql);
									$result_consulta = $stmt->execute();
									while ($cargar_datos = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
										<option value="<?php echo $cargar_datos->id_docente;?> "><?php echo $cargar_datos->nombre. " ". $cargar_datos->apellido; ?></option>
										
										
									<?php 
								}
									
									 ?>
								
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

<!-- EDITAR CURSO -->
<div class="modal fade  bd-example-modal-lg" id="EditCurso" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Actualizar Curso</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div  id="error1" class="btn-warning" style="display: none; height: 30px; padding: 5px; text-align: center; border-radius: 2px;">	
				</div>
				<form id="actualizar_curso" name="actualizar_curso" autocomplete="off"   accept-charset="utf-8">
					<div class="row">
						<b id="msg_error"></b>
						<div class="col-md-12">
							<div class="form-group">
								<label for="curso">Curso</label>
								<input type="text" hidden="" name="id_curso" id="id_curso" value="" placeholder="">
								<input type="text" class="form-control" name="curso" id="curso" placeholder="Ingrese curso">
							</div>
							<div class="form-group">
								<label for="fecha_inicio">Fecha Inicio</label>
								<input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" >
							</div>
							<div class="form-group">
								<label for="fecha_fin">Fecha Fin</label>
								<input type="date" class="form-control" name="fecha_fin"  id="fecha_fin">
							</div>
							<div class="form-group">
								<label for="total_horas">Total Horas</label>
								<input type="text" class="form-control" name="total_horas" id="total_horas" >
							</div>
							<div class="form-group">
								<label for="docente">Seleccionar Docente</label>
								<select class="form-control" name="docente" id="docente">
									<option value="" selected="">Seleccionar...</option>}
									option
									<?php 
									$sql = "SELECT id_docente, nombre, apellido from docente ";
									$stmt = $db->prepare($sql);
									$result_consulta = $stmt->execute();
									while ($cargar_datos = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
										<option value="<?php echo $cargar_datos->id_docente;?> "><?php echo $cargar_datos->nombre. " ". $cargar_datos->apellido; ?></option>
										
										
									<?php 
								}
									
									 ?>
								
								</select>
							</div>

					
						</div>

					</div>
					<div class="modal-footer">
						<button type="submit" id="actualizar_curso" class="btn btn-primary float-right mt-3 mt-sm-0 fw-bold" >Actualizar curso</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>


<!-- ELIMINAR USUARIO -->
<div id="deleteCursoModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="delete_curso" id="delete_curso">
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar Curso</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div  id="error3" class="btn-warning" style="display: none; height: 30px; padding: 5px; text-align: center; border-radius: 2px;">	
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