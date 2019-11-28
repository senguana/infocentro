<?php 
require_once ("../bd/conexion.php");


if (empty($_POST['grado'])) {
    echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Complete el campo 
                </div>";

}elseif (!empty($_POST['grado'])) {

    $grado= $_POST['grado'];
    $gradoExist = "SELECT * FROM grado WHERE descripcion = ?";
    $query = $db->prepare($gradoExist);
    $query->execute([$grado]);
    $row = $query->rowCount();

    if ($row > 0) {
        echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Este grado ya está registrado en nuestro Base de Datos  
                </div>";

        exit();
    }else {
    $query_agregar = "INSERT INTO grado (descripcion) VALUES (?)";

    $insertar=$db->prepare($query_agregar);
    $insertar->execute([$grado]);

    if ($insertar) {
        echo "<div  class='btn-success' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Se insertó correctamente  
                </div>";
    }else{
        echo "Tuvimos un problema en el proceso, intente de nuevo";
    }
}

}

 ?>