
<?php
 include_once './../bd/conexion.php'; 
// $consulta = "SELECT * FROM grado";

// $query_listar = $db->prepare($consulta);

// $query_listar->execute();
//  if (!$query_listar) {
//  	die("Error");
//  }else {
//  	$arreglo['data']=$query_listar->fetch(PDO::FETCH_ASSOC);
 		  
    
//     echo json_encode($arreglo);
//  }
 $query = "SELECT * FROM institucion ORDER BY nombre_institucion ASC";
 
 $stmt = $db->prepare($query);
 $stmt->execute();
 ?>
 <div class="table-responsive">
	<table id="basic-datatables" class="display table table-striped table-hover"  >
		<thead>
			<tr>
				<!-- <th>#</th> -->
				<!-- <th>Dni</th> -->
				<!-- <th>Id</th> -->
				<th>Instituciones</th>
				<th style="width: 10%">Action</th>
			</tr>
		</thead>
 
 <tbody>

 <?php while($row=$stmt->fetch(PDO::FETCH_OBJ)){ ?>
 	
		<tr>
			
			<td><a href="alumnoBasica.php?q=<?php echo $row->id_institucion;?>"><?php echo $row->nombre_institucion; ?></a></td>
			<td>
				<div class="form-button-action">
					<button type="button"  data-toggle="modal" data-target="#EditInstitucion" title="Editar" class="btn btn-link btn-success" data-id = '<?php echo $row->id_institucion; ?>' data-nombre='<?php echo $row->nombre_institucion; ?>' id="Edit"><i class="fa fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#deleteInstitucionModal" title="" class="btn btn-link btn-danger" data-id="<?php echo $row->id_institucion;?>"  data-original-title="Remove"><i class="fa fa-trash"></i></button>
				
				</div>
			</td>
		</tr>
		<?php } ?>
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

 