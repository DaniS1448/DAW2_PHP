<?php include 'utilHTML.php';

//pintarCheckboxes($nombre, $arrayValueLabel)
$nombre="aficiones";
$arrayValueLabel=["Acrobatica","Boxeo","Clasica"];
$seleccionados=["Boxeo","Acrobatica"];
echo pintarSelect($nombre, $arrayValueLabel,$seleccionados);
//print_r($arrayValueLabel);

?>


