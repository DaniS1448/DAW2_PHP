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
        "nombre" => "Ventas",
        "descripcion" => "Departamento para las ventas"
    ],
    "2" => [
        "nombre" => "Compras",
        "descripcion" => "Aprovisionado de los productos"
    ]
];

do{
    $op = mostrarMenu();
    switch ($op) {
        case "1": $empleados+=menu1CrearEmpleado(sizeof($empleados)); break;
        case "2": menu2mostrarEmpleados($empleados, $departamentos); break;
        case "3": menu3mostrarEmpleadoPorId($empleados, $departamentos); break;
        case "4": $empleados=menu4actualizarEmpleado($empleados); break;
        case "5": $empleados=menu5eliminarEmpleado($empleados); break;
        default: echo "Opción no válida\n"; break;
    }
}while ($op != "10");


function listarEmpleados($empleados){
    foreach ($empleados as $empleado => $idEmp) {
        echo $empleado.": ".$idEmp["nombre"]."\t";
    }
    echo PHP_EOL;
}

function menu1CrearEmpleado($id){
    $id++;
    $arraytmp=[];
    echo "Introduzca nombre empleado\n";
    $arraytmp[$id]["nombre"]=readline();
    echo "Introduzca apellido empleado\n";
    $arraytmp[$id]["apellido"]=readline();
    echo "Introduzca idDpt empleado\n";
    $arraytmp[$id]["idDpt"]=readline();
    
    echo "Empleado creado correctamente\n\n";
    return $arraytmp;
}

function menu2mostrarEmpleados($empleados, $departamentos){
    
    foreach ($empleados as $empleado => $idEmp) {
        echo "===== EMPLEADO ".$empleado." =====\n";
        echo "Nombre: ".$idEmp["nombre"].PHP_EOL;
        echo "Apellido: ".$idEmp["apellido"].PHP_EOL;
        //echo "Departamento: ".$idEmp["idDpt"].PHP_EOL;
        if (array_key_exists($idEmp["idDpt"], $departamentos)) {
            echo "Departamento: ".$departamentos[$idEmp["idDpt"]]["nombre"].PHP_EOL;
        } else {
            echo "Departamento: ".$idEmp["idDpt"]." no existe".PHP_EOL;
        }
        echo PHP_EOL;
    }
}

function menu3mostrarEmpleadoPorId($empleados, $departamentos){
    listarEmpleados($empleados);
    echo "Introduzca id empleado\n";
    $idEmp = readline();
    if (array_key_exists($idEmp, $empleados)) {
        echo "===== EMPLEADO ".$idEmp." =====\n";
        echo "Nombre: ".$empleados[$idEmp]["nombre"].PHP_EOL;
        echo "Apellido: ".$empleados[$idEmp]["apellido"].PHP_EOL;
        echo "ID Departamento: ".$empleados[$idEmp]["idDpt"].PHP_EOL;
        echo "Nombre Departamento: ".$departamentos[$empleados[$idEmp]["idDpt"]]["nombre"].PHP_EOL;
        echo PHP_EOL;
    } else {
        echo "No existe ningún empleado con el id ".$idEmp.PHP_EOL;
    }       
}

function menu4actualizarEmpleado ($empleados){
    listarEmpleados($empleados);
    echo "Introduzca ID Empleado para modificar\n";
    $idEmp = readline();
    $newEmpleados=$empleados;
    if (array_key_exists($idEmp, $empleados)) {
        echo "Introduzca nombre empleado[".$newEmpleados[$idEmp]["nombre"]."]\n";
        $newEmpleados[$idEmp]["nombre"]=readline();
        echo "Introduzca apellido empleado[".$newEmpleados[$idEmp]["apellido"]."]\n";
        $newEmpleados[$idEmp]["apellido"]=readline();
        echo "Introduzca idDpt empleado[".$newEmpleados[$idEmp]["idDpt"]."]\n";
        $newEmpleados[$idEmp]["idDpt"]=readline();
        echo "Empleado modificado correctamente\n\n";
    } else {
        echo "No existe el id ".$idEmp.PHP_EOL;
    }
    return $newEmpleados;
}

function menu5eliminarEmpleado($empleados){
    listarEmpleados($empleados);
    echo "Introduzca ID Empleado para eliminar\n";
    $idEmp = readline();
    $newEmpleados=$empleados;
    if (array_key_exists($idEmp, $empleados)) {
        unset($newEmpleados[$idEmp]);
    }else{
        echo "No existe el id ".$idEmp.PHP_EOL;
    }
    return $newEmpleados;
}

function mostrarMenu() {
   echo <<<MENU
   === CRUD empleado: ===           === CRUD departamento: ===
    1. Crear empleado               6. Crear departamento
    2. Mostrar todos los empleados  7. Mostrar departamentos
    3. Mostrar empleado por idEmp   8. Actualizar departamento
    4. Actualizar empleado          9. Eliminar departamento
    5. Eliminar empleado            10. Salir del menu
    
MENU;
    return readline();
}

?>