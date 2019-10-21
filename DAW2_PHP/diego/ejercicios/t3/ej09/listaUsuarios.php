<?php
session_start();
// ingresa sesion con el nombre ingresado en el login
echo "Usuario actual {$_SESSION['_activo']}";
echo "<h2>Lista de usuarios / mensajes</h2><br/>";
// me listas todos los usuarios
foreach ($_SESSION['usuarios'] as $k => $v) {
    // si no es el usuario activo
    if ($k != $_SESSION['_activo']) {
        // solo me muestra leer
        echo "$k ";
        echo "<a href='leer.php'>Leer</a> <br/>";
    } // si el usuario es el activo
    else { // me muestra Escribir y Leer
        echo "$k ";
        echo "<a href='leer.php'>Leer</a> ";
        echo "<a href='escribir.php'>Escribir</a><br/> ";
    }
}
echo "<br/><a href='login.php'>Volver a Login</a>";
?>