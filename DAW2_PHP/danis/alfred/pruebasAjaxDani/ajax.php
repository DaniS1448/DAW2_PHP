<?php

$bbdd=[
    "es"=>[
        "poblacion"=>"30M",
        "ciudades"=>["Madrid", "Barcelona", "Valencia"]
    ],
    "ro"=>[
        "poblacion"=>"30M",
        "ciudades"=>["Bucharest","Alexandria"]
    ]    
];

$esAjax = isset(
    $_SERVER['HTTP_X_REQUESTED_WITH'])?
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' :
    false;
    if ($esAjax) {
        $nombrePais = isset($_POST['nombrePais'])?$_POST['nombrePais']:null;
        
        if ($nombrePais != null) {
            
            if (isset($bbdd[$nombrePais])) {
                echo json_encode($bbdd[$nombrePais]);
            } else {
                echo "$nombrePais no está en la BBDD";
            }
      
        }

    }
    else {
        echo "SOLO EJECUCIONES AJAX";
    }
    
    ?>
