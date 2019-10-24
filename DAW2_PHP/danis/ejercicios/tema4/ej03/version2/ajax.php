<?php
$BDetiquetas = [
    "es" => [
        "Palabra",
        "Traducción",
        "Enviar"
    ],
    "gb" => [
        "Word",
        "Translation",
        "Send"
    ],
    "fr" => [
        "Mot",
        "Traduction",
        "Envoyer"
    ]
];

$esAjax = isset(
    $_SERVER['HTTP_X_REQUESTED_WITH']) ?
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' :
    false;
    if ($esAjax) {
        $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
        
        if ($pais != null) {
            
            echo implode('|', $BDetiquetas[$pais]);
            
        }
    }
    else {
        echo "SOLO EJECUCIONES AJAX";
    }

?>