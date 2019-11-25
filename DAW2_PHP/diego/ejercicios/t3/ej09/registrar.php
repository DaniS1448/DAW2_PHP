<?php

session_start();

//$_SESSION['activo'] = "";
echo <<<HTML
<h2>NUEVO USUARIO</h2>
<form action='registrarPOST.php' method='post'>
Nombre: <input type='text' name='nombre_nuevo' required="required"/><br>
Password:  <input type='password' name='clave_nueva' required="required"/><br>
<input type='submit' name='enviar' value='Enviar'/><br/>
</form><br/>
<a href='login.php'>Volver al login</a>
HTML;
?>


