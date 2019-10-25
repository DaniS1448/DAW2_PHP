<?php

$remitente = isset ( $_REQUEST ['remitente'] ) ? $_REQUEST ['remitente'] : null;
$destinatario = isset ( $_REQUEST ['destinatario'] ) ? $_REQUEST ['destinatario'] : null;

if ($remitente != null && $destinatario!= null) {
    echo <<<FORMULARIO
    <form action="escribirPost.php" method="post">
	De:<input type="text" name="remitente" value="$remitente" readonly="readonly"><br>
    Para:<input type="text" name="destinatario" value="$destinatario" readonly="readonly"><br>
    Escribe el contenido del mensaje<br>
    <textarea name="mensaje" rows="10" cols="40"></textarea><br>
    <input type="submit">
    </form>
FORMULARIO;
} else {
    echo "ERROR, no hay remitente o destinatario";
}



