<?php

session_start();

function guardarMensaje($r, $d, $m, $f) {
    
    $mensaje = [$r, $m, $f];
    
    if (! isset($_SESSION['usuarios'][$r]['mensajes'][$d])) {
        $_SESSION['usuarios'][$r]['mensajes'][$d] = [];
        array_push($_SESSION['usuarios'][$r]['mensajes'][$d], $mensaje);
    }
    else {
        array_push($_SESSION['usuarios'][$r]['mensajes'][$d], $mensaje);
    }
    
}


$remitente = $_POST['remitente'];
$destinatario = $_POST['destinatario'];
$mensaje = $_POST['mensaje'];
$fecha = date("d/m/Y h:i:s");

guardarMensaje($remitente, $destinatario, $mensaje, $fecha);

echo "Mensaje enviado. <br/>Volver a la <a href='listaUsuarios.php'>Lista de Usuarios</a>.";

?>