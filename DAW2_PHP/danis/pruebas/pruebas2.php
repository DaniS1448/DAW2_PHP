<?php
$empleados = [
    "1" => [
        "nombre" => "Daniel",
        "apellido" => "Stuparu",
        "idDpt" => "1"
    ],
    "2" => [
        "nombre" => "Manu",
        "apellido" => "Almajanu",
        "idDpt" => "2"
    ]
];
$departamentos = [
    "1" => [
        "nombre" => "ventas",
        "descripcion" => "Departamento para las ventas"
    ],
    "2" => [
        "nombre" => "compras",
        "descripcion" => "Aprovisionado de los productos"
    ]
];

// Gets a list of all the 2nd-level keys in the array
function getL2Keys($array)
{
    $result = array();
    foreach($array as $sub) {
        $result = array_merge($result, $sub);
    }
    return array_keys($result);
}

//echo getL2Keys($empleados);

foreach($empleados as $array){
    foreach($array as $key=>$value){
        echo $key."\n";
    }
}

?>