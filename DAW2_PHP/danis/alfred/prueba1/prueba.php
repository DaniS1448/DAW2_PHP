<?php 
    $nombre = "alfred";
    //echo "Hola $nombre";
    
    $miArray=["Alfred", "Juan", "Dani"];
    
    //echo $miArray[2];
    
    for ($i = 0; $i < sizeof($miArray); $i++) {
        echo $miArray[$i];
        echo "\n";
        
        //$miArray[$i] = "UPS";
    }
    
    echo PHP_EOL;
    
    foreach ($miArray as $cadaElemento){
        echo $cadaElemento.PHP_EOL;
        $cadaElemento = "UPS";
    }
    
    print_r($miArray);
?>