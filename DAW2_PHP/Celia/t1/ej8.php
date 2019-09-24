<?php
/* 8. Dado un día, mes y año entre el 1 de enero de 1971 y la actualidad, mostrar el número
de años, meses, días, horas, minutos y segundos transcurridos desde entonces hasta
ahora (no es necesario tener en cuenta años bisiestos, y se pueden considerar todos
    los meses como si tuvieran 30 días)
    Ejemplo:
    Día: 19
    Mes: 8
    Año: 1980
    Han transcurrido 34 años, 1 meses, 16 días, 21 horas, 25 minutos
    y 45 segundos desde la fecha indicada */

echo "Introduce dia (del 1 al 30): ";
fscanf ( STDIN, "%d\n", $miDia );
echo "Introduce mes(del 1 al 12): ";
fscanf ( STDIN, "%d\n", $miMes );
echo "Introduce año (del 1971 hasta 2019): ";
fscanf ( STDIN, "%d\n", $miAnio );

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
