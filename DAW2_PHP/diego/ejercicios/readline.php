<?php
/*Dado un texto contenido en una cadena, sustituir todas las apariciones de la palabra �tonto� por �*****�*/

echo "Escribe un texto: ";
$cadena=readLine();

echo str_replace("tonto","******",$cadena);


?>