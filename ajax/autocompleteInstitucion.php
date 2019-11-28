<?php 
include_once '../bd/conexion.php';

if (isset($_POST['query'])) {

	$a = $_POST['query'];

	$search = "%$a%";

	
	$query = "SELECT * FROM alumno_basica a INNER JOIN institucion WHERE nombre_institucion LIKE :i GROUP BY nombre_institucion";
	$stmt = $db->prepare($query);
	$stmt->bindParam(':i', $search);
	$stmt->execute();

	$count = $stmt->rowCount();
	$data = array();
	if ($count > 0) {
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row['nombre_institucion'];
		}
		
	}
	else{
		$data[]= "Datos no econtrados";
	}
	echo json_encode($data);
		
}

 ?>