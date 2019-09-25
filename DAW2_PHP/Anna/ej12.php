<?php
/*Dado un texto contenido en una cadena, sustituir todas las apariciones de la palabra 
 * ‘tonto’ por ‘*****’
 */

$texto=<<<TEXTO
Un texto es una composición de signos codificados en un 
sistema de escritura que forma una unidad de sentido tonto. 
También es una composición de caracteres imprimibles generados 
por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona tonto, 
sí puede ser descifrado por su destinatario original. 
TEXTO;
//---------------------------------------
$t='tonto';
$texto = str_replace($t, '*****', $texto);
echo $texto;
?>

