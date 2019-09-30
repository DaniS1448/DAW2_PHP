<?php
$pueblo = 'La Mancha';
$texto = <<<PEPE
En un Lugar de $pueblo
de cuyo nodmbre         no me quiero acordar
gagsagsafs
PEPE;

echo $texto;
echo "\n\n";

$texto = <<<'PEPE'
En un Lugar de $pueblo
de cuyo nodmbre         no me quiero acordar
gagsagsafs
PEPE;

echo $texto;
echo "\n\n";

$texto = "
En un Lugar de $pueblo
de cuyo nodmbre         no me quiero acordar
gagsagsafs";

echo $texto;


echo "\n\n";
$cadena = 'abcdefghi';
echo $cadena;
echo "\n";

echo substr($cadena, 2);
echo "\n";

$cacho= substr($cadena, 2, 4);
echo $cacho;
echo "\n";
echo substr($cadena, -2);
echo "\n";
echo substr($cadena, 2, -1);
echo "\n";
echo substr($cadena, -2, -1);
echo "\n";
echo substr($cadena, -3, 4);
echo "\n\n\n";

$cadena = '        abcde.fgh                      ';
echo '=' . ltrim($cadena).'=';
echo "\n";
echo '=' . rtrim($cadena).'=';
echo "\n";
echo '=' . trim($cadena).'=';
echo "\n";

$cadena = '::::::::::abcde.fgh:::::::;;;;:::::::::::';
echo '=' . trim($cadena, ':').'=';
echo "\n";
echo '=' . trim($cadena, ':;').'=';
echo "\n";
$cadena='aaaxxxxbccd';
echo "\n";
echo '=' . trim($cadena, 'a..c').'=';
echo "\n";
echo '=' . trim($cadena, 'a..d').'=';

?>