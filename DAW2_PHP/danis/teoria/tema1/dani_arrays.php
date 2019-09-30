<?php
$colorFavorito = [
    'pepe' => 'rojo',
    'ana' => 'azul',
    'pepa' => 'verde'
];

$colorFavorito['juancho'] = 'bermellón';

unset($colorFavorito['juancho']);

foreach ($colorFavorito as $persona => $color) {
    echo "[$persona] color: $color\n";
}
echo "\n";

$pila=['uno', 'dos', 'tres'];
$pila[sizeof($pila)]='cuatro';
array_push($pila, 'cinco');
$pila[]='seis';

foreach ($pila as $e){
    echo "$e\n";
}

echo "\n";

print_r($pila);

echo "\n";

echo array_pop($pila); //lo saca y me lo muestra, ya no está en el array

echo "\n";

print_r($pila);

echo "\n";

$cola=['uno', 'dos', 'tres'];
array_unshift($cola, 'cuatro');
array_unshift($cola, 'cinco');
array_unshift($cola, 'seis');
print_r($cola);

echo "\n";

$cola2=[];
array_unshift($cola2, 'uno');
array_unshift($cola2, 'dos');
array_unshift($cola2, 'tres');
array_unshift($cola2, 'cuatro');
print_r($cola2);
array_shift($cola2);
echo "\n";
print_r($cola2);

$a = [10,30,100];

echo in_array(30, $a)?"SI":"NO";

echo "\n";

$a = ['a' => 10,'b'=>30,'z'=>100];

echo in_array('y', array_keys($a))?"SI":"NO";

?>