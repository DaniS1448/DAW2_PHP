


<?php

/*1. Pedir infinitos n�meros enteros (hasta que se introduzca) el cero. Indicar finalmente cu�l
 fue el m�ximo y cu�l fue el m�nimo.*/
echo "Introduce un numero";
fscanf(STDIN," %d\n", $num);

$max=$num;
$min=$num;
while($num!=0){
    
    echo "Introduce n: ";
    fscanf(STDIN," %d\n", $num);
    if($num>$max){
        $max=$num;
        
    }
    if($num<$min && $num!=0)   {
        $min=$num;}
}

echo "Maximo : $max\n  ";
echo "Minimo : $min\n  ";
?>