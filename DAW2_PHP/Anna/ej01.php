<?php
/* Pedir infinitos n�meros enteros (hasta que se introduzca) el cero. 
 * Indicar finalmente cu�l fue el m�ximo y cu�l fue el m�nimo.
Ejemplo:
Introduce n: -9
Introduce n: 1
Introduce n: 7
Introduce n: -10
Introduce n: 3
Introduce n: 0
M�ximo: 7
M�nimo: -10 */

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
    
    echo "M�ximo: ".max($a);
    echo PHP_EOL;
    echo "Minimo: ".min($a);
?>