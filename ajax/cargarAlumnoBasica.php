<?php 
include_once './../bd/conexion.php';
if (isset($_POST['search'])) {
	$response = "<ul><li>Not found<li></ul>";

	$nombres = $_POST['q'];

	$query = "SELECT * FROM alumno_basica WHERE nombres_alum_s LIKE '%$nombres%'";
	$query=$db->prepare($query);
	$query->execute();
	$count = $query->rowCount();
	
	
	if ($count > 0) {
		$response ="<div class='card'>
		<div class='card-body'>
	";
		while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
			$response .="<ul class='list-group list-group-flush'>
		<li class='list-group-item'><b>Nombres: </b> " .$data['nombres_alum_s']."</li>
		<li class='list-group-item'><b>Apellidos: </b> " .$data['apellidos_alumn_s']."</li>
		<li class='list-group-item'><b>Genero: </b> ".$data['genero']."</li>
		<li class='list-group-item'><b>Institucion: </b> ".$data['institucion_id']."</li>
		<li class='list-group-item'><b>Grado: </b> ".$data['grado_id']."</li>
	</ul>
	<form id='agregar_estudiante' name='agregar_estudiante'>
	<input type='text' name='q'  value='".$data['id_alumno_s']."'>
	<button type='submit' class='btn btn-primary'>Agregar</a>
	</form>
	";
		}
		$response .= "</div></div>";
		
	}

	exit($response);
}

 ?>