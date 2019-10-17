<?php
// recogemos las variables del login
$usu = isset($_POST['usu']) ? $_POST['usu'] : null;
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;
// iniciamos sesion
session_start();
//
if (isset($_SESSION[$usu]) && $_SESSION['usu'] == $pwd && substr($usu, 0, 1) != '_') {
    $_SESSION['actual'] = $usu;
    header('location:listaUsuarios.php');
} else { // si va mal, redirigimos a login.php
    header('location:login.php');
}

?>