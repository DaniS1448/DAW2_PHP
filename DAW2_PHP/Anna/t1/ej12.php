<?php
/*Dado un texto contenido en una cadena, sustituir todas las apariciones de la palabra 
 * �tonto� por �*****�
 */

$texto=<<<TEXTO
Un texto es una composici�n de signos codificados en un 
sistema de escritura que forma una unidad de sentido tonto. 
Tambi�n es una composici�n de caracteres imprimibles generados 
por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona tonto, 
s� puede ser descifrado por su destinatario original. 
TEXTO;
//---------------------------------------
$t='tonto';
$texto = str_replace($t, '*****', $texto);
echo $texto;
?>

