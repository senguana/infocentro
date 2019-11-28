
<?php 
include_once '../bd/conexion.php';
if (empty($_POST['id_delete'])){
        echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>ID vació  </div>";
} elseif (!empty($_POST['id_delete'])){
    
  

    

    $id_institucion=intval($_POST['id_delete']);


    $sql = "DELETE FROM institucion WHERE id_institucion=:id";
    $query = $db->prepare($sql);
    $query->execute(array(":id" => $id_institucion));
   
    if ($query) {
        return true;
    } else {
        return false;
    }

    $db = null;
}
 ?>