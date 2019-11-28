<?php 


function isNull($dni, $nom, $apell)
{
	if (strlen(trim($dni)) < 1 || strlen(trim($nom)) < 1 || strlen(trim($apell))) {
		return true;
	}else{
		return false;
	}
}

function minMax($min, $max, $valor)
{
	if (strlen(trim($valor)) < $min) {
		return true;
	}elseif (strlen(trim($valor)) > $max) {
		return true;
	}else{
		return false;
	}
}
function dniExiste($dni)
{
	global $db;
	$consulta = "SELECT id_repre FROM representante WHERE  dni_repre= ? LIMIT 1";
	$result_consulta = $db->prepare($consulta);
	$result_consulta->execute([$dni]);
	$row = $result_consulta->rowCount();
	if ($row > 0) {
		return true;
	}else{
		return false;
	}
}


function correoExist($correo)
{
	global $db;
	$consulta = "SELECT id_usua FROM usuario WHERE  correo_usua= ? LIMIT 1";
	$result_consulta = $db->prepare($consulta);
	$result_consulta->execute([$correo]);
	$row = $result_consulta->rowCount();
	if ($row > 0) {
		return true;
	}else{
		return false;
	}
}

function InsertarRepresentante($dni, $nom, $apell, $tel, $prof, $gen)
{
	global $db;
	$query_agregar = "INSERT INTO `representante`(`dni_repre`, `nombres_repre`, `apellidos_repre`, `telefono_repre`, `cod_profesion`, `genero`) VALUES (?, ?, ?, ?, ?, ?)";
		
			$nuevo_representante = $db->prepare($query_agregar);
			$nuevo_representante->bindParam(1, $dni);
			$nuevo_representante->bindParam(2, $nom);
			$nuevo_representante->bindParam(3, $apell);
			$nuevo_representante->bindParam(4, $tel);
			$nuevo_representante->bindParam(5, $prof);
			$nuevo_representante->bindParam(6, $gen);
			$nuevo_representante->execute();

			if ($nuevo_representante) {
				return true;
			}else{
				return false;
			}
}

function actualizarRepre($dni, $nom, $apell, $tel, $prof, $gen, $id)
{
	global $db;

	$sql = "UPDATE representante SET dni_repre=?, nombres_repre=?, apellidos_repre=?, telefono_repre=?, cod_profesion=?, genero=?  WHERE id_repre=?";

	$result = $db->prepare($sql);

	$result->execute([$dni,$nom,$apell,$tel,$prof,$gen,$id]);

	if ($result) {
		return true;
	}else{
		return false;
	}
}

function EliminarRepresentante($id){

	global $db;
	 $sql = "DELETE FROM representante WHERE id_repre=:id";
    $query = $db->prepare($sql);
    $query->execute(array(":id" => $id));
    if ($query) {
    	return true;
    }else{
    	return false;
    }
 
}

?>


