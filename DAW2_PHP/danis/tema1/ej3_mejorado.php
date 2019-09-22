<?php

$n=0; $p=0;
echo "Introduce n: ";
fscanf(STDIN, "%d\n", $n);

echo "Introduce p: \n";
fscanf(STDIN, "%d\n", $p);

for ($i = 0; $i < ($n*$p); $i++) {
    echo $i%$p . " ";
}

?>