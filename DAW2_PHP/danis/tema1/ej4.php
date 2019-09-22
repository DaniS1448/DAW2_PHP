<?php

$n=0;
$suma=0;
$multi=1;

do{
    echo "Introduce n: ";
    fscanf(STDIN, "%d0", $n);
    $suma = $suma + $n;
    if ($n != 0) {$multi = $multi * $n;}
    
} while ($n != 0);

echo "Operación? ";
$operacion = "";
fscanf(STDIN, "%s\n", $operacion);

switch ($operacion) {
    case "sumar":
    echo "\nLa suma vale $suma";
    break;
    
    case "multiplicar":
        echo "\nLa multiplicación vale $multi";
        break;
    
    default:
        echo "Error: la operación no es válida";
    break;
}
?>