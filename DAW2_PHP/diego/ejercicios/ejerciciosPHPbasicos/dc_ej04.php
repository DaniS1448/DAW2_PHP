<?php
$n=0;
$suma=0;
$multi=1;

do{
    echo "Introduce n: ";
    fscanf(STDIN, "%d0", $n);
    $suma = $suma + $n;
    if ($n != 0) {$multi = $multi * $n;}
    
} while ($n != 0);

echo "operacion? (sumar, multiplicar)";

fscanf(STDIN, "%s\n", $op);

if ($op == sumar) {
    echo $sum;
} else if ($op == multiplicar) {
    echo $mul;
} else {
    echo "algo has hecho mal";
}

?>