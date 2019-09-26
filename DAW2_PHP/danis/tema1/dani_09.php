<?php

/* $array = array
 (
 "nombre" => array('uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez'),
 "romano" => array('i', 'ii', 'iii', 'iv', 'v', 'vi', 'vii', 'vii', 'ix', 'x')
 ); */

$array = [
    'nombre'=>['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez'],
    'romano'=>['i', 'ii', 'iii', 'iv', 'v', 'vi', 'vii', 'vii', 'ix', 'x']
];

$miN=0;
echo "N:";
fscanf(STDIN, "%s\n", $miN);
$miFormato=0;
echo "Formato:";
fscanf(STDIN, "%s\n", $miFormato);

for ($i = 0; $i < $miN; $i++) {
    echo ($array[$miFormato][$i]), ', ';
}
?>