<?php
echo "Introduce n: ";
fscanf(STDIN, "%d\n", $n);
$min = $n;
$max = $n;

while ($n != 0) {
    if ($n > $max) {
        $max = $n;
    }
    if ($n < $min) {
        $min = $n;
    }
    echo "Introduce n: ";
    fscanf(STDIN, "%d\n", $n);
}

if ($max == 0) {
    echo "Introduce un número al menos: ";
} else {
    echo "Maximo: $max\n";
    echo "Minimo: $min\n";
}
