<?php 

function getListasRep(){
require_once ("../bd/conexion.php");
  $query = "SELECT * FROM institucion";
  $result = $db->prepare($query);
  $result->execute();
  $listas = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch(PDO::FETCH_OBJ)){
    $listas .= "<option value='$row->id_institucion'>$row->nombre_institucion</option>";
  }
  return $listas;
}
echo getListasRep();

?>