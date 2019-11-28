<?php 


function isNull($dni, $nom, $apell, $correo, $user, $pass)
{
	if (strlen(trim($dni)) < 1 || strlen(trim($nom)) < 1 || strlen(trim($apell)) < 1 || strlen(trim($correo)) < 1 || strlen(trim($user)) < 1 || strlen(trim($pass)) < 1) {
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
	$consulta = "SELECT id_usua FROM usuario WHERE  dni_usua= ? LIMIT 1";
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

function userName($user)
{
	global $db;
	$consulta = "SELECT id_usua FROM usuario WHERE  username_usua= ? LIMIT 1";
	$result_consulta = $db->prepare($consulta);
	$result_consulta->execute([$user]);
	$row = $result_consulta->rowCount();
	if ($row > 0) {
		return true;
	}else{
		return false;
	}
}

function confirmPassword($pass, $confirmPass)
{
	if ($pass !== $confirmPass) {
		return true;
	}else{
		return false;
	}
}

function actualizar($dni, $nom, $apell, $correo, $genero, $date, $id)
{
	global $db;

	// $sql = "UPDATE usuario SET dni_usua=:dni, nombre_usua=:nom, apellido_usua=:apell, correo_usua =:correo, genero_usua = :gen, username_usua =:user, password_usua =:pass, date_agregado =:dat, profesion=:prof WHERE id_usua:id";

	$sql = "UPDATE usuario SET dni_usua=?, nombre_usua=?, apellido_usua=?, correo_usua =?, genero_usua =?, date_agregado =? WHERE id_usua=?";

	$result = $db->prepare($sql);

	$result->execute([$dni, $nom, $apell, $correo, $genero,  $date, $id]);
	// array(
	// 	":dni"   => $dni,
	// 	":nom"   => $nom,
	// 	":apell" => $apell,
	// 	":correo"=> $correo,
	// 	":gen"   => $genero,
	// 	":user"  => $user,
	// 	":pass"  => $pass,
	// 	":dat"   => $date,
	// 	":prof"  => $prof,
	// 	":id"    => $id,
	// )

	if ($result) {
		return true;
	}else{
		return false;
	}
}

function actualizarPassword($usuario, $password, $id)
{
	global $db;


	$sql = "UPDATE usuario SET username_usua=?, password_usua=? WHERE id_usua=?";

	$result = $db->prepare($sql);

	$result->execute([$usuario, $password, $id]);

	if ($result) {
		return true;
	}else{
		return false;
	}
}
function EliminarUsuario($id){

	global $db;
	 $sql = "UPDATE usuario SET estado=0 WHERE id_usua=:id";
    $query = $db->prepare($sql);
    $query->execute(array(":id" => $id));
    if ($query) {
    	return true;
    }else{
    	return false;
    }
 
}

?>

