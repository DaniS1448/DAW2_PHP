<?php

echo "Introduce n: ";
fscanf(STDIN, "%d\n",$num);
$max=$num;
$min=$num;

while ($num!=0){
    echo "Introduce n: ";
    fscanf(STDIN, "%d\n",$num);
    if($num>$max){
        $max=$num;
    }
    if($num<$min && $num!=0){
        $min=$num;
    }}
    echo "Máximo: ".$max;
    echo "\n";
    echo "Minimo: ".$min;

?>