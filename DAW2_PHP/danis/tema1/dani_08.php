<?php

$miDia=0;
$miMes=0;
$miAnio=0;
echo "Día:";
fscanf(STDIN, "%s\n", $miDia);
echo "Mes:";
fscanf(STDIN, "%s\n", $miMes);
echo "Año:";
fscanf(STDIN, "%s\n", $miAnio);


$hoy = time();
$fecha = mktime(0, 0, 0, $miMes, $miDia, $miAnio );

/* $diferencia = $hoy - $fecha;
echo "Hoy es: ".$hoy."\n";
echo "Fecha es: ".$fecha."\n";
echo "Diferencia es: ".$diferencia."\n"; */

$difAnio = date("Y", $hoy) - date("Y", $fecha);
$difMes = date("m", $hoy) - date("m", $fecha);
$difDia = date("d", $hoy) - date("d", $fecha);
$difHora = date("H", $hoy) - date("H", $fecha);
$difMinuo = date("i", $hoy) - date("i", $fecha);
$difSegundo = date("s", $hoy) - date("s", $fecha);

echo "Han transcurrido ", $difAnio, " años, ", $difMes, " meses, ", $difDia, " días, ", $difHora," horas, ", $difMinuo, " minutos, y ", $difSegundo," segundos desde la fecha indicada";


?>