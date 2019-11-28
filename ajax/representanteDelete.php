<?php 
if (empty($_POST['delete_id'])){
        echo "Id vacío.";
    } elseif (!empty($_POST['delete_id'])){
    
    include_once '../bd/conexion.php';
    include_once '../funciones/representante.php';

    $id_usuario=intval($_POST['delete_id']);

    $elimnar = EliminarRepresentante($id_usuario);
    if ($elimnar) {
        echo "El representante ha sido eliminado con éxito.";
    } else {
        echo "Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.";
    }
}
 ?>