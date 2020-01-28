<?php

$aficiones=[
    "escalar","correr","bailar","cantar", "dormir"
];

$persona=[
    "123456"=>[
        
        "nombre"=>"angela",
        "apellido"=>"egido",
        "aficiones"=>["escalar","correr"]
        
    ],
    "123457"=>[
        "nombre"=>"dani",
        "apellido"=>"stuparu",
        "aficiones"=>["bailar","cantar"]
    ]    
];

$esAjax = isset(
    $_SERVER['HTTP_X_REQUESTED_WITH'])?
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' :
    false;
    if ($esAjax) {
        $dni = isset($_POST['dni'])?$_POST['dni']:null;
        
        if ($dni != null) {
            
            if (isset($persona[$dni])) {
                
                $arrayParaPasar["name"]=$persona[$dni]["nombre"];
                $arrayParaPasar["firstname"]=$persona[$dni]["apellido"];
                $arrayParaPasar["aficiones"]=$persona[$dni]["aficiones"];
                //$arrayParaPasar["todasAficiones"]=$aficiones;
                
              
                echo json_encode($arrayParaPasar);
            } else {
                $arrayParaPasar["name"]="";
                $arrayParaPasar["firstname"]="";
                $arrayParaPasar["aficiones"]=[];
                echo json_encode($arrayParaPasar);
            }
      
        }

    }
    else {
        echo "SOLO EJECUCIONES AJAX";
    }
    
    ?>

