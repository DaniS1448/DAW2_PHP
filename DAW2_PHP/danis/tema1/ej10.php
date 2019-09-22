<?php

    $array = [
        'nombre'=>['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez'],
        'romano'=>['i', 'ii', 'iii', 'iv', 'v', 'vi', 'vii', 'vii', 'ix', 'x']
    ];
    
    $miN=0;
    $miFormato=0;
    do {
        echo "N:";
        fscanf(STDIN, "%d\n", $miN);
    }
    while (!($miN > 0 && $miN < 11));
    
    do {
        echo "Formato:";
        fscanf(STDIN, "%s\n", $miFormato);
    }
    while (!array_key_exists($miFormato, $array));
    
    for ($i = 0; $i < $miN; $i++) {
        echo ($array[$miFormato][$i]), ', ';
    }
    
    echo "\n";

    foreach ($array[$miFormato] as $numeros){
        echo $numeros, ', ';
    }

?>