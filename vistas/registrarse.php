<?php require_once ("../bd/conexion.php"); ?>
<?php include_once 'includes/header.php'; ?>
<body>
	<nav class="navbar sticky-top navbar-dark bg-primary">
		<a class="navbar-brand" href="home.php">SISTEMA DE CERTIFICACIÒN</a>
	</nav>
	<div class="wrapper wrapper-login">
		<div class="container container-signup animated fadeIn">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<h2 class="text-center">Registrarse</h2>
					<div class="modal-body">
						<form id="guardar_usuario" name="guardar_usuario" autocomplete="off"   accept-charset="utf-8">
							<div class="row">
								<div class="col-sm-6">
									<p id="error"></p>
									<div class="form-group form-inline">
										<label for="dni_usua"  class="col-md-3 col-form-label">DNI</label>
										<div class="col-md-9 p-0">
											<input type="hidden" name="id_user"  class="form-control">
											<input type="text" class="form-control input-full" name="dni_usua" placeholder="Ingrese nùmero de cedula" required="">
										</div>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group form-inline">
										<label for="nombre_usua"  class="col-md-3 col-form-label">Nombre</label>
										<div class="col-md-9 p-0">
											<input type="text" class="form-control input-full" name="nombre_usua" placeholder="Ingrese nombre" required>
										</div>
									</div>
									<div class="form-group form-inline">
										<label for="apell_usua"  class="col-md-3 col-form-label">Apellido</label>
										<div class="col-md-9 p-0">
											<input type="text" class="form-control input-full" name="apell_usua" placeholder="Ingrese apellido" required>
										</div>
									</div>
									<div class="form-group form-inline">
										<label for="correo_usua"  class="col-md-3 col-form-label">Correo</label>
										<div class="col-md-9 p-0">
											<input type="email" class="form-control input-full" name="correo_usua" placeholder="Ingrese correo" required>
										</div>
									</div>
									<div class="form-group form-inline">
										<label for="genero_usua"  class="col-md-3 col-form-label">Gènero</label>
										<div class="col-md-9 p-0">
											<select class="form-control input-square" name="genero_usua" >
												<option value="0" selected>Seleccionar...</option>
												<option value="Masculino">Masculino</option>
												<option value="Femenino">Femenino</option>
											
											</select>
										</div>
									</div>
							
								</div>
								<div class="col-sm-6">
									<div class="form-group form-inline">
										<label for="profesion_usua"  class="col-md-3 col-form-label">Profesiòn</label>
										<div class="col-md-9 p-0">
											<select class="form-control input-square" name="profesion_usua" >
												<option value="0" selected>Seleccionar...</option>
											<?php 
											$sql = "SELECT id_profesion, nombre_profesion from profesion ";
											$stmt = $db->prepare($sql);
											$result_consulta = $stmt->execute();
											$cargar_datos = $stmt->fetchAll(PDO::FETCH_OBJ);	 
											foreach ($cargar_datos as $dato) {
												?>
												<option value="<?php echo $dato->id_profesion;?> "><?php echo $dato->nombre_profesion; ?></option>
											
												<?php 
											}
											 ?>
											
											</select>
										</div>
									</div>
									<div class="form-group form-inline">
										<label for="usuario_usua"  class="col-md-3 col-form-label">Usuario</label>
										<div class="col-md-9 p-0">
											<input type="text" class="form-control input-full" name="usuario_usua" placeholder="usuario" required>
										</div>
									</div>
									<div class="form-group form-inline">
										<label for="password_usua"  class="col-md-3 col-form-label">Password</label>
										<div class="col-md-9 p-0">
											<input type="text" class="form-control input-full" name="password_usua" placeholder="************" required="">
										</div>
									</div>
									<div class="form-group form-inline">
										<label for="confirmpassword"  class="col-md-3 col-form-label">Confirmar <br>Password</label>
										<div class="col-md-9 p-0">
											<input type="text" class="form-control input-full" name="confirmpassword" placeholder="************" required="">
										</div>
									</div>					
								</div>

							</div>
							<div class="row form-action">
								<div class="col-md-6">
									<a href="login.php" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Iniciar Sesiòn</a>
								</div>
								
								<div class="col-md-6">
									<button type="submit" id="guardar_datos" class="btn btn-primary float-right mt-3 mt-sm-0 fw-bold" >Registrarse</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
	<script src="./../assets/js/jquery-1.7.2.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- <script src="./../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> -->
	<!-- <script src="./../assets/js/core/popper.min.js"></script> -->
	<script src="./../assets/js/core/bootstrap.min.js"></script>
	
	<script src="./../assets/js/infocentro/usuario.js"></script>
</body>
</html>

	