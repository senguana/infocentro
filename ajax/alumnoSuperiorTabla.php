<?php require_once './../core/core.php'; ?>
<div class="table-responsive" id="tablaRepre">
	<table id="basic-datatables" class="table table-head-bg-primary"  >
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
				<th>Seccion</th>
				<th style="width: 10%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			 include_once './../bd/conexion.php'; 
			$consulta = "SELECT *  FROM alumno a INNER JOIN institucion i ON a.cod_institucion = i.id_institucion INNER JOIN carrera c ON a.cod_carrera = c.id_carrera"; 
			$query_listar = $db->prepare($consulta);
			$query_listar->execute();
			while ($result = $query_listar->fetch(PDO::FETCH_OBJ)) {?>
				<tr>
				
				<td><?php echo $result->dni_alum; ?></td>
				<td><?php echo $result->nombres_alum; ?></td>
				<td><?php echo $result->apellidos_alum; ?></td>
				<td><?php echo $result->genero_alum; ?></td>
				<td><?php echo $result->edad_alum; ?></td>
				<td><?php echo $result->fecha_nac; ?></td>
				<td><?php echo $result->nombre_institucion; ?></td>
				<td><?php echo $result->nombre_carrera; ?></td>
				<td>
					<div class="form-button-action">
						<button type="button"  data-toggle="modal" data-target="#EditAlumnoSuperior" title="Editar" class="btn btn-link btn-primary" id="Edit"><i class="fa fa-edit"></i>
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