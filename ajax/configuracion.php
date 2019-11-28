<?php 
include_once '../bd/conexion.php';

 $entidad = $_POST['entidad'];

 $fondo   = $_FILES['fondo'];
 $imagen1 = $_FILES['imagen1'];
 $imagen2 = $_FILES['imagen2'];
 $imagen3 = $_FILES['imagen3'];
 $imagen4 = $_FILES['imagen4'];

 if (($fondo["type"]=="image/jpg" OR $fondo["type"]=="image/jpeg" OR $fondo["type"]=="image/png") AND ($imagen1["type"]=="image/jpg" OR $imagen1["type"]=="image/jpeg" OR $imagen1["type"]=="image/png") AND ($imagen2["type"]=="image/jpg" OR $imagen2["type"]=="image/jpeg" OR $imagen2["type"]=="image/png") AND ($imagen3["type"]=="image/jpg" OR $imagen3["type"]=="image/jpeg" OR $imagen3["type"]=="image/png") AND ($imagen4["type"]=="image/jpg" OR $imagen4["type"]=="image/jpeg" OR $imagen4["type"]=="image/png")) {

 	
    $ruta = "../upload/".md5($fondo["tmp_name"]).".jpg";
    // $ruta = ""
    $ruta1 = "../upload/".md5($imagen1["tmp_name"]).".jpg";
    $ruta2 = "../upload/".md5($imagen2["tmp_name"]).".jpg";
    $ruta3 = "../upload/".md5($imagen3["tmp_name"]).".jpg";
    $ruta4 = "../upload/".md5($imagen4["tmp_name"]).".jpg";

    $consulta = "SELECT * FROM configuracion";
    $consulta=$db->prepare($consulta);
    $consulta->execute();
    $id = $consulta->rowCount();

    if ($id > 0) {
        $query = "UPDATE configuracion SET entidad=:e, imagen_fondo=:f, imagen1=:img1, imagen2=:img2, imagen3=:img3, imagen4=:img4";
            $update=$db->prepare($query);
            $update->bindParam(':e', $entidad);
            $update->bindParam(':f', $ruta);
            $update->bindParam(':img1', $ruta1);
            $update->bindParam(':img2', $ruta2);
            $update->bindParam(':img3', $ruta3);
            $update->bindParam(':img4', $ruta4);
            $update->execute();

            if ($update) {
                move_uploaded_file($fondo["tmp_name"], $ruta);
        move_uploaded_file($imagen1["tmp_name"], $ruta1);
        move_uploaded_file($imagen2["tmp_name"], $ruta2);
        move_uploaded_file($imagen3["tmp_name"], $ruta3);
        move_uploaded_file($imagen4["tmp_name"], $ruta4);
                echo "<p class='btn btn-success'>Se actualizó correctamente</p>";
                exit();
            }else{
                echo "No se pudo actualizar";
                exit();
            }

    }else{


 	$query = "INSERT INTO configuracion (entidad, imagen_fondo, imagen1, imagen2, imagen3, imagen4) VALUES (:e,:f,:img1,:img2,:img3,:img4)";
 	$insertar=$db->prepare($query);
    $insertar->bindParam(':e', $entidad);
    $insertar->bindParam(':f', $ruta);
    $insertar->bindParam(':img1', $ruta1);
    $insertar->bindParam(':img2', $ruta2);
    $insertar->bindParam(':img3', $ruta3);
    $insertar->bindParam(':img4', $ruta4);
    $insertar->execute();

    if ($insertar) {
    	move_uploaded_file($fondo["tmp_name"], $ruta);
    	move_uploaded_file($imagen1["tmp_name"], $ruta1);
    	move_uploaded_file($imagen2["tmp_name"], $ruta2);
    	move_uploaded_file($imagen3["tmp_name"], $ruta3);
    	move_uploaded_file($imagen4["tmp_name"], $ruta4);
    	echo "Datos guardados correctamente";

    }else{
    	echo "Ocurrío un error";
    }
}

 }else{
 	echo "<p class='btn btn-danger'>Revise las extensiones de las imagenes, solo son permitidos <code>*jpg, *png, *jpeg</p>";
 }

 ?>