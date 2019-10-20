<?php
session_start();

function loginOK($n, $p)
{
    $login = false;
    if (isset($_SESSION['usuarios'][$n])) {
        if ($_SESSION['usuarios'][$n][1] == $p) {
            $login = true;
        }
    }
    return $login;
}

$nombre = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;

if (loginOK($nombre, $pwd)) {
    session_start();
    $_SESSION['usuario'] = $nombre;
    header('Location:listaUsuarios.php');
} else {
    echo "<h4>Usuario o Contrase&ntilde;a incorrectos</h4>";
    echo '<a href="login.php">Volver a Login</a>';
    // Tiempo redireccion
    header("refresh:3, url=login.php");

    // echo "Error";
}
?>