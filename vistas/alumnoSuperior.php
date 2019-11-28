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
								<a href="#">Alumnos</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
									
										<h4 class="card-title">Registro de Alumnos de Superior</h4>
										<button class="btn btn-success btn ml-auto" data-toggle="modal" data-target="#NuevoAlumnoSuperior">
											<i class="fa fa-plus"></i>
											Nuevo Alumno
										</button>
									</div>
								</div>	
								<div class="card-body">
										
										
									<?php 
									include("./../modal/modalCrudAlumnoSuperior.php");
									 ?>
									<div id="alumnoSuperiorTabla">
										
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
<script src="./../assets/js/infocentro/alumno.superior.js" type="text/javascript" charset="utf-8" async defer></script>
<script>
	$('#alumnoSuperiorTabla').load('../ajax/alumnoSuperiorTabla.php')
</script>

