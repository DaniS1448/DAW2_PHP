<?php
/* Dado un número “n”, dibujar líneas desde n caracteres hasta un carácter 
 * disminuyendo en un carácter cada línea que se dibuje. 
 * Repetir el patrón “+” “-” “.” en cada carácter que se imprima.
Ejemplo:
Introduce n: 7
+-.+-.+
-.+-.+
-.+-.
+-.+
-.+
-.
+

Ejemplo
Introduce n: 2
+-
. */
/* $filas=7;
$nfilas=0;
$columnas=0;
while($nfilas++<$filas) {
    echo "+";
    echo "-";
    echo ".";
    while(($columnas++<$nfilas)) {
        echo PHP_EOL;
    }
    echo PHP_EOL;
} */
$numero=7;
for($n1=0;$n1<$numero;$n1++) {
    for($n2=0;$n2<($numero-$n1);$n2++) {
        if($n2%3==0){
            echo "+";
        }
        else if($n2%2==0){
            echo "-";
        }
        else  echo ".";
    }
    echo PHP_EOL;
}
/* for($filas=7;$n>$filas;$n--){
    for($col=7;$col>$n;$col--){
    echo "+";
    echo "-";
    echo ".";
    }
    echo "+";
    echo "-";
    echo ".";
} */


?>