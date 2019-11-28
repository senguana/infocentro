
<!-- Modal -->
<div class="modal fade" id="agregarCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar Curso a los Estudiantes</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="asignarCurso" name="asignarCurso">
					<div id="response"></div>
					<div class="form-group">
						<input type="text" hidden="" name="id_alumno" id="id_alumno" value="" placeholder="">
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Seleccionar el curso</label>
						<select class="form-control"  name="seleccionarCurso" id="seleccionarCurso">
							<option value="" selected="" enable>Seleccionar curso</option>}
							
							<?php 
							$sql = "SELECT id_curso, nombre_curso from curso ";
							$stmt = $db->prepare($sql);
							$result_consulta = $stmt->execute();
							while ($cargar_datos = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
								<option value="<?php echo $cargar_datos->id_curso;?> "><?php echo $cargar_datos->nombre_curso; ?></option>
								
								<?php 
								}
									
									 ?>
						</select>
					
					</div>
					</br>
				</br>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Agregar</button>
					</div>
				</form>
				
			</div>
			
		</div>
	</div>
</div>