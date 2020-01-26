<?php

$bbdd=[
    "España"=>["Madrid", "Barcelona", "Valencia"],
    "Rumanía"=>["Bucharest","Alexandria"]
];

$esAjax = isset(
    $_SERVER['HTTP_X_REQUESTED_WITH'])?
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' :
    false;
    if ($esAjax) {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        
        if ($nombre != null) {
            $respuesta="";
            $respuesta.=strtoupper($nombre)."&";
            
            if (isset($bbdd[$nombre])) {
                
                foreach ($bbdd[$nombre] as $ciudad){
                    $respuesta.=$ciudad;
                    
                    if(next($bbdd[$nombre])){$respuesta.="-";}
                }
                
            }
            
            echo $respuesta;
        }

    }
    else {
        echo "SOLO EJECUCIONES AJAX";
    }
    
    ?>