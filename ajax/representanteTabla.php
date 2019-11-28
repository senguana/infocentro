<table id="basic-datatables" class="display table table-striped table-hover"  >
	<thead>
		<tr>
			<!-- <th>#</th> -->
			<th>Dni</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Telefono</th>
			<th>Profesion</th>
			<th>Género</th>
			<th style="width: 10%">Action</th>
		</tr>
	</thead>
		<tbody>

			<?php 
			include_once './../bd/conexion.php'; 
			$consulta = "SELECT * FROM representante r INNER JOIN profesion p ON r.cod_profesion = p.id_profesion";
			$query_listar = $db->prepare($consulta);
			$query_listar->execute();
			$result = $query_listar->fetchAll();
			foreach ($result as $dato): ?>
			<tr>
				
				<td><?php echo $dato['dni_repre']; ?></td>
				<td><?php echo $dato['nombres_repre']; ?></td>
				<td><?php echo $dato['apellidos_repre']; ?></td>
				<td><?php echo $dato['telefono_repre']; ?></td>
				<td><?php echo $dato['nombre_profesion']; ?></td>
				<td><?php echo $dato['genero']; ?></td>
				<td>
					<div class="form-button-action">
						<button type="button"  data-toggle="modal" data-target="#EditRepresentante" title="Editar" class="btn btn-link btn-primary" data-dni = '<?php echo $dato['dni_repre']; ?>' data-nombre='<?php echo $dato['nombres_repre']; ?>' data-apellido= '<?php echo $dato['apellidos_repre']; ?>' data-tel='<?php echo $dato['telefono_repre']; ?>' data-profesion='<?php echo $dato['nombre_profesion']; ?>' data-genero = '<?php echo $dato['genero']; ?>' data-id='<?php echo $dato['id_repre']; ?>' id="Edit">
							<i class="fa fa-edit"></i>
						</button>
						<button type="button" data-toggle="modal" data-target="#deleteRepresentanteModal" title="" class="btn btn-link btn-danger" data-id="<?php echo $dato['id_repre'];?>"  data-original-title="Remove">
								<i class="fa fa-trash"></i>
							</button>
					</div>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<script type="text/javascript">
		$('#basic-datatables').DataTable({
			});
	</script>