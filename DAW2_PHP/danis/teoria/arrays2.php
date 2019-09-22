<?php
$a = 'pepe';
echo gettype($a);
echo "\n";
var_dump($a);

$edad = [
    19,
    [
        'a' => 10,
        'b' => 'pepe'
    ]
];

echo "Mi nombre es $edad[0] HOLA";
echo "\n";
echo "Mi nombre es {$edad[1]['b']} HOLA";
echo "\n";
?>