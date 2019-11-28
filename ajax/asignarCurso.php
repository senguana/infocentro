<?php 
include_once '../bd/conexion.php';
// if (!empty($_POST["buscar_institucion"])) {
	
 	$inst = $_POST["institucion"];
 	$gradoA = $_POST["grado"];

 	$query = "SELECT a.id_alumno_s, a.dni_alum_s, a.nombres_alum_s, a.apellidos_alumn_s, a.genero, i.nombre_institucion, g.descripcion FROM alumno_basica a INNER JOIN institucion i ON a.institucion_id = i.id_institucion INNER JOIN grado g ON a.grado_id = g.id_grado WHERE i.nombre_institucion = ? AND grado_id = ?";

 	$smt = $db->prepare($query);
 	$smt->execute([$inst, $gradoA]);
 	if ($smt->rowCount() > 0) {
 		$alumnos = array();
 		while ($row = $smt->fetch(PDO::FETCH_ASSOC)) {
 			
 			$alumnos['resultado'][]= $row;

			}
		}
		else{
			$alumnos = array('error'=> 'No se encontraron los registros de la institución <span class="badge badge-danger">'.$inst .'</span>');
		}
		echo json_encode($alumnos);
		?>

