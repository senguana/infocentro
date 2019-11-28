<?php

// function getGrado(){
// require_once ("../bd/conexion.php");
// $id = $_POST['id'];
//   $query = "SELECT * FROM institucion WHERE ";
//   $result = $db->prepare($query);
//   $result->execute();
//   $grado = '<option value="0">Elige una opción</option>';
//   while($row = $result->fetch(PDO::FETCH_OBJ)){
//     $grado .= "<option value='$row->id_institucion'>$row->nombre_institucion</option>";
//   }
//   return $grado;
// }
// echo getListasRep();

include_once './../bd/conexion.php';
$nom = $_GET['q'];
 
			$consulta = "SELECT *  FROM alumno_basica WHERE nombres_alum_s LIKE '%$nom%' OR dni_alum_s LIKE '%$nom%'"; 

			$query_listar = $db->prepare($consulta);
			$query_listar->execute();
			$nombres = array();
 
			while($row=$query_listar->fetch(PDO::FETCH_ASSOC)){
				$nombres[] = $row['nombres_alum_s'];

				}

				echo json_encode($nombres);
		
			
			


 
?>