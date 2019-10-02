<?php
/*Dado dos números n y p (con p entre 1 y 10), ciclar entre el cero y el p-1 tantas 
 * veces como diga n.*/
echo "Introduce n: ";
fscanf(STDIN,"%d\n",$n);
echo "Introduce p: ";
fscanf(STDIN,"%d\n",$p);
$num=0;

for($n;$n>0;$n--){
    for($num;$num<$p;$num++){
        echo "$num ";
    }
    $num=0;
}
?>