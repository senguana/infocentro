<?php

// include_once 'configuracion.php';

 $link = 'mysql:host=localhost;dbname=sistema-infocentro;charset=utf8';

 $usuario  = 'root';
 $password = '';

  try {

    $db= new PDO($link, $usuario, $password);
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado";

    // foreach($pdo->query('SELECT * from colores') as $fila) {
   //      print_r($fila);
   //  }

  } catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>