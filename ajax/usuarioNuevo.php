<?php
	require_once ("../bd/conexion.php");
	require_once './../funciones/usuario.php';
		$dni= $_POST['dni_usua'];
		$nombre= $_POST['nombre_usua'];
		$apellido= $_POST['apell_usua'];
		$email= $_POST['correo_usua'];
		$genero= strval($_POST['genero_usua']);
	    $user = $_POST['usuario_usua'];
	    $password_usua = $_POST['password_usua'];
	   
	    $date_added=date("Y-m-d H:i:s");

	if (isNull($dni, $nombre, $apellido, $email, $user, $password_usua)) {
	    	echo "Todos los campos son requeridos";
	    }    
	elseif (empty($email)) {
		echo "Campo correo vaciò";

	}elseif (empty($_POST['usuario_usua'])) {
		echo "Campo usuario vaciò";

	}elseif (empty($_POST['password_usua'])) {
		echo "Contraseña vacia";

	}elseif (!empty($_POST['correo_usua']) && !empty($_POST['usuario_usua']) && !empty($_POST['password_usua'])) {


	    $user_password_hash = password_hash($password_usua, PASSWORD_DEFAULT);

	    if (dniExiste($dni)) {
	    	echo "Este Dni $dni ya está en uso.";
	    	
			exit;
			
		}elseif (correoExist($email)) {
			echo "Este $email ya está en uso.";
			exit;
		}elseif (userName($user)) {
			echo "Este $user ya está en uso.";

			exit;
		}
		else{

			$query_agregar = "INSERT INTO usuario(dni_usua, nombre_usua, apellido_usua, correo_usua, genero_usua, username_usua, password_usua, date_agregado) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		
			$nuevo_user = $db->prepare($query_agregar);
			$nuevo_user->bindParam(1, $dni);
			$nuevo_user->bindParam(2, $nombre);
			$nuevo_user->bindParam(3, $apellido);
			$nuevo_user->bindParam(4, $email);
			$nuevo_user->bindParam(5, $genero);
			$nuevo_user->bindParam(6, $user);
			$nuevo_user->bindParam(7, $user_password_hash);
			$nuevo_user->bindParam(8, $date_added);
			
			
			$nuevo_user->execute();

			if ($nuevo_user) {
				echo "Se insertò correctamente";
				
			}else{
				echo "No se pudo insertar";
			}
			$nuevo_user = null;
			$db= null;
	      
			}
	}
      
        

	   

	   

		

		

	
?>
	