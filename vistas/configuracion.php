<?php include_once './../core/configGeneral.php'; ?>
<?php include_once './../bd/conexion.php'; ?>
<?php include_once './core.php'; ?>
<?php include_once 'includes/header.php'; ?>
<?php 
 $query = "SELECT * FROM configuracion";
 $consulta = $db->prepare($query);
 $consulta->execute();

 $row= $consulta->fetch(PDO::FETCH_ASSOC);
 $foto1 = "../upload/".$row['imagen1'];
 $foto2 = "../upload/".$row['imagen2'];
 $foto3 = "../upload/".$row['imagen3'];
 $foto4 = "../upload/".$row['imagen4'];
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
							<li class="breadcrumb-item active" aria-current="page">Configuración</li>
						</ol>
					</nav>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title"><i class="fas fa-cog"></i>Configuración</h4>
									</div>
								</div>
									<div class="card-body">
										<div id="respuesta"></div>
										<form id="configuracion" name="configuracion" enctype="multipart/form-data"  accept-charset="utf-8">
											<div class="form-group">

												<label for="entidad">Entidad</label>
												
												<input type="text" class="form-control" id="entidad" name="entidad">
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
										
														<label for="exampleFormControlFile1">Seleccionar una imagen para el Fondo</label>

														<input type="file" class="form-control" name="fondo" id="fondo">
													</div>
													<div class="form-group">
														<div class="avatar avatar-xl"><img src="<?php echo $foto1; ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<label for="imagen1">Imagen Primer logo</label><b>(Primer imagen para el logo)</b>
														<input type="file" class="form-control" name="imagen1" id="imagen1">
													</div>
													<div class="form-group">
														<div class="avatar avatar-xl"><img src="<?php echo $foto2; ?>" alt="..." class="avatar-img rounded-circle">
															</div>	
														<label for="imagen2">Seleccionar imagen 2 </label><small>(Segundo imagen logo)</small>
														<input type="file" class="form-control" name="imagen2" id="imagen2">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<div class="avatar avatar-xl"><img src="<?php echo $foto3; ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<label for="imagen3">Seleccionar imagen 3</label><b>(Tercero imagen logo)</b>
														<input type="file" class="form-control" name="imagen3" id="imagen3">
													</div>
													<div class="form-group">
														<div class="avatar avatar-xl"><img src="<?php echo $foto4; ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<label for="imagen4">Seleccionar imagen 4</label><b>(Cuarta imagen logo)</b>
														<input type="file" class="form-control" name="imagen4" id="imagen4">
													</div>
													
												</div>

											</div>
											
											
											<div class="card-action">
												<button class="btn btn-success">Guardar</button>
												<button class="btn btn-danger">Cancel</button>
											</div>
										</form>
									</div>
								</div>
							</div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </body>

<?php include_once 'includes/footer.php'; ?>
<script src="./../assets/js/infocentro/configuracion.js" type="text/javascript" charset="utf-8" async defer></script>


