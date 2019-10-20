<?php
session_start();

function crearUsuario($u,$p) {
    if (isset($_SESSION['usuarios'][$u])) {
        echo 'El usuario ya exixte';
        //Volvemos a la pagina registrar y luego a login
        echo '<a href = "registrar.php"> Volver al Registro</a></br>';
    }
    else {
        //Creamos el usuario y lo metemos en ese array de ['usuarios']
        $_SESSION['usuarios'][$u] = [];
        
        array_push($_SESSION['usuarios'][$u],$u,$p);
        echo "Usuario ".$u." creado correctamente. Redirigiendo...<br/>";
        header("refresh:3; url=login.php");
        print_r($_SESSION);
    }
    
}
$usuario = $_POST['usuario'];
$pwd = $_POST['pwd'];

crearUsuario($usuario, $pwd);


// if (! isset($_SESSION['usuarios'])) {

//     $_SESSION['usuarios'] = [];
// }
// //$_SESSION['usuarios'][] = [$_POST['usuario']];
// $_SESSION['usuarios'][$_POST['usuario']]['pwd'] = $_POST['pwd'];


?>