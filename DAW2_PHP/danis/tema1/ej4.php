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

echo "Operaci�n? ";
$operacion = "";
fscanf(STDIN, "%s\n", $operacion);

switch ($operacion) {
    case "sumar":
    echo "\nLa suma vale $suma";
    break;
    
    case "multiplicar":
        echo "\nLa multiplicaci�n vale $multi";
        break;
    
    default:
        echo "Error: la operaci�n no es v�lida";
    break;
}
?>