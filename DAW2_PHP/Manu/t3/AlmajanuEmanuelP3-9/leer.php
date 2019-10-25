<?php
session_start();

echo "Usuario actual ".$_SESSION['_activo'];
echo "<h3>Lista de mensajes de {$_GET['remitente']}</h3>";
echo "<table>";
echo "<tr><th>Fecha</th><th>Texto</th></tr>";

foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] as $e => $a){
    echo "<tr> <td> {$a['fecha']} </td> <td> {$a['texto']} </td></tr>";
}

echo "</table>";
echo "<a href=\"listaUsuarios.php\">Volver a lista de usuarios</a>";
?>