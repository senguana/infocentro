<?php include_once './../core/configGeneral.php'; ?>
<?php include_once './../bd/conexion.php'; ?>
<?php include_once './core.php'; ?>
<?php include_once 'includes/header.php'; ?>
<?php
$consulta = "SELECT * FROM docente";

$query_listar = $db->prepare($consulta);
$query_listar->execute();

$result = $query_listar->fetchAll();
 ?>
<body>
	<div class="wrapper">
		<?php include_once './includes/navbar.php'; ?>
		<!-- Sidebar -->
		<?php include_once './includes/nav_lateral.php'; ?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Docente</li>
						</ol>
					</nav>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">

										<h4 class="card-title"><i class="fas fa-user-tie"></i> Registro de Docentes</h4>
										<button class="btn btn-primary btn ml-auto" data-toggle="modal" data-target="#NuevoDocente">
											<i class="fa fa-plus"></i>
											Nuevo Docente
										</button>
									</div>
								</div>
								<div class="card-body">


									<?php
									include("./../modal/modalCrudDocente.php");
									 ?>
									<div class="table-responsive" id="tablaDocente">
									
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
<script src="./../assets/js/infocentro/docente.js" type="text/javascript" charset="utf-8" async defer></script>
<script>
  $('#tablaDocente').load('./../ajax/docenteTabla.php')
</script>
