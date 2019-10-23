<?php
session_start();

echo <<<HTML
        <form action="escribirPost.php" method="get">
        De:<input type="text" name="remitente" value="{$_SESSION['_activo']}" readonly/><br>
        Para:<input type="text" name="destinatario" value="{$_GET['destinatario']}" readonly/><br>
        Escribe el contenido del mensaje <br>
        <textarea rows=10 cols=40 name="texto" required="required"></textarea><br>
        <input type="submit" value="Enviar"/>
        </form>
HTML;
?>
