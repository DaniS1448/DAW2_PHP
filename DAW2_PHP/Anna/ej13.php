<?php
/*Dado un texto contenido en una cadena, sustituir todas las apariciones de la palabra 
 * �tonto� por �*****�
 * Mejorar el programa anterior para que haga esa sustituci�n, no s�lo para la palabra �tonto�, 
 * sino para una lista de palabras prohibidas proporcionada en un array de string.
 */

$texto=<<<TEXTO
Un texto es una composici�n de signos codificados en un 
sistema de escritura que forma una unidad de sentido tonto. 
Tambi�n es una composici�n de caracteres imprimibles generados 
por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona tonto, 
s� puede ser descifrado por su destinatario original. 
TEXTO;
//---------------------------------------
$a=["tonto","texto","persona"];
foreach($a as $palabra){
    $texto = str_replace($palabra, '*****', $texto);
}
echo $texto;
?>