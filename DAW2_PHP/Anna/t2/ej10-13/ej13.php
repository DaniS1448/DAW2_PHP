<?php include 'utilHTML.php';

//pintarCheckboxes($nombre, $arrayValueLabel)
$nombre="aficiones";
$arrayValueLabel=["A"=>"Acrobatica","B"=>"Boxeo","C"=>"Clasica"];
$seleccionados=["A","C"];
echo pintarCheckboxesSel($nombre, $arrayValueLabel,$seleccionados);
        

?>


