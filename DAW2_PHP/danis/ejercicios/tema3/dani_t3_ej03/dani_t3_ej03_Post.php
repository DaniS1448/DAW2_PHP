<?php 

$nombre=$_GET['nombre'];
$contenido=$_GET['contenido'];

$ruta=pathinfo($_SERVER['REQUEST_URI'])['dirname'];
$nivel=$_GET['nivel'];
if ($nivel == 1) $ruta.='/uno';
if ($nivel == 2) $ruta.='/uno/dos';

setcookie($nombre, $contenido, 0, $ruta);

echo 'La cookie se ha guardado correctamente en la ruta ' . $ruta;
?>