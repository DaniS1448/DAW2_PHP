<?php


$aficiones=['diego'=>['dormir', 'comer', 'cantar'],
            'marta'=>['dormir', 'comer', 'cantar'], 
            'dani'=> ['dormir', 'comer', 'cantar']];




$nombre=$_GET['nombre'];

if($nombre=='di'){
    $aficionesDiego=implode("-", $aficiones['diego']);
    echo $aficionesDiego;
}
else if($nombre=='ma'){
    echo "¿Qué tal Marta?";
}
else if($nombre=='da'){
    echo "¿Qué tal Dani?";
}
?>