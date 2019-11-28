<?php 
require_once '../bd/conexion.php';
require_once '../core/core.php';
$consulta = "SELECT *  FROM curso c INNER JOIN docente d ON c.docente_id = d.id_docente ORDER BY id_curso ASC";
$query_listar = $db->prepare($consulta);
$query_listar->execute();
 ?>
<div class="table-responsive">
	<table id="basic-datatables" class="display table table-striped table-hover">
		<thead>
			<tr>
				<!-- <th>#</th> -->
				<!-- <th>Dni</th> -->
				<th>Curso</th>
				<th>Fecha Inicio</th>
				<th>Fecha Final</th>
				<th>Total Horas</th>
				<th>Docente</th>
				<th style="width: 10%">Action</th>
			</tr>
		</thead>
		<tbody>	
		<?php while ($result=$query_listar->fetch(PDO::FETCH_OBJ)) {?>

  
		
			<tr>
				<td><?php echo $result->nombre_curso; ?></td>
				<td><?php echo $result->fecha_inicio; ?></td>
				<td><?php echo $result->fecha_fin; ?></td>
				<td><?php echo $result->total_horas; ?></td>
				<td><?php echo $result->nombre." " . $result->apellido; ?></td>
				<td>
					<div class="form-button-action">
						<button type="button"  data-toggle="modal" data-target="#EditCurso" title="Editar" class="btn btn-link btn-success" data-id = '<?php echo $result->id_curso; ?>' data-curso='<?php echo $result->nombre_curso; ?>' data-fechaInicio= '<?php echo $result->fecha_inicio; ?>' data-fechaFin = '<?php echo $result->fecha_fin; ?>' data-horas = '<?php echo $result->total_horas; ?>' data-docente = '<?php echo $result->nombre;?>'> <i class="fa fa-edit"></i>
						</button>
						<button type="button" data-toggle="modal" data-target="#deleteCursoModal" title="" class="btn btn-link btn-warning" data-id="<?php echo $result->id_curso;?>"  data-original-title="Remove"><i class="fa fa-trash"></i>
						</button>
						<button type="button" data-toggle="modal" data-target="#deleteCursoModal" title="" class="btn btn-link btn-danger" data-id="<?php echo $result->id_curso;?>"  data-original-title="Remove"><i class="fas fa-eye"></i>
						</button>
					</div>
				</td>	
			</tr>
			<?php
			} 
			?>								
		</tbody>
	</table>	
</div>
<script >
		// $(document).ready(function() {
		 $('#basic-datatables').DataTable({
		 // });

			// $('#multi-filter-select').DataTable( {
			// // 	"pageLength": 5,
			// // 	initComplete: function () {
			// // 		this.api().columns().every( function () {
			// // 			var column = this;
			// // 			var select = $('<select class="form-control"><option value=""></option></select>')
			// // 			.appendTo( $(column.footer()).empty() )
			// // 			.on( 'change', function () {
			// // 				var val = $.fn.dataTable.util.escapeRegex(
			// // 					$(this).val()
			// // 					);

			// // 				column
			// // 				.search( val ? '^'+val+'$' : '', true, false )
			// // 				.draw();
			// // 			} );

			// // 			column.data().unique().sort().each( function ( d, j ) {
			// // 				select.append( '<option value="'+d+'">'+d+'</option>' )
			// // 			} );
			// // 		} );
			// // 	}
			//  });
			
		});
	</script>