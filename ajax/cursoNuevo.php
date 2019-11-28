<?php 
require_once ("../bd/conexion.php");
require_once '../funciones/usuario.php';

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

    $cursoExist = "SELECT * FROM curso WHERE nombre_curso = ?";
    $query = $db->prepare($cursoExist);
    $query->execute([$curso]);
    $row = $query->rowCount();

    if ($row > 0) {
        echo "Este curso ya ha sido Asignado";

        exit();
    }else {
    $query_agregar = "INSERT INTO curso (nombre_curso, fecha_inicio, fecha_fin, total_horas, docente_id) VALUES (?,?,?,?,?)";

    $insertar=$db->prepare($query_agregar);
    $insertar->bindParam(1, $curso);
    $insertar->bindParam(2, $fecha_inicio);
    $insertar->bindParam(3, $fecha_fin);
    $insertar->bindParam(4, $total_horas);
    $insertar->bindParam(5, $docente);
    $insertar->execute();

    if ($insertar) {
        echo "Se guardó los datos correctamente";
    }else{
        echo "Tuvimos un problema en el proceso, intente de nuevo";
    }
}

}

 ?>