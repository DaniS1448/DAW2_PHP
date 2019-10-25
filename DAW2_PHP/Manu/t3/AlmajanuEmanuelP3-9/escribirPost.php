<?php
session_start();

if (!isset($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'])){
    $_SESSION['usuarios'][$_SESSION['_activo']]['mensajes']=[];
}

$remitente=$_GET['remitente'];
$destinatario=$_GET['destinatario'];
$mensaje=$_GET['texto'];
$numMensaje=count($_SESSION['usuarios'][$destinatario]["mensajes"]);

$_SESSION['usuarios'][$destinatario]['mensajes'][$numMensaje]['remitente']=$remitente;
$_SESSION['usuarios'][$destinatario]['mensajes'][$numMensaje]['fecha']=date("d/m/Y (H:m)");
$_SESSION['usuarios'][$destinatario]['mensajes'][$numMensaje]['texto']=$mensaje;

echo "Mensaje enviado, volviendo en 3 segundos...";
header("refresh:3;url=listaUsuarios.php");
?>