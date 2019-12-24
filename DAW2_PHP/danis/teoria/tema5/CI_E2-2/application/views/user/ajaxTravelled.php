<?php

$esAjax = isset(
    $_SERVER['HTTP_X_REQUESTED_WITH']) ?
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' :
    false;
    if ($esAjax) {
        $idUser = isset($_POST['idUser'])?$_POST['idUser']:null;
        
        if ($idUser != null) {
            $resultadoCities='';
            $resultadoCitiesTravelled='';
            
            foreach ($cities as $city) {   
                
                $resultadoCities .= $city->id;
                if (next($cities)==true) $resultadoCities .= "-";
                
            }
            
            foreach ($users as $user) {  
                if ($user->id == $idUser) {
                    $listaDeTravelled = $user->aggr ('ownTravelledList', 'city');
                    foreach ($listaDeTravelled as $cadaCityTravelled){
                        $resultadoCitiesTravelled .= $cadaCityTravelled->id;
                        if (next($listaDeTravelled)==true) $resultadoCitiesTravelled .= "-";
                    }
                }
            }
            
            echo $resultadoCities . '&' . $resultadoCitiesTravelled;
        }
    }
    else {
        echo "SOLO EJECUCIONES AJAX";
    }
    
    ?>