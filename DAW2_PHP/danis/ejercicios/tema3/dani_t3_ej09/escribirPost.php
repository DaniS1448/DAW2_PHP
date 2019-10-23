<?php

session_start();

$remitente = isset ( $_REQUEST ['remitente'] ) ? $_REQUEST ['remitente'] : null;
$destinatario = isset ( $_REQUEST ['destinatario'] ) ? $_REQUEST ['destinatario'] : null;
$mensaje = isset ( $_REQUEST ['mensaje'] ) ? $_REQUEST ['mensaje'] : null;
$time = time();

if ($remitente != null && $destinatario!= null && $mensaje!= null) {

    if (isset($_SESSION['usuarios'][$destinatario]['mensajes'])) {
        $posicionMensaje=count($_SESSION['usuarios'][$destinatario]['mensajes']);
    } else {
        $posicionMensaje=0;
    }
    
    $_SESSION['usuarios'][$destinatario]['mensajes'][$posicionMensaje]['remitente']=$remitente;
    $_SESSION['usuarios'][$destinatario]['mensajes'][$posicionMensaje]['fecha']=date("d/m/Y (H:i:s)", $time);
    $_SESSION['usuarios'][$destinatario]['mensajes'][$posicionMensaje]['texto']=$mensaje;
    
    echo "<h1>Mensaje enviado correctamente!</h1>";
    echo <<<HTMLE
         REMITENTE: {$_SESSION['usuarios'][$destinatario]['mensajes'][$posicionMensaje]['remitente']}<br/>
         DESTINATARIO: $destinatario<br/>
         FECHA: {$_SESSION['usuarios'][$destinatario]['mensajes'][$posicionMensaje]['fecha']}<br/>
         TEXTO: {$_SESSION['usuarios'][$destinatario]['mensajes'][$posicionMensaje]['texto']}<br/>
         <br/>
         <h3>REDIRIGIENDO EN 5 SEGUNDOS</h3>
HTMLE;
    header( "refresh:5; url=listaUsuarios.php" ); 
} else {
    echo "ERROR";
}
?>