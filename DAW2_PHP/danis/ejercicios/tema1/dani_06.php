<?php

$nombre="";
$nombres = [];
$arrayEdad =[];
$edad=0;
while ($nombre != "fin") {
    echo "Nombre? ";
    fscanf(STDIN, "%sfin", $nombre);
    if ($nombre != "fin"){
        echo "Edad de $nombre? ";
        fscanf(STDIN, "%d0", $edad);
        $nombres[]= $nombre;
        $arrayEdad[$nombre]=$edad;
    }
    
}

for ($i = 0; $i < sizeof($nombres); $i++) {
    echo $nombres[$i] . "(" . $arrayEdad[$nombres[$i]] . "), ";
}

?>