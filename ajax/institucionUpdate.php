<?php 
require_once ("../bd/conexion.php");


if (empty($_POST['id_institucion'])) {
    echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Id vacio
                </div>";

}elseif (empty($_POST['nombre_institucion'])) {
    echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Debes completar el campo  </div>";

}elseif (!empty($_POST['id_institucion']) && !empty($_POST['nombre_institucion'])) {

    $institucion = $_POST['nombre_institucion'];
    $id_institucion= $_POST['id_institucion'];
 
    $sql = " UPDATE institucion SET nombre_institucion =:a WHERE id_institucion =:id";
	$stmt2 = $db->prepare($sql);
	$stmt2->bindParam(':a', $institucion, PDO::PARAM_STR); 
	$stmt2->bindParam(':id', $id_institucion, PDO::PARAM_INT); 
	$stmt2->execute();

    if ($stmt2) {
        echo "<div  class='btn-success' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Se actualizó correctamente 
                </div>";
    }else{
        echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Tuvimos un problema en el proceso, intente de nuevo  
                </div>";
    }
}



 ?>