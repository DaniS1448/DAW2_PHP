<?php
$num=5;
$num=-1;

$num = $num -1;
echo $num;

echo "\n";
$array=[10,20,30];
echo in_array(10, $array);

$colorFavorito = [
    "pepe" => "azul",
    "maria" => "rosa"
];

echo "\n";
echo array_keys($colorFavorito);

$array = [
    'nombre'=>['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'],
    'romano'=>['i', 'ii', 'iii', 'iv', 'v', 'vi', 'vii', 'vii', 'ix']
];

echo sizeof($array);
echo "\n";
//echo array_keys($array);
echo 'res inarray nombre: ',in_array('uno', $array['nombre']);
echo "\n";
echo 'res inarray nombre: ',array_key_exists('nombre', $array);

?>