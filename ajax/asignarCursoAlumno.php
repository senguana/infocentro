<?php 
include_once '../bd/conexion.php';


 if (empty($_POST['curso'])) {
 	echo "Debes Seleccionar el curso";
 }elseif (!empty($_POST['alumno']) && !empty($_POST['curso'])) {
 	$alumno = $_POST['alumno'];
 	$curso = $_POST['curso'];

 	$query = "INSERT INTO add_curso_estudiante (alumno_basica_id, curso_id) VALUES (?,?)";

 	$smt = $db->prepare($query);
 	$smt->bindParam(1, $alumno);
    $smt->bindParam(2, $curso);

 	$smt->execute();

 	if ($smt) {
 		echo "<div  class='btn-success' style=' height: 30px; padding: 5px; text-align: center; border-radius: 2px;'>Se agregó correctamente
                </div>";
 	}else {
 		echo "Tuvimos un problema al guardar los datos, intente de nuevo!!";
 	}
 }

 ?>