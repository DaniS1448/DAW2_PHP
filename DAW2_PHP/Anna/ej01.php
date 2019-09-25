<?php
/* Pedir infinitos números enteros (hasta que se introduzca) el cero. 
 * Indicar finalmente cuál fue el máximo y cuál fue el mínimo.
Ejemplo:
Introduce n: -9
Introduce n: 1
Introduce n: 7
Introduce n: -10
Introduce n: 3
Introduce n: 0
Máximo: 7
Mínimo: -10 */

$n=1;
$i=0;
$a=array();
do{
    echo "Introduce n:";
    fscanf(STDIN, "%d\n",$n);
    $a[$i]=$n;
    $i++;
}
    while($n!=0);
    
    echo "Máximo: ".max($a);
    echo PHP_EOL;
    echo "Minimo: ".min($a);
?>