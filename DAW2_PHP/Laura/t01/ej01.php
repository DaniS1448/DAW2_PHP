<?php
/*
echo "Introduce numeros hasta llegar al 0:\n ";
echo "Introduce  n: ";

fscanf(STDIN,"%d\n", $numero);

$min = $numero;
$max = $numero;

while ($numero != 0) {
    echo "Introduce  n: ";
    fscanf(STDIN,"%d\n", $numero);
    
    if ($numero < $min) {
        $min=$numero;
    }
    if ($numero > $max) {
        $max=$numero;
    }
}

echo "M�ximo: $max\n";
echo "M�nimo: $min ";
*/

//------PROFE--------
$n = 1;

echo 'Introduce n: ';
fscanf(STDIN,"%d\n", $n);
$max = $n;
$min = $n;

while ($n !=0) { 
    echo "Introduce  n: ";
    fscanf(STDIN,"%d\n", $n);
    $max = (($n>$max && $n !=0) ? $n : $max);
    $min = (($n<$min && $n !=0) ? $n : $min);
}

echo "M�XIMO: $max\n";
echo "M�NIMO: $min ";











?>