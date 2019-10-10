<?php
// Crear un programa, que mediante un menú,
// implemente un CRUD para todos los objetos descritos.
// El Caso de Uso (R) que tenga dos facetas: “mostrar todos los objetos”
// y “Recuperar un objeto por Id.”. En el caso de “mostrar todos los empleados”,
// que en lugar del idDpt, se muestre el nombre del departamento.

// $array = [" armario " => [ "cajon1" => "objeto", "cajon2" => "objeto"]];
$arrayEmpleados = [
    "1" => [
        "nombre" => "Diego",
        "apellido" => "Cepeda",
        "idDpto" => "1"
    ]
];
$arrayDepartamentos = [
    "1" => [
        "nombre" => "Ventas",
        "descripcion" => "Departamento para las ventas"
    ]
];

// ///////FUNCIONES
function menu()
{
    $menu = <<<MENU
     === Empleado: ===               === Departamento: ===
     
    1. Crear empleado               5. Crear departamento
    2. Mostrar empleados            6. Mostrar departamentos
    3. Actualizar empleado          7. Actualizar departamento
    4. Eliminar empleado            8. Eliminar departamento
    
                          0. SALIR

MENU;
    do {
        $menuBoolean = true;
        echo $menu;
        fscanf(STDIN, "%d\n", $opcion);

        switch ($opcion) {

            case 1:
                crearEmpleado() . PHP_EOL;
                break;
            case 2:
                mostrarEmpleados() . PHP_EOL;
                ;
                break;
            case 3:
                actualizarEmpleado() . PHP_EOL;
                ;
                break;
            case 4:
                eliminarEmpleado() . PHP_EOL;
                ;
                break;
            case 5:
                crearDepartamento() . PHP_EOL;
                ;
                break;
            case 6:
                mostrarDepartamentos() . PHP_EOL;
                break;
            case 7:
                actualizarDepartamento() . PHP_EOL;
                break;
            case 8:
                eliminarDepartamento() . PHP_EOL;
                break;

            case 0:
                $menuBoolean = false;
                echo "Ha salido del menú";
                break;
            default:
                echo "Seleccione una opción correcta:\n";
                break;
        }
    } while ($menuBoolean == true);
}

// ///////// FUNCIONES DE EMPLEADOS
function crearEmpleado()
{
    global $arrayEmpleados;

    echo "Inserte su idEmpleado: ";
    fscanf(STDIN, "%d\n", $idE);
    echo "Inserte su nombre: ";
    $nombreE=fgets(STDIN);
    //fscanf(STDIN, "%s\n", $nombreE);
    echo "Inserte su apellido: ";
    fscanf(STDIN, "%s\n", $apellidoE);
    echo "Inserte su departamento: ";
    fscanf(STDIN, "%s\n", $departamentoE);

    // $arrayEmpleados= ["1" => ["nombre" => "Diego", "apellido" => "Cepeda", "idDpto" => "1"]];

    $arrayEmpleados[$idE]["nombre"] = $nombreE;
    $arrayEmpleados[$idE]["apellido"] = $apellidoE;
    $arrayEmpleados[$idE]["idDpto"] = $departamentoE;
}

function mostrarEmpleados()
{
    global $arrayEmpleados;

    echo "Como quiere mostrar los empleados.\n";
    echo "1. Empleado individual.\n";
    echo "2. Mostrar todos los empleados de la empresa.\n";
    fscanf(STDIN, "%d\n", $opcionE);

    switch ($opcionE) {
        case 1:
            echo "Dime la id del empleado: ";
            fscanf(STDIN, "%d\n", $idE);
            if (in_array($idE, array_keys($arrayEmpleados))) {
                echo "Nombre: " . $arrayEmpleados[$idE]["nombre"] . PHP_EOL;
                echo "Apellido: " . $arrayEmpleados[$idE]['apellido'] . PHP_EOL;
                echo "idDpto: " . $arrayEmpleados[$idE]["idDpto"] . PHP_EOL;
            } else {
                echo "No hay ningun empleado con ese id\n";
            }
            ;
            break;
        case 2:
            // print_r($arrayEmpleados);
            foreach ($arrayEmpleados as $idE => $empleados) {
                echo "==========================\n";
                echo "id de Empleado: " . $idE . PHP_EOL;
                echo "Nombre: " . $arrayEmpleados[$idE]["nombre"] . PHP_EOL;
                echo "Apellido: " . $arrayEmpleados[$idE]['apellido'] . PHP_EOL;
                echo "idDpto: " . $arrayEmpleados[$idE]["idDpto"] . PHP_EOL;
            }
            break;

        default:
            "Algo ha ido mal" . PHP_EOL;
            break;
    }
}

function actualizarEmpleado()
{
    global $arrayEmpleados;

    echo "¿Qué empleado quieres actualizar";
    fscanf(STDIN, "%d\n", $idE);

    if (in_array($idE, array_keys($arrayEmpleados))) {

        echo "Inserte su nombre: ";
        fscanf(STDIN, "%s\n", $nombreE);
        echo "Inserte su apellido: ";
        fscanf(STDIN, "%s\n", $apellidoE);
        echo "Inserte su departamento: ";
        fscanf(STDIN, "%s\n", $departamentoE);

        $arrayEmpleados[$idE]["nombre"] = $nombreE;
        $arrayEmpleados[$idE]["apellido"] = $apellidoE;
        $arrayEmpleados[$idE]["idDpto"] = $departamentoE . PHP_EOL;
    } else {
        echo "No hay ningun empleado con ese id" . PHP_EOL;
    }
}

function eliminarEmpleado()
{
    global $arrayEmpleados;

    echo "Indique la id del empleado a eliminar: ";
    fscanf(STDIN, "%d\n", $idE);

    echo $arrayEmpleados[$idE]["nombre"] . " " . $arrayEmpleados[$idE]['apellido'];

    unset($arrayEmpleados[$idE]);

    echo " se ha eliminado." . PHP_EOL;
}

// ///////// FUNCIONES DE DEPARTAMENTOS
function crearDepartamento()
{
    global $arrayDepartamentos;

    echo "Inserte el id del departamento: ";
    fscanf(STDIN, "%d\n", $idD);
    echo "Inserte el nombre: ";
    fscanf(STDIN, "%s\n", $nombreD);
    echo "Inserte la descripción: ";
    fscanf(STDIN, "%s\n", $descripcionD);

    // $arrayEmpleados= ["1" => ["nombre" => "Diego", "apellido" => "Cepeda", "idDpto" => "1"]];

    $arrayDepartamentos[$idD]["nombre"] = $nombreD;
    $arrayDepartamentos[$idD]["descripcion"] = $descripcionD;
}

function mostrarDepartamentos()
{
    global $arrayDepartamentos;

    echo "¿Cómo quiere mostrar los departamentos?.\n";
    echo "1. Departamento individual.\n";
    echo "2. Mostrar todos los departamentos de la empresa.\n";
    fscanf(STDIN, "%d\n", $opcionD);

    switch ($opcionD) {
        case 1:
            echo "Dime la id del departamento: ";
            fscanf(STDIN, "%d\n", $idD);
            if (in_array($idD, array_keys($arrayDepartamentos))) {
                echo "Departamento: " . $arrayDepartamentos[$idD]["nombre"] . PHP_EOL;
                echo "Descripción: " . $arrayDepartamentos[$idD]['descripcion'] . PHP_EOL;
            } else {
                echo "No hay ningun departamento con ese id\n";
            }
            ;
            break;
        case 2:
            // print_r($arrayDepartamentos);
            foreach ($arrayDepartamentos as $idD => $departamentos) {
                echo "==========================\n";
                echo "id de Departamento: " . $idD . PHP_EOL;
                echo "Nombre: " . $arrayDepartamentos[$idD]["nombre"] . PHP_EOL;
                echo "Descripción: " . $arrayDepartamentos[$idD]['descripcion'] . PHP_EOL;
            }
            break;

        default:
            "Algo ha ido mal" . PHP_EOL;
            break;
    }
}

function actualizarDepartamento()
{
    global $arrayDepartamentos;

    echo "¿Qué departamento quieres actualizar";
    fscanf(STDIN, "%d\n", $idD);

    if (in_array($idD, array_keys($arrayDepartamentos))) {

        echo "Inserte el nuevo nombre de departamento: ";
        fscanf(STDIN, "%s\n", $nombreD);
        echo "Inserte la descripción: ";
        fscanf(STDIN, "%s\n", $descripcionD);

        $arrayDepartamentos[$idD]["nombre"] = $nombreD;
        $arrayDepartamentos[$idD]["descripcion"] = $descripcionD;
    } else {
        echo "No hay ningun departamento con ese id" . PHP_EOL;
    }
}

function eliminarDepartamento()
{
    global $arrayDepartamentos;

    echo "Indique la id del departamento a eliminar: ";
    fscanf(STDIN, "%d\n", $idD);

    echo $arrayDepartamentos[$idD]["nombre"];

    unset($arrayDepartamentos[$idD]);

    echo " se ha eliminado." . PHP_EOL;
}

// ///////// EJECUCION DE PROGRAMA

menu();

?>