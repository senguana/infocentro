<?php 
require_once ("../bd/conexion.php");


if (empty($_POST['institucion'])) {
    echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Complete el campo 
                </div>";

}elseif (!empty($_POST['institucion'])) {

    $grado= $_POST['institucion'];
    $gradoExist = "SELECT * FROM institucion WHERE nombre_institucion = ?";
    $query = $db->prepare($gradoExist);
    $query->execute([$grado]);
    $row = $query->rowCount();

    if ($row > 0) {
        echo "<div  class='btn-danger' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Este institucion ya está registrado en nuestro Base de Datos  
                </div>";

        exit();
    }else {
    $query_agregar = "INSERT INTO institucion (nombre_institucion) VALUES (?)";

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