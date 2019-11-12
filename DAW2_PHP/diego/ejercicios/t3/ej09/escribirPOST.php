<?php
session_start();
// preparamos las variables
$remitente = $_GET['remitente'];
$destinatario = $_GET['destinatario'];
$mensaje = $_GET['mensaje'];
//si no esta creado, lo crea
if (! isset($_SESSION['usuarios'][$destinatario]['mensajes'])) {
    $_SESSION['usuarios'][$destinatario]['mensajes'] = [];
}
//contamos los mensajes que tiene el destinatario y lo guardamos como posicion
$posicion = count($_SESSION['usuarios'][$destinatario]['mensajes']);
// utilizamos las variables para darle valor al array
$_SESSION['usuarios'][$destinatario]['mensajes'][$posicion]['remitente'] = $remitente;
$_SESSION['usuarios'][$destinatario]['mensajes'][$posicion]['fecha'] = date("d/m/Y (H:i)");
$_SESSION['usuarios'][$destinatario]['mensajes'][$posicion]['texto'] = $mensaje;

echo "Mensaje enviado. Redireccionando...<br/>";
header("Refresh:2; url=listaUsuarios.php");



// echo "<pre>";
// print_r($_SESSION['usuarios'][$destinatario]);
// echo "</pre>";

?>