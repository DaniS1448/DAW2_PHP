<?php
$array=['as', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'sota', 'caballo', 'rey'];
$n=0;

echo "Introduce n: ";
fscanf(STDIN, "%d0", $n);

$j=0;

for ($i = 0; $i < $n; $i++) {
    if ($j < sizeof($array)){
        echo $array[$j]." ";
        $j++;
    } else {
        $j=0;
        echo $array[$j]." ";
        $j++;
    }
}

?>