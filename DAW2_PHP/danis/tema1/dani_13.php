<?php

$cadena = "Yo no soy tonto, ni feo. Mediamarkt!";

$palabrasProhibidas = ['tonto', 'feo','cabron'];

foreach ($palabrasProhibidas as $palabra){
    $cadena = str_replace($palabra, '*****', $cadena);
}


echo $cadena;

?>