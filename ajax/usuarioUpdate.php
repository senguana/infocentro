<?php 
require_once ("../bd/conexion.php");
require_once '../funciones/usuario.php';

if (empty($_POST['id_user'])) {
    echo "ID esta vacio";
}elseif (!empty($_POST['id_user'])) {
    $dni= $_POST['dni_usua'];
    $nombre= $_POST['nombre_usua'];
    $apellido= $_POST['apell_usua'];
    $email= $_POST['correo_usua'];
    $genero= strval($_POST['genero_usua']);

    // $confirPass = $_POST['confirmpassword'];
    
    $date_added=date("Y-m-d H:i:s");
    
    $id_user= intval($_POST['id_user']);

    $insertar = actualizar($dni, $nombre, $apellido, $email, $genero, $date_added, $id_user);

    if ($insertar===true) {
        echo "Se actualizò los datos correctamente";
    }else{
        echo "Tuvimos un problema en el proceso, intente de nuevo";
    }
}


 ?>