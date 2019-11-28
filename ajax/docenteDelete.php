<?php
if (empty($_POST['delete_id'])){
        echo "Id vacío.";
    } elseif (!empty($_POST['delete_id'])){

    include_once '../bd/conexion.php';

    $id_docente=intval($_POST['delete_id']);

     $sql = "DELETE FROM docente WHERE id_docente=:id";
    $query = $db->prepare($sql);
    $query->execute(array(":id" => $id_docente));

    if ($query) {
        echo "El curso ha sido eliminado con éxito.";
    } else {
        echo "Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.";
    }
}
 ?>