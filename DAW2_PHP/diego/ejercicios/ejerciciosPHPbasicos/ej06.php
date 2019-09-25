<?php

// Mostrar a continuación el nombre de cada persona introducida y su edad (entre paréntesis). -->
// NOTA: Utilizar arrays asociativos. ¿Qué ocurre si dos personas se llaman igual? -->
// ¿Cómo podríamos ver la información anterior ordenada por nombre? ¿Y por edad descendente? -->
$nombre = "aaaaa";
$edad = 1;

echo "Nombre?: ";
fscanf(STDIN, "%s\n", $nombre);

while ($nombre !== "fin") {

    echo "Edad de $nombre?: ";
    fscanf(STDIN, "%d\n", $edad);
    $personas["$nombre"] = $edad;
    echo "Nombre?: ";
    fscanf(STDIN, "%s\n", $nombre);
}

foreach ($personas as $e => $a) {

    echo "$e ($a), ";
}
?>