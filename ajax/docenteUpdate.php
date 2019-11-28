<?php
require_once ("../bd/conexion.php");


if (empty($_POST['id_docente'])) {
    echo "ID esta vacio";
}elseif (!empty($_POST['id_docente'])) {
    $nombre= $_POST['nombre_docente'];
    $apellido= $_POST['apell_docente'];
    $correo= $_POST['correo_docente'];
    $telefono= $_POST['tel_docente'];
    $genero= strval($_POST['genero_docente']);

    $id_docente= intval($_POST['id_docente']);

    $sql = "UPDATE docente SET nombre=?,apellido=?,correo=?,telefono=?,genero=? WHERE id_docente=?";

    $result = $db->prepare($sql);

    $result->execute([$nombre,$apellido,$correo,$telefono, $genero, $id_docente]);

    // $insertar = actualizarRepre($dni, $nombre, $apellido, $telefono, $genero, $profesion, $id_repre);

    if ($result==true) {
        echo "<p class='btn-success' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Se actualizò los datos correctamente</p>";
    }else{
        echo "Tuvimos un problema en el proceso, intente de nuevo";
    }
}


 ?>