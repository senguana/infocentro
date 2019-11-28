<?php 	

require_once '../bd/conexion.php';
require_once '../core/core.php';
$consulta = "SELECT *  FROM usuario WHERE estado = 1 ORDER BY id_usua ASC";

$query_listar = $db->prepare($consulta);
$query_listar->execute();

$result = $query_listar->fetchAll();
?>
<div class="table-responsive">
	<table id="basic-datatables" class="display table table-striped table-hover">
		<thead>
			<tr>
				<!-- <th>#</th> --> 
				<th>Dni</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Correo</th>
					<th>Genero</th>
					<th>Usuario</th>
					
					<th style="width: 10%">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result as $dato): ?>
				<tr>
					
					<td><?php echo $dato['dni_usua']; ?></td>
					<td><?php echo $dato['nombre_usua']; ?></td>
					<td><?php echo $dato['apellido_usua']; ?></td>
					<td><?php echo $dato['correo_usua']; ?></td>
					<td><?php echo $dato['genero_usua']; ?></td>
					<td><?php echo $dato['username_usua']; ?></td>
					
					<td>
						<div class="form-button-action">
							<button type="button"  data-toggle="modal" data-target="#EditUsuario" title="Editar" class="btn btn-link btn-primary" data-dni = '<?php echo $dato['dni_usua']; ?>' data-nombre='<?php echo $dato['nombre_usua']; ?>' data-apellido= '<?php echo $dato['apellido_usua']; ?>' data-correo='<?php echo $dato['correo_usua']; ?>' data-genero='<?php echo $dato['genero_usua']; ?>' data-user='<?php echo $dato['username_usua']; ?>' data-id='<?php echo $dato['id_usua']; ?>' id="Edit"><i class="fa fa-edit"></i></button>
							<?php 
							if ($dato["id_usua"]!=1) {?>
								<button type="button" data-toggle="modal" data-target="#deleteUsuarioModal" title="" class="btn btn-link btn-danger" data-id="<?php echo $dato['id_usua'];?>"  data-original-title="Remove">
								<i class="fa fa-times"></i></button>
							<?php } ?>
						</div>
					</td>
				</tr>
			    <?php endforeach; ?>
			</tbody>
		</table>
	</div>
<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});
			
		});
	</script>