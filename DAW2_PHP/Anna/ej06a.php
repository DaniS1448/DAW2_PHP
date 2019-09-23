<?php
/* Pedir por teclado nombres de personas y sus edades, hasta que se introduzca el nombre “fin”.
 * Mostrar a continuación el nombre de cada persona introducida y su edad (entre paréntesis).
 * NOTA: Utilizar arrays asociativos. ¿Qué ocurre si dos personas se llaman igual?
 * ¿Cómo podríamos ver la información anterior ordenada por nombre? ¿Y por edad descendente?
 Ejemplo:
 Nombre? Ana
 Edad de Ana? 18
 Nombre? Pepe
 Edad de Pepe? 15
 Nombre? Rosa
 Edad de Rosa? 18
 Nombre? Juan
 Edad de Juan? 17
 Nombre? fin
 Ana(18), Pepe(15), Rosa(18), Juan(17), */
/* echo "Introduce nombre: ";
 fscanf(STDIN, "%s\n",$nombre);
 echo "Introduce edad: ";
 fscanf(STDIN, "%d\n",$edad); */

$datos=[];

echo "Introduce nombre: ";
fscanf(STDIN, "%s\n",$nombre);

echo "Introduce edad: ";
fscanf(STDIN, "%d\n",$edad);

$datos[0]=$nombre."($edad)";
$i=1;
while($nombre!="fin"){
    
    echo "Introduce nombre: ";
    fscanf(STDIN, "%s\n",$nombre);
    
    if($nombre=="fin"){
        
    }
    else {echo "Introduce edad: ";
    fscanf(STDIN, "%d\n",$edad);
    $datos[$i]=$nombre."($edad)";}
    
    $i++;
}

$sizeA=sizeof($datos);
//echo $datos[1];
for($n=0;$n<=($sizeA-1);$n++) {
    echo $datos[$n];
}

?>