<?php 
require_once ("../bd/conexion.php");
require_once '../funciones/usuario.php';

if (empty($_POST['id_user1'])) {
    echo "ID esta vacio";
}elseif (empty($_POST['usuario_usua']) or empty($_POST['confirmpassword'])) {
    echo "Debes ingresar contraseñas";
}
elseif (userName($_POST['usuario_usua'])) {
    echo "El usuario que ingresaste está en uso";
}elseif (confirmpassword($_POST['password_usua'], $_POST['confirmpassword'] )) {
    echo "Las contraseñas no coinciden";

}elseif (!empty($_POST['usuario_usua']) && !empty($_POST['password_usua'])) {

    $usuario= $_POST['usuario_usua'];
    $password= strval($_POST['password_usua']);    
    $id_user1= intval($_POST['id_user1']);
    $user_password_hash = password_hash($password, PASSWORD_DEFAULT);

    $insertar = actualizarPassword($usuario, $user_password_hash, $id_user1);

    if ($insertar===true) {
        echo "Se cambio usuario y password correctamente";
    }else{
        echo "Tuvimos un problema en el proceso, intente de nuevo";
    }
}


 ?>