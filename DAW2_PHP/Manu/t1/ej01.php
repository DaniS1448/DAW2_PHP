<?php
/*Pedir infinitos números enteros (hasta que se introduzca) el cero.
 finalmente cuál fue el máximo y cuál fue el mínimo.*/
echo "Introduce n: ";
fscanf(STDIN,"%d\n",$num);

$max=$num;
$min=$num;

while($num!=0){
    
    echo "Introduce n: ";
    fscanf(STDIN,"%d\n",$num);

    if ($num>$max && $num!=0){
       $max=$num;
    }
    if($num<$min && $num!=0){
      $min=$num;
    }

}

echo "Máximo: $max\n";
echo "Minimo: $min";
?>