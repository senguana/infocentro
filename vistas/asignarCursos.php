<?php include_once './../core/configGeneral.php'; ?>
<?php include_once './../bd/conexion.php'; ?>
<?php include_once 'core.php'; ?>

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
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Agregar cursos</li>
						</ol>
					</nav>
					<div class="card">
						<div class="card-body">
							<div id="resultado" style="display: none;" class="alert alert-danger" role="alert">
							</div>

							<form id="consultar_alumno" name="consultar_alumno" autocomplete="off"   accept-charset="utf-8">
								<div class="row">
									<div class="col-md-8">
										<input type="text" class="form-control" id="buscar_institucion" name="buscar_institucion" value="" placeholder="Buscar institucion"> 
									</div>
									<div class="col-sm-3">
										<select class="form-control input-square" id="listar_grado" name="listar_grado">
											<option value=""></option>}
											
											<option value="0" >Seleccionar el grado...</option>
											
											<option value="1">Primero de Básica</option>
											<option value="2">Segundo de Básica</option>
											<option value="3">Tercero de Básica</option>
											<option value="4">Cuarto de Básica</option>
											<option value="5">Quinto de Básica</option>
											<option value="6">Sexto de Básica</option>
											<option value="7">Septimo de Básica</option>
											<option value="8">Octavo de Básica</option>
											<option value="9">Noveno de Básica</option>
											<option value="10">Décimo de Básica</option>
											<option value="11">Primero de Bachillerato</option>
											<option value="12">Segundo de Bachillerato</option>
											<option value="13">Tercero de Bachillerato</option>
											
									</select> 
										
									</div> 
									<div class="col-md-1">
										<button type="submit" class="btn btn-primary float-right mt-3 mt-sm-0 fw-bold" ><i class="fas fa-search"></i></button>
										<!-- <button type="submit" class="btn btn-primary"></button> -->
									</div>
								</div>	
							</form>
						</div>
					
					</div>
					<?php include_once './../modal/modalAsignarCurso.php' ?>
					<div class="card">
						<div class="card-body">		
							<div id="alumnoBasicaTabla"> </div>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</body>

 <!-- <script src="./../assets/js/core/jquery.3.2.1.min.js"></script>  -->
<!-- <script src="../assets/js/core/popper.min.js"></script> -->


<!-- jQuery UI -->

<!-- <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>  -->
<!-- <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script> -->

 <script src="./../lib/jquery-1.12.1.min.js"></script>  
<script src="../assets/js/core/bootstrap.min.js"></script> 
 <script src="./../lib/jquery-ui.js"></script>  
<!--   Core JS Files   -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->



<script src="./../assets/js/infocentro/cargarInstitucion.js" ></script>
