<?php
/*Mejorar el programa anterior para que haga esa sustitución, no sólo para la palabra ‘tonto’, sino para una lista de palabras 
 * prohibidas proporcionada en un array de string.*/

$palabrasProhibidas=["tonto","tonta","retrasado","retrasada","gilipollas"];
echo "Escribe un texto: ";
$cadena=readLine();

echo str_replace($palabrasProhibidas,"******",$cadena);


?>