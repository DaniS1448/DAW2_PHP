<?php
/* Dado un n�mero �n�, dibujar l�neas desde n caracteres hasta un car�cter 
 * disminuyendo en un car�cter cada l�nea que se dibuje. 
 * Repetir el patr�n �+� �-� �.� en cada car�cter que se imprima.
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