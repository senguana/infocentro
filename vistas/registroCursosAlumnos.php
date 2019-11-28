<?php include_once './../core/configGeneral.php'; ?>
<?php include_once './../bd/conexion.php'; ?>
<?php include_once './core.php'; ?>
<?php include_once 'includes/header.php'; ?>

<body>
	<div class="wrapper">
		<?php include_once './includes/navbar.php'; ?>
		<!-- Sidebar -->
		<?php include_once './includes/nav_lateral.php'; ?>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Cursos asignados</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
									
										<h4 class="card-title">Registro de Alumnos Asignados</h4>
									</div>
								</div>	
								<div class="card-body">
									<div class="card-body">
							<div class="table-responsive">
								<table id="basic-datatables" class="display table table-striped table-hover">
									<thead>
										<tr>
											<!-- <th>#</th> -->
											<!-- <th>Dni</th> -->
											<th>DNI</th>
											<th>Nombres</th>
											<th>Apellidos</th>
											<th>Genero</th>
											<th>Curso</th>
											<th>Horas</th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php include_once './../modal/modalCrudRegistroCurso.php'; ?>
										<?php 
					include_once '../bd/conexion.php';
		$query = "SELECT a.id_alumno_s, a.dni_alum_s, a.nombres_alum_s, a.apellidos_alumn_s, a.genero, c.nombre_curso, c.total_horas, curso_id FROM add_curso_estudiante ad INNER JOIN alumno_basica a ON ad.alumno_basica_id = a.id_alumno_s INNER JOIN curso c ON ad.curso_id = c.id_curso GROUP BY nombre_curso, nombres_alum_s";
							$smt = $db->prepare($query);
							$smt->execute();
							while ($row = $smt->fetch(PDO::FETCH_ASSOC)) {?>
							<tr>
								<td><?php echo $row['dni_alum_s']; ?></td>
								<td><?php echo $row['nombres_alum_s']; ?></td>
								<td><?php echo $row['apellidos_alumn_s']; ?></td>
								<td><?php echo $row['genero']; ?></td>
								<td><?php echo $row['nombre_curso']; ?></td>
								<td><?php echo $row['total_horas']; ?></td>


								<td>
									<div class="btn-group">
										<button type="submit" dni="<?php echo $row['dni_alum_s']; ?>" curso="<?php echo $row['curso_id']; ?>" id="verAlumnoCurso"  class="btn btn-primary" ><i class="fas fa-print"></i></button>
										
										<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-cog"></i>
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" data-toggle="modal" data-target="#verAlumnoCurso" id="verAlumnoCurso" href="#"><i class="fas fa-trash-alt"></i> Eliminar</a>
											
											<a class="dropdown-item" dni="<?php echo $row['dni_alum_s']; ?>" curso="<?php echo $row['curso_id']; ?>" id="" href="certificado/certificado_plantilla.php"><i class="far fa-eye"></i> Ver</a>
											<a class="dropdown-item" data-toggle="modal" data-target="#EditAlumnoCurso" href="#"><i class="fas fa-edit"></i> Actualizar</a>
										
											
										</div>
									</div>
								</td>
							</tr>
											

							<?php }

							 ?>
										
									
									</tbody>
								</table>	
							</div>
										
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

<?php include_once 'includes/footer.php'; ?>
<script src="./../assets/js/infocentro/registroCursosAlumnos.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript">
		$('#basic-datatables').DataTable({
			});
	</script>


