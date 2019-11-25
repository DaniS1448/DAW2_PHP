<?php
session_start();
// recogemos el valor del usuario activo gracias a la sesion
$usuario=$_SESSION['_activo'];
// recogemos el valor del destinatario con el metodo get empleado en el paso anterior
$destinatario=$_GET['destinatario'];

//usamos el usuario y destinatario para despues recogerlos en escribirPOST

echo <<<ESCRIBIR
<h1>ESCRIBRIR</h1>
<form action="escribirPOST.php" method="get">
De: <input type="text" value="{$usuario}" name="remitente" readonly="readonly"><br/>
Para: <input type="text" value="$destinatario" name="destinatario" readonly="readonly"><br/>
Escribe el contenido del mensaje: <br/>
<textarea cols="50" rows="10" name="mensaje" required="required"></textarea><br/>
<input type="submit" value="Enviar">
</form>
ESCRIBIR;
?>