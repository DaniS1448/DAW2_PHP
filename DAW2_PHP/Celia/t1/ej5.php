<?php
/*Similar al ejercicio 3, dado un número ciclar entre las palabras “as”, “dos”,
 *  … “siete”, “sota”, “caballo” y “rey” tantas veces como diga tal número.
	Ejemplo
Introduce n: 5
	as dos tres cuatro cinco
	
Ejemplo:
Introduce n: 16
as dos tres cuatro cinco seis siete sota caballo rey as dos tres cuatro cinco seis
 */


echo "Introduce n: ";
fscanf ( STDIN, "%d\n", $n );

$cartas = ['as','dos','tres','cuatro','cinco','seis','siete','sota','caballo','rey'];

for($i = 0; $i < $n; $i ++) {
    echo $cartas[$i%10], ' ';
}

?>