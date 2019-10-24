<?php
$arrayPelis=["Titanic","Crepúsculo","Los juegos del hambre"]; //Creamos un array con las peliculas
$n=rand(0,2);   //Conseguimos un numero rando del 0 al 2 , porque el array empieza en la posicion 0

echo $arrayPelis[$n];  //Lo que devolvemos es el valor que tenga el array en la posicion $n 
?>