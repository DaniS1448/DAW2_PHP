<?php
    $miArrayAsociativo = ["user"=>"Dani", "pwd"=> "secreto", "otroArrayDentro" => ["Cosa1", ["claveD" => "Valor real"]]];
    
    print_r($miArrayAsociativo);
    
    //print_r($miArrayAsociativo["otroArrayDentro"]);
    
    echo $miArrayAsociativo["otroArrayDentro"][1]["claveD"];
?>