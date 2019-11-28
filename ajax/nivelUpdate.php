<?php 
require_once ("../bd/conexion.php");


if (empty($_POST['id_nivel'])) {
    echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Id vacio
                </div>";

}elseif (empty($_POST['nivel'])) {
    echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Debes completar el campo  </div>";

}elseif (!empty($_POST['id_nivel']) && !empty($_POST['nivel'])) {

    $nivel= $_POST['nivel'];
    $id_nivel= $_POST['id_nivel'];
 
    $sql = " UPDATE grado SET descripcion =:grado WHERE id_grado =:id";
	$stmt2 = $db->prepare($sql);
	$stmt2->bindParam(':grado', $nivel, PDO::PARAM_STR); 
	$stmt2->bindParam(':id', $id_nivel, PDO::PARAM_INT); 
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