<?php
/*Pedir infinitos n�meros enteros (hasta que se introduzca) el cero.
 finalmente cu�l fue el m�ximo y cu�l fue el m�nimo.*/
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

echo "M�ximo: $max\n";
echo "Minimo: $min";
?>