<?php
session_start();
//session_destroy();
//$_SESSION['estado'] = false;
$_SESSION['estado'] = false;

if (isset($_GET['radio'])) {
    $_SESSION['bandera'] = $_GET['radio'];
}
?>
Adiós <b><?= $_SESSION['nombre'] ?>.</b> Usted no está conectado.
<a href="home.php">INICIO</a>
<a href="login.php">LOGIN</a>
