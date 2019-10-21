<?php
session_start();
function escribir() {
    $remitente= $_SESSION['usuario'];
    $url = $_SERVER['REQUEST_URI'];
    //$destinatario = explode('=', $url);
   $destinatario = $_GET['destinatario'];
   
    echo "Usuario conectado <b>{$_SESSION['usuario']}</b>";
    echo <<<formulario
   <form action="escribirPost.php" method="post"><br/>
   
   <label for="idRemitente">De: </label>
   <input id="idRemitente" type="text" name="remitente" readonly="readonly" value="{$remitente}"><br/>
   
   <label for="idDestinatario">Para: </label>
   <input id="idDestinatario" type="text" name="destinatario" readonly="readonly" value="{$destinatario}"><br/>
   
   <label for="idTextoMensaje">Escribe el contenido del mensaje</label><br/>
   <textarea rows="10" cols="50" id="idTextoMensaje" type="text" name="mensaje"></textarea><br/>
   
   <input type="submit"/>
   
   </form>
formulario;
}

escribir();
?>