<?php
	require_once ("../bd/conexion.php");
	require_once ('./../funciones/representante.php');

	// $msg[];

		$dni= $_POST['dni_repre'];
		$nombre= $_POST['nombre_repre'];
		$apellido= $_POST['apell_repre'];
		$telefono= strval($_POST['repre_tel']);
	    $profesion = $_POST['profesion_repre'];
	    $genero= strval($_POST['genero_repre']);
	    // $date_added=date("Y-m-d H:i:s");

	 // if (isNull($dni, $nombre, $apellido)) {
	 //     	echo "Todos los campos son requeridos";
	 //     }    
	if (empty($dni)) {
		echo "Campo dni vaciò";

	}elseif (empty($nombre)) {
		echo "Campo nombre vaciò";

	}elseif (empty($apellido)) {
		echo "Campo apellido vacia";

	}elseif (!empty($dni) && !empty($nombre) && !empty($apellido) && !empty($genero) && !empty($profesion)) {

	    if (dniExiste($dni)) {
	    	echo "Este $dni está en uso";
			exit;
			
		}
		else {

			$insertar = InsertarRepresentante($dni, $nombre, $apellido, $telefono, $profesion, $genero);
            if ($insertar===true) {
				echo "Se insertò correctamente";
				
			}else{
				echo "No se pudo insertar";
			}

			$db= null;
	      
			}
	}
      
?>
	