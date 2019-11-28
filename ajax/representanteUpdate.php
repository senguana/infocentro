<?php 
require_once ("../bd/conexion.php");
// require_once '../funciones/representante.php';

if (empty($_POST['id_repre'])) {
    echo "ID esta vacio";
}elseif (empty( $_POST['profesion_repre'])) {
    echo "<p class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Debes ingresar la profesiòn del representante</p>";
}
elseif (!empty($_POST['id_repre'])) {
    $dni= $_POST['dni_repre'];
    $nombre= $_POST['nombre_repre'];
    $apellido= $_POST['apell_repre'];
    $telefono= $_POST['repre_tel'];
    $profesion = $_POST['profesion_repre'];
    $genero= strval($_POST['genero_repre']);
    
    $id_repre= intval($_POST['id_repre']);

    $sql = "UPDATE representante SET dni_repre=?, nombres_repre=?, apellidos_repre=?, telefono_repre=?, cod_profesion=?, genero=?  WHERE id_repre=?";

    $result = $db->prepare($sql);

    $result->execute([$dni,$nombre,$apellido,$telefono, $profesion, $genero,$id_repre]);

    // $insertar = actualizarRepre($dni, $nombre, $apellido, $telefono, $genero, $profesion, $id_repre);

    if ($result==true) {
        echo "<p class='btn-success' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Se actualizò los datos correctamente</p>";
    }else{
        echo "Tuvimos un problema en el proceso, intente de nuevo";
    }
}


 ?>