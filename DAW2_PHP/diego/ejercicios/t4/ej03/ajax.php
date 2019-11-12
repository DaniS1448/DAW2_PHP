<?php 
// utilizo el array de bd.php llamandolo
require_once 'bd.php';
//guardo el valor del radio que he pulsado
$idioma=$_GET ['idioma'];
//unimos todo el array en una cadena para tratarla en index
$cadena=implode("/", $BDidiomas[$idioma]);
//el echo es lo que usamos/cambia en index.php (separamos la cadena alli)
echo $cadena;


?>

