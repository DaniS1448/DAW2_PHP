<?php

    $array = [
        'nombre'=>['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'],
        'romano'=>['i', 'ii', 'iii', 'iv', 'v', 'vi', 'vii', 'vii', 'ix']
    ];
    
  /*   do {
        $miN=0;
        echo "N:";
        fscanf(STDIN, "%s\n", $miN);
    }
    while ($miN > 0 && $miN < 11);
    
    $miFormato=0;
    echo "Formato:";
    fscanf(STDIN, "%s\n", $miFormato);
    
    for ($i = 0; $i < $miN; $i++) {
        echo ($array[$miFormato][$i]), ', ';
    } */
    
    echo sizeof($array);
    echo "\n";
    //echo array_keys($array);
    echo 'res inarray nombre: ',in_array('uno', $array['nombre']);
    echo "\n";
   

?>