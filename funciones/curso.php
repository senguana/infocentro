<?php 

function SeleccionarDocente()
{
	
	$sql = "SELECT id_docente, nombre from docente ";
	$stmt = $db->prepare($sql);
	$result_consulta = $stmt->execute();
	$cargar_datos = $stmt->fetchAll(PDO::FETCH_OBJ);
}

 ?>