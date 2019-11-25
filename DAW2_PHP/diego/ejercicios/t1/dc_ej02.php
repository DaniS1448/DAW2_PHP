<?php

function sigCaracter($c)
{
    switch ($c) {
        case "+":
            $sol = "-";
            break;
        case "-":
            $sol = ".";
            break;
        case ".":
            $sol = "+";
            break;
    }
    return $sol;
}

echo "Introduce n: \n";
fscanf(STDIN, "%d\n", $n);
$c = "+";
for ($i = $n; $i >= 1; $i --) { // este for escribe la linea
    for ($j = 1; $j <= $i; $j ++) { // este for escribe los caracteres
        echo $c;
        $c = sigCaracter($c); //escribimos antes el caracter + para q no lo cambie hasta ahora
    }
    echo "\n";
}
?>