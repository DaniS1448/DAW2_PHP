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

function phpArrayToJSmejorado($php_array, $jsArrayName) {
    
    //var miArray = {'clave1' : {0:'valor11',1:'valor12'}, 'clave2' : {0:'valor21',1:'valor22'} };
    //$miArray = ['clave1' => [0=>'valor11',1=>'valor12'], 'clave2' => [0=>'valor21',1=>'valor22'] ];
    $php_array=str_replace('[','{',$php_array);
    $php_array=str_replace(':', '=>', $php_array);
    
    $js_array="var $jsArrayName={";
    
    return $js_array;
}

function convert_multi_array($array) {
    $out = implode("&",array_map(function($a) {return implode("~",$a);},$array));
    return $out;
}

//     echo "<pre>";
//     echo phpArrayToJS($BDetiquetas, 'miNuevoArray');
//     echo "</pre>";

// echo convert_multi_array($BDetiquetas);

// print_r($BDetiquetas);

// echo json_encode($BDetiquetas);

// echo serialize($BDetiquetas);


$test = array(1=>'this',10=>'that','a key'=>'the other', 'we dont need no stinkin key');

// encoding
$a = json_encode($test);

echo $a;
//{"1":"this","10":"that","a key":"the other","11":"we dont need no stinkin key"}
// assigns key 11 to the array

// now decoding
$b = json_decode( $a, true);
echo "<pre>";
print_r($b);
echo "</pre>";

print_r($b);

var_dump($b);

echo "<h1>NUEVAS PRUEBAS</h1>";

$test2 = array(1=>'this',10=>'that','a key'=>array(1=>'this',10=>'that'), 'we dont need no stinkin key');

// encoding
$a2 = json_encode($test2);

echo $a2."<br>";

echo "<pre>";
print_r($BDetiquetas);
echo "</pre>";

$a3 = json_encode($BDetiquetas);
echo $a3;
?>