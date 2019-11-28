<?php 
require_once ("../bd/conexion.php");


if (empty($_POST['curso']) && empty($_POST['fecha_inicio']) && empty($_POST['fecha_fin']) && empty($_POST['total_horas']) && empty($_POST['docente'])) {
    echo "Campos vacíos";

}elseif (empty($_POST['curso'])) {
    echo "Campo curso está vacio";

}elseif (empty($_POST['fecha_inicio'])) {
    echo "Tienes que agregar fecha de inicio";

}elseif (empty($_POST['fecha_fin'])) {
    echo "Tienes que agregar fecha de finalización del curso";

}elseif (empty($_POST['total_horas'])) {
    echo "Debes agregar total horas del curso";

}elseif (empty($_POST['docente'])) {
    echo "Debes agregar el docente";
}
elseif (!empty($_POST['curso']) && !empty($_POST['fecha_inicio']) && !empty($_POST['fecha_fin']) && !empty($_POST['total_horas']) && !empty($_POST['docente'])) {

    $curso= strtoupper($_POST['curso']);
    $fecha_inicio= $_POST['fecha_inicio'];
    $fecha_fin= $_POST['fecha_fin'];
    $total_horas =  $_POST['total_horas'];
    $docente= $_POST['docente'];
    $id_curso = $_POST['id_curso'];

    $sql = " UPDATE curso SET nombre_curso =:nombre_curso, fecha_inicio =:fecha_inicio, fecha_fin=:fecha_fin, total_horas=:total_horas, docente_id=:docente WHERE id_curso =:id_curso ";
	$stmt2 = $db->prepare($sql);
	$stmt2->bindParam(':nombre_curso', $curso, PDO::PARAM_STR); 
	$stmt2->bindParam(':fecha_inicio', $fecha_inicio, PDO::PARAM_STR); 
	$stmt2->bindParam(':fecha_fin', $fecha_fin, PDO::PARAM_STR); 
	$stmt2->bindParam(':total_horas', $total_horas, PDO::PARAM_STR); 
	$stmt2->bindParam(':docente', $docente, PDO::PARAM_STR);
	$stmt2->bindParam(':id_curso', $id_curso); 
	$stmt2->execute();

    if ($stmt2) {
        echo "Se actualizó los datos correctamente";
    }else{
        echo "Tuvimos un problema en el proceso, intente de nuevo";
    }
}



 ?>