<?php
// Dado un texto contenido en una cadena,
// sustituir todas las apariciones de la palabra ‘tonto’ por ‘*****’
$cadena = "hola tonto. pero mira que eres tonto tonto";
echo $cadena, PHP_EOL, str_replace('tonto', '*****', $cadena);
?>