<?php
session_start();
$remitente = $_GET['remitente'];
$destinatario = $_GET['destinatario'];
$mensaje = $_GET['mensaje'];
//si no esta creado, me lo creas
if (! isset($_SESSION['usuarios'][$destinatario]['mensajes'])) {
    $_SESSION['usuarios'][$destinatario]['mensajes'] = [];
}
//contamos los mensajes que tiene el destinatario y lo guardamos como posicion
$posicion = count($_SESSION['usuarios'][$destinatario]['mensajes']);
//
$_SESSION['usuarios'][$destinatario]['mensajes'][$posicion]['remitente'] = $remitente;
$_SESSION['usuarios'][$destinatario]['mensajes'][$posicion]['fecha'] = date("d/m/Y (H:i)");
$_SESSION['usuarios'][$destinatario]['mensajes'][$posicion]['texto'] = $mensaje;
//le damos formato para mostrar el array del destinatario
echo "Mensaje enviado. Redireccionando...<br/>";
header("Refresh:2; url=listaUsuarios.php");



// echo "<pre>";
// print_r($_SESSION['usuarios'][$destinatario]);
// echo "</pre>";

?>