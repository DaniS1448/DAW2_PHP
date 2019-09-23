<?php
/*Preguntar por teclado un número n (del 1 al 10), y a continuación qué formato se requiere, Si se indica “nombre”, 
saldrán los nombres de los números del 1..N (uno, dos, tres, cuatro, …), si se indica “romano”, saldrán los números del 1..N 
en formato romano (i, ii, iii, iv, …) Diseñar el programa para que sólo tenga un bucle (y no tenga sentencias “if” ni “switch”), 
de manera que se puedan añadir nuevos formatos de números en el futuro, sin cambiar casi el código.*/

$nombre=["uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez"];
$romano=["I","II","III","IV","V","VI","VII","VIII","IX","X"];

echo "N del 1 al 10: ";
fscanf(STDIN,"%d\n",$n);
/*while ($n<1 || $n>10){
    echo "Introduce un n entre 1 y 10: ";
    fscanf(STDIN,"%d\n",$n);
}*/
echo "Formato: ";
fscanf(STDIN,"%s\n",$formato);


for ($i=0;($i<$n && $n<=10);$i++){
  echo  $formato=="nombre" ? "$nombre[$i], " : "";
  echo  $formato=="romano" ? "$romano[$i], " : "";
}
?>