<?php
function pintarFormulario($usuario="",  $pwd="") {
echo <<<HTML
<form method="get" action="ej15a.php">
Nombre
<input type="text" name="nombre"/><br/>
Contraseña
<input type="password" name="clave" /><br/>
<input type="submit" value="Enviar" name="enviar">
</form>
HTML;
}
if(!isset($_REQUEST['enviar'])){
    pintarFormulario();
}
else {
    $nombre=isset($_GET['nombre'])?$_GET['nombre']:"root";
    $clave=isset($_GET['clave'])?$_GET['clave']:"iesrey";
    echo "Hola '$nombre', tu contraceña es '$clave' ";}
?>


