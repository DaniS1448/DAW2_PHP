<?php
function pintarFormulario($usuario="",  $pwd="") {
echo <<<HTML
<form method="get" action="ej16.php">
Nombre
<input type="text" name="nombre"/><br/>
Contraseña
<input type="password" name="clave" /><br/>
<input type="submit" value="Enviar" name="enviar">
</form>
HTML;
}
function comprobarNombre($nombre){
    $correcto=($nombre=='')?false:true;
    return $correcto;
}
function comprobarClave($clave){
    $claveL=strlen($clave);
    $correcto=($claveL<=6||$clave>=12)?false:true;
   return $correcto;
}
if(!isset($_REQUEST['enviar'])){
    pintarFormulario();}
    else{
if(!comprobarNombre($_REQUEST['nombre']))
{
    echo "Nombre no puede estar vacio";
    pintarFormulario();
}
else if(comprobarNombre($_REQUEST['nombre'])&&!comprobarClave($_REQUEST['clave'])){
    echo "La contrace�a debe tener de 6 a 12 caracteres";
    pintarFormulario();}
else {
    $nombre=isset($_GET['nombre'])?$_GET['nombre']:"root";
    $clave=isset($_GET['clave'])?$_GET['clave']:"iesrey";
    echo "Hola '$nombre', tu contraceña es '$clave' ";}
}
?>


