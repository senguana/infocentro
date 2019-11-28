<?php
require_once ("../bd/conexion.php");


if (empty($_POST['nombres_docente'])) {
    echo "Campo docente está vacio";
}elseif (empty($_POST['apellidos_docente'])) {
    echo "Campo apellidos está vacio";
}elseif (!empty($_POST['nombres_docente']) && !empty($_POST['apellidos_docente'])) {
    $nombres= $_POST['nombres_docente'];
    $apellidos= $_POST['apellidos_docente'];
    $correo= $_POST['correo_docente'];
    $telefono =  $_POST['tell_docente'];
    $genero= $_POST['genero_docente'];



    $query_agregar = "INSERT INTO docente (nombre, apellido, correo, telefono, genero) VALUES (?,?,?,?,?)";

    $insertar=$db->prepare($query_agregar);
    $insertar->execute([$nombres, $apellidos, $correo, $telefono, $genero]);

    if ($insertar) {
        echo "Se guardó los datos correctamente";
    }else{
        echo "Tuvimos un problema en el proceso, intente de nuevo";
    }
}


 ?>