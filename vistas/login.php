<?php 
require_once './../bd/conexion.php';
require_once './../core/configGeneral.php';
// require_once './../clases/login.php';
session_start();

if (isset($_SESSION['loginIn'])) {
	header('location: home.php');
	exit;
}

if (isset($_POST['login'])) {
	if (empty($_POST['username'])) {
		 $errors[] = " campo de nombre de usuario estaba vacío.";

	}elseif (empty($_POST['password'])) {
		$errors[] = "El campo de contraseña estaba vacío.";
		
	}elseif (!empty($_POST['username']) && !empty($_POST['password'])) {

		 $user_name = htmlentities(addslashes($_POST['username']));
         $password = htmlentities(addslashes($_POST['password']));

		$sql = "SELECT * FROM usuario WHERE username_usua =:username_usua";
		$result = $db->prepare($sql);
		$result->execute(array(':username_usua' => $user_name));
		$row=$result->fetch(PDO::FETCH_ASSOC);

		if ($result->rowCount() >0) {
            if (password_verify($password, $row['password_usua'])) {
            	
                $_SESSION['loginIn'] = 1;	   
                $_SESSION['id_usua'] = $row['id_usua'];
                $_SESSION['username_usua'] = $row['username_usua'];
                $_SESSION['nombre_usua'] = $row['nombre_usua'];
                $_SESSION['apellido_usua'] = $row['apellido_usua'];
                $_SESSION['correo_usua'] = $row['correo_usua'];
                $_SESSION['user_login_status'] = 1;
                
                header("location: ./home.php");
                 exit;

            }else{
            	$errors[] = "Usuario y/o contraseña no coinciden.";
            }

		}else{
			$errors[] = "Usuario no existe";
		}
	}
} 
?>
<?php include_once 'includes/header.php'; ?>
<?php 
 $query = "SELECT * FROM configuracion";
 $consulta = $db->prepare($query);
 $consulta->execute();
  $row= $consulta->fetch(PDO::FETCH_OBJ);
 ?>
<body class="login">
	<nav class="navbar navbar-expand-lg bg-secondary">
	<a class="navbar-brand" href="#"><?php echo $row->entidad; ?></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

</nav>
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			
			<h3 class="text-center">Iniciar Sesiòn</h3>
			<div class="login-form">
				<?php
				
				if (isset($_POST['login'])) {
					if ($errors) {
						?>
						<div class="btn-danger" style=" height: 30px; padding: 5px; text-align: center; border-radius: 2px;">				
						<?php
						foreach ($errors as $error) {
							echo $error;
						}
						?>
						</div>
						<?php
					}
				}
				?>
				<form action="" method="post" id="loginForm" autocomplete="off" accept-charset="utf-8">
					<div class="form-group">
						<label for="username" class="placeholder"><b>Nombre de usuario</b></label>
						<input id="username" name="username" type="text" class="form-control" placeholder="Ingresa tu usuario" required>
					</div>
					<div class="form-group">
						<label for="password" class="placeholder"><b>Contraseña</b></label>
						
						<div class="position-relative">
							<input id="password" name="password" type="password" class="form-control" placeholder="**********" required>
							<div class="show-password">
								<i class="flaticon-interface"></i>
							</div>
						</div>
					</div>
				<div class="form-group form-action-d-flex mb-3">					
					<button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" name="login">Ingresar</button>
				</div>

				</form>
				
			</div>
			
		</div>

		
	</div>
	
	
</body>
</html>
