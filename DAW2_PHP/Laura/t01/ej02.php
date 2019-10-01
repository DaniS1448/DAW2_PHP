<?php

/*
echo "Introduce  n: ";
fscanf(STDIN,"%d\n", $numero);

$linea = $numero;
$patron = ["+", "-", "."];
$contador = 0;

for ($numero; $numero >0; $numero--) {
    for ($linea; $linea>0; $linea--) {
        echo "$patron[$contador]";
        $contador++; 
        
        if ($contador>2) {
            $contador= 0;
        }
        
    }
    $linea=$numero-1;
    echo "\n";
}

*/


/* //----PROFE----//

$n = 0;
$c = '+';

echo 'Introduce n: ';
fscanf(STDIN,"%d\n", $numero);

for ($columna = $numero; $columna >= 1; $columna--) {
   //echo $columna. ': '
   for ($linea = 1; $linea <=$columna; $linea++) {
       echo $c; 
       switch ($c) {
           case '+' : $c = '-';break;
           case '-' : $c = '.';break;
           case '.' : $c = '+';break;
       }
   }
   
   echo "\n";
} */

//---PROFE---//
function sig($c) {
    $sol = 'loquesea';
   
    switch ($c) {
        case '+' : $sol = '-';break;
        case '-' : $sol = '.';break;
        case '.' : $sol = '+';break;
    }
    return $sol;    
}

$n = 0; 
$c = '+';

echo 'Introduce n: ';
fscanf(STDIN,"%d\n", $n);

for ($i = $n; $i >=1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        $c = sig($c); 
        echo $c;
    }
    echo "\n";
}



?>