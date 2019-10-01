<?php

$cadena = "Yo no soy tonto, ni feo. Mediamarkt!";

$palabrasProhibidas = ['tonto', 'feo','cabron'];

$cadena = str_replace($palabrasProhibidas, '*****', $cadena);

echo $cadena;

?>