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
/* $arraytmp=[
    "3" => [
        "nombre" => "Diego",
        "apellido" => "Cepeda",
        "idDpt" => "1"
    ]
]; */
/* $arraytmp[3]= [
    "nombre" => "Diego",
    "apellido" => "Cepeda",
    "idDpt" => "1"
]; */

$arraytmp[3]["nombre"]="Diego";
$arraytmp[3]["apellido"]="Cepeda";
$arraytmp[3]["idDpt"]="1";

$empleados+=$arraytmp;
/* $empleados+=[
    "3" => [
        "nombre" => "Diego",
        "apellido" => "Cepeda",
        "idDpt" => "1"
    ]
]; */

print_r($empleados);

echo sizeof($empleados)

?>