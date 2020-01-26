<?php
//     $miArrayAsociativo = ["user"=>"Dani", "pwd"=> "secreto"];
    
//     echo $miArrayAsociativo["user"];
    
//     print_r($miArrayAsociativo);
    
//     $miArrayAsociativo["lastCon"] = "HOY MISMO";
    
//     print_r($miArrayAsociativo);
    
    $miArray=["Alfred", "Juan", "Dani"];
    
    print_r($miArray);
    
    $miArray[3] = "Pepe";
    
    print_r($miArray);
    
    echo "TAM ARRAY: ".sizeof($miArray) . PHP_EOL;
    $miArray[sizeof($miArray)] = "KTA";
    
    print_r($miArray);
    
    $miArray[] = "FREDDIE";
    
    print_r($miArray);
?>