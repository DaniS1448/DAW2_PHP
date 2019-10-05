<?php include 'utilHTML.php';

//pintarRadio($nombre, $arrayValueLabel, $seleccionado)
$nombre="aficiones";
$arrayValueLabel=["A"=>"Acrobatica","B"=>"Boxeo","C"=>"Clasica"];
$seleccionado="B";
echo pintarRadio($nombre, $arrayValueLabel, $seleccionado);
        

?>

