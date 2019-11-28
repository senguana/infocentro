<?php include '../core/core.php'; ?>
<div class="table-responsive" id="tablaRepre">
	<table id="basic-datatables" class="display table table-striped table-hover"  >
		<thead>
			<tr>
				<!-- <th>#</th> -->
				<th>Dni</th> 
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Género</th>
				<th>Edad</th>
				<th>Fecha Nac.</th>
				<th>Institucion</th>
				<th>Grado</th>
				<th style="width: 10%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			 include_once './../bd/conexion.php'; 
			$consulta = "SELECT *  FROM alumno_basica a INNER JOIN institucion i ON a.institucion_id = i.id_institucion INNER JOIN grado g ON a.grado_id = g.id_grado"; 
			$query_listar = $db->prepare($consulta);
			$query_listar->execute();
			while ($result = $query_listar->fetch(PDO::FETCH_OBJ)) {?>
				<tr>
				
				<td><?php echo $result->dni_alum_s; ?></td>
				<td><?php echo $result->nombres_alum_s; ?></td>
				<td><?php echo $result->apellidos_alumn_s; ?></td>
				<td><?php echo $result->genero; ?></td>
				<td><?php echo $result->edad; ?></td>
				<td><?php echo $result->fech_nac; ?></td>
				<td><?php echo $result->nombre_institucion; ?></td>
				<td><?php echo $result->descripcion; ?></td>
				<td>
					<div class="form-button-action">
						<button type="button"  data-toggle="modal" data-target="#EditAlumnoBasica" title="Editar" class="btn btn-link btn-primary" id="Edit"><i class="fa fa-edit"></i>
						</button>
						<button type="button" data-toggle="modal" data-target="#deleteAlumnoBasicaModal" title="" class="btn btn-link btn-danger"   data-original-title="Remove"><i class="fa fa-trash"></i>
							</button>
					</div>
				</td>									
			</tr>
			<?php	}
			?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
		$('#basic-datatables').DataTable({
			});
	</script>