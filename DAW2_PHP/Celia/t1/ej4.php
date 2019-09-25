<?php
/* 4. Obtener por teclado infinitos números hasta introducir el 0. Una vez hecho eso, pedir al
usuario qué operación realizar, pudiendo ser ésta “sumar” o “multiplicar”, mostrándose a
continuación la suma o multiplicación (respectivamente) de los datos previamente
introducidos, y en caso de que se introduzca una operación no válida, un mensaje de
error.
Ejemplo:
Introduce n: 1
Introduce n: -7
Introduce n: 0
Operación? sumar
La suma vale -6 */


echo "Introduce n: ";
fscanf ( STDIN, "%d\n", $n );

$i = 0;

while ( $n != 0 ) {
    $a [$i] = $n;
    $i ++;
    echo "Introduce n: ";
    fscanf ( STDIN, "%d\n", $n );
}

echo "Operaci�n?: ";
fscanf ( STDIN, "%s\n", $operacion );

switch ($operacion) {
    case "sumar" :
        mostrarSuma ( $a );
        break;
    case "multiplicar" :
        mostrarMult ( $a );
        break;
    default :
        echo "Operaci�n no v�lida";
}
function mostrarSuma($a) {
    $acc = 0;
    foreach ($a as $v) {
        $acc += $v;
    }
    echo "La suma vale $acc";
}


function mostrarMult($a) {
    $acc = 1;
    foreach ($a as $v) {
        $acc *= $v;
    }
    echo "El producto vale $acc";
}
    
?>







