<?php

$suma = 0;
$mult = 1;

do {
    echo "Introduce n: ";
    fscanf(STDIN,"%d\n", $n);
    $suma = $suma + $n;
    if ($n !=0) {
        $mult = $mult*$n;
    }

}while ($n !=0);
    echo "Operaci�n ? ";
    $operacion = "";
    fscanf(STDIN,"%s\n", $operacion);
    
    
    switch ($operacion) {
        case "sumar": echo "\nLa suma vale $suma";break;
        case "multiplicar": echo "\nLa multiplicacion vale $mult";break;
        
       default:
           echo "Error: la operaci�n no es valida";break;
         
    }



?>