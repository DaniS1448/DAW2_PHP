<?php
session_start();
//recogemos el valor del usuario remitente
$remitente=$_GET['remitente'];
//mostramos el usuario actual
echo "Usuario actual {$_SESSION['_activo']}<br/><br/>";
//mostramos quien es el remitente

echo "<b>Lista de mensajes de $remitente</b>";
echo "<table>";
echo "<tr><th>Fecha</th><th>Texto</th></tr>";
// falta crear una tabla html para organizar lo que se muestra
// mostramos los mensajes del usuario que esta activo
foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] as $k => $v){
    // y que coincidan con el remitente
    if ($remitente == $v['remitente']) {
        echo "<tr><td>".$v['fecha']."</td><td>".$v['texto']."</td></tr><br/>";
    }
}
echo "</table>";
echo "<a href='listaUsuarios.php'><br/>Volver al menú principal</a>";
?>
