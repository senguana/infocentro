<?php 
if (empty($_POST['delete_id'])){
        $errors[] = "Id vacío.";
    } elseif (!empty($_POST['delete_id'])){
    
    include_once '../bd/conexion.php';
    include_once '../funciones/usuario.php';

    $id_usuario=intval($_POST['delete_id']);

    $elimnar = EliminarUsuario($id_usuario);
    if ($elimnar) {
        echo "El usuario ha sido eliminado con éxito.";
    } else {
        echo "Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.";
    }
}
 ?>