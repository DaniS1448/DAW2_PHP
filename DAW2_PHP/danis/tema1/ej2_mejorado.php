<?php

$n=0;
echo "Introduce n: ";
fscanf(STDIN, "%d\n", $n);
$c = '+';

for ($i = $n; $i > 0; $i--) {
    //echo $i;
    for ($j = 1; $j <= $i; $j++) {
        echo "$c";

        switch ($c) {
            case "+": $c = "-"; break;
            case "-": $c = "."; break;
            case ".": $c = "+"; break;
        }
    }
    echo "\n";
}
?>