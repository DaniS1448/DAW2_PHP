<?php
/* Dado un d�a, mes y a�o entre el 1 de enero de 1971 y la actualidad, 
 * mostrar el n�mero de a�os, meses, d�as, horas, minutos y segundos transcurridos 
 * desde entonces hasta ahora (no es necesario tener en cuenta a�os bisiestos, y se 
 * pueden considerar todos los meses como si tuvieran 30 d�as)
Ejemplo:
D�a: 19
Mes: 8
A�o: 1980
Han transcurrido 34 a�os, 1 meses, 16 d�as, 21 horas, 25 minutos y 45 segundos desde la fecha 
indicada
 */

$min=60;
$hora=60*$min;
$diaCons=24*$hora;
$mesCons=30*$diaCons;
$anioCons=12*$mesCons;
//-----------------------------
echo "Introduce dia: ";
fscanf(STDIN, "%d\n",$dia);
echo "Introduce mes: ";
fscanf(STDIN, "%d\n",$mes);
echo "Introduce anio: ";
fscanf(STDIN, "%d\n",$anio);

$fechaDada = mktime(0, 0, 0, $mes, $dia, $anio);
//echo $fechaDada;
//echo PHP_EOL;
$datosHoy=time();
//echo $datosHoy;
echo PHP_EOL;
//-----------------------------
$secTrans=(int)($datosHoy-$fechaDada);
//echo $secTrans.PHP_EOL;
$aniosTrans=(int)($secTrans/$anioCons);
$resto=$secTrans%$anioCons;
$mesesTrans=(int)($resto/$mesCons);
$resto=$resto%$mesCons;
$diasTrans=(int)($resto/$diaCons);
$resto=$resto%$diaCons;
$horasTrans=(int)($resto/$hora);
$resto=$resto%$hora;
$minTrans=(int)($resto/$min);
$resto=$resto%$min;
$secTrans=(int)($resto);
//-----------------------------
echo "Han transcurrido $aniosTrans a�os, $mesesTrans meses, $diasTrans d�as, $horasTrans horas, $minTrans minutos y $secTrans segundos desde la fecha 
indicada";

?>