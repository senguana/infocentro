<?php 
if (empty($_POST['delete_id'])){
        echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>ID vació  </div>";
    } elseif (!empty($_POST['delete_id'])){
    
    include_once '../bd/conexion.php';
    include_once '../funciones/usuario.php';

    $id_nivel=intval($_POST['delete_id']);

     $sql = "DELETE FROM grado WHERE id_grado=:id";
    $query = $db->prepare($sql);
    $query->execute(array(":id" => $id_nivel));
   
    if ($query) {
        return true;
    } else {
        return false;
    }

    $db = null;
}
 ?>