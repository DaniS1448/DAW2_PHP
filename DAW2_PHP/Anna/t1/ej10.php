<?php
/* Preguntar por teclado un número n (del 1 al 10), y a continuación qué formato se requiere,
 *  Si se indica “nombre”, saldrán los nombres de los números del 1..N
 *  (uno, dos, tres, cuatro, …), si se indica “romano”, saldrán los números del 1..N
 *  en formato romano (i, ii, iii, iv, …)
 Diseñar el programa para que sólo tenga un bucle
 (y no tenga sentencias “if” ni “switch”), de manera que se puedan añadir
 nuevos formatos de números en el futuro, sin cambiar casi el código.
 Ejemplo (ejecución 1):
 N: 7
 Formato: romano
 i, ii, iii, iv, v, vi, vii
 
 Ejemplo (ejecución 2):
 N: 5
 Formato: nombre
 uno, dos, tres, cuatro, cinco 
 Mejorar el programa anterior para que cicle alrededor de la introducción del número N, 
 hasta que sea un número entre 1 y 10, y para que cicle en la introducción del formato 
 hasta que sea un formato que el programa conozca (pudiendo estar abierto a la introducción 
 de nuevos formatos, sin necesidad de cambiar el código de comprobación)
*/
$nom=["uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez"];
$rom=["i","ii","iii","iv","v","vi","vii","viii","ix","x"];
$a=["nombre"=>$nom,"romano"=>$rom];
do{
echo "Introduce N: ";
fscanf(STDIN, "%d\n",$n);

echo "Elige formato: ";
fscanf(STDIN, "%s\n",$f);}

while(($n>10||$n<1)||(!array_key_exists($f, $a)));
//---------------------------------------

for($i=0;$i<$n;$i++){
    //echo $a[$f][$i].",";
    echo ($i==$n-1)?$a[$f][$i]:$a[$f][$i].",";
}

?>