<?php
$n=0;
$linea="";
echo "Introduce línea de texto:";
fscanf(STDIN, "%s\n", $linea);

echo "Introduce n: ";
fscanf(STDIN, "%d\n", $n);

if ($n >= 0 && $n <=6) {
    for ($i = 1; $i <= $n; $i++) {
        echo "<h$i>$linea</h$i>\n";
    }
    for ($j = ($n-1); $j >0; $j--) {
        echo "<h$j>$linea</h$j>\n";
    }
} else {
    echo "Error: el número debe estar entre 1 y 6";
}
?>