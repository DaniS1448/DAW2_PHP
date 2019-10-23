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

//$php_array = ['k1' => ['v11', 'v12'], 'k2' => ['v21', 'v22']];
//$js_array = {'k1' : new Array('v11', 'v12'), 'k2' : new Array ('v21', 'v22')};

function phpArrayToJS($php_array, $jsArrayName) {
    
    $js_array="var $jsArrayName={";
    foreach ($php_array as $k => $v){
        $js_array.="'$k': new Array('";
        $js_array.= implode("', '", $v);
        $js_array.="'), ";
    }
    $js_array = substr($js_array, 0, -2);
    $js_array.="};";
    
    return $js_array;
}

    echo "<pre>";
    echo phpArrayToJS($BDetiquetas, 'miNuevoArray');
    echo "</pre>";

?>