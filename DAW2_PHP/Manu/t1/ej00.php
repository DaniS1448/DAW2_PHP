<?php

//DEVULEVE "SI" SI EL ARRAY CONTIENE LA CLAVE "Y"
$a=['a'=>10,'b'=>20,'c'=>30];
echo in_array('y',array_keys($a))?"SI":"NO";


echo "\n";


//Eliminar caracteres
$cadena=':::::::::::::::::abc:::::;;;:::::::';
echo trim($cadena,':;');
?>