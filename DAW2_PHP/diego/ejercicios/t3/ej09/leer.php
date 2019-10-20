<?php

session_start();

function leerMensaje() {
    $remitente = explode("=", $_SERVER['REQUEST_URI']);
    
    echo "Usuario actual {$_SESSION['usuario']}";
    echo "<h2>Lista de mensajes de {$remitente[1]}</h2>";
    echo "<table><tr><td>Fecha</td><td>Mensaje</td></tr>";
    foreach ($_SESSION['usuarios'][$remitente[1]]['mensajes'][$_SESSION['usuario']] as $usu) {
        echo "<tr><td>$usu[2]</td><td>$usu[1]</td></tr>";}
        echo "</table>";
        echo "<br/>Volveer a la <a href='listaUsuarios.php'>Lista de Usuarios</a>";
}
leerMensaje();
?>
