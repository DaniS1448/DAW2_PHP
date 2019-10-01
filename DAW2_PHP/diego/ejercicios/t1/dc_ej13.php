<?php 

// Mejorar el programa anterior para que haga esa sustitución,
// no sólo para la palabra ‘tonto’, sino para una lista de palabras prohibidas
// proporcionada en un array de string.

$cadena = 'Eres tonto, y tu padre es muy feo. Eso es todo, asqueroso';
$prohibidas = ['tonto', 'asqueroso', 'feo'];
$cadenaOriginal = $cadena;

foreach ($prohibidas as $prohibida) {
    $cadena = str_replace($prohibida, '*****', $cadena);
}
echo $cadenaOriginal, PHP_EOL, $cadena;


?>