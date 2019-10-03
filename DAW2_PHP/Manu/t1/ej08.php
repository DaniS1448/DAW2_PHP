<?php
/*Dado un d�a, mes y a�o entre el 1 de enero de 1971 y la actualidad, mostrar el n�mero de a�os,
 *  meses, d�as, horas, minutos y segundos transcurridos desde entonces hasta ahora 
 *  (no es necesario tener en cuenta a�os bisiestos, y se pueden considerar todos los meses 
 *  como si tuvieran 30 d�as)*/

echo "D�a: ";
fscanf(STDIN,"%d\n",$dia);
while ($dia<1 || $dia>30){
    echo "Introduce un dia entre 1 y 30: ";
    fscanf(STDIN,"%d\n",$dia);
}

echo "Mes: ";
fscanf(STDIN,"%d\n",$mes);
while ($mes<1 || $mes>12){
    echo "Introduce un mes entre 1 y 12: ";
    fscanf(STDIN,"%d\n",$mes);
}

echo "A�o: ";
fscanf(STDIN,"%d\n",$ano);
while ($ano<1971 || $ano>date("Y",time())){
    echo "Introduce un a�o entre 1971 y 2019: ";
    fscanf(STDIN,"%d\n",$ano);
}


/////////////////////////////////////////////////
$timestampIndicado=strtotime("$dia-$mes-$ano");   //Pido cuantos segundos han pasado desde la fecha que pedi
$timeActual=time();                               //Consigo los segundos actuales

 //Los resto y que quedan la diferencia de los segundos entre las dos fechas
$diferenciaSegundos=$timeActual-$timestampIndicado;
//Voy dividiendo los segundos usando fmod para quedarme con los segundos restantes y el resto lo paso a minutos y asi hasta que tengo las horas
$segundos=fmod($diferenciaSegundos,60);

$diferenciaMinutos=intdiv($diferenciaSegundos,60);
$minutos=fmod($diferenciaMinutos,60);

$diferenciaHoras=intdiv($diferenciaMinutos,60);
$horas=fmod($diferenciaHoras,60);

if(date("d")>$dia){
    $difDias=date("d")-$dia;
}else{
    $difDias=$dia-date("d");
}
if(date("m")>$mes){
    $difMeses=date("m")-$mes;
}else{
    $difMeses=$mes-date("m");
}

$difAnos=date("Y")-$ano;

echo "Han transcurrido $difAnos a�os, $difMeses meses, $difDias d�as, $horas horas, $minutos minutos y $segundos segundos desde la fecha indicada";
?>
