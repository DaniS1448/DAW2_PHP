<?php
/* Dado un día, mes y año entre el 1 de enero de 1971 y la actualidad, 
 * mostrar el número de años, meses, días, horas, minutos y segundos transcurridos 
 * desde entonces hasta ahora (no es necesario tener en cuenta años bisiestos, y se 
 * pueden considerar todos los meses como si tuvieran 30 días)
Ejemplo:
Día: 19
Mes: 8
Año: 1980
Han transcurrido 34 años, 1 meses, 16 días, 21 horas, 25 minutos y 45 segundos desde la fecha 
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
echo "Han transcurrido $aniosTrans años, $mesesTrans meses, $diasTrans días, $horasTrans horas, $minTrans minutos y $secTrans segundos desde la fecha 
indicada";

?>