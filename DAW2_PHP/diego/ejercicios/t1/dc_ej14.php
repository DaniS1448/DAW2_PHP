<?php 
// Crear un programa, que mediante un menú,
// implemente un CRUD para todos los objetos descritos.
// El Caso de Uso (R) que tenga dos facetas: “mostrar todos los objetos”
// y “Recuperar un objeto por Id.”. En el caso de “mostrar todos los empleados”,
// que en lugar del idDpt, se muestre el nombre del departamento.

// $array = [" armario " => [ "cajon1" => "objeto", "cajon2" => "objeto"]];

$arrayEmpleados= ["1" => ["nombre" => "Diego", "apellido" => "Cepeda", "idDpto" => "1"]];
$arrayDepartamentos = ["1" => ["nombre" => "Ventas", "descripcion" => "Departamento para las ventas"]];


/////////FUNCIONES

function menu () {

$menu = <<<MENU

   === CRUD empleado: ===           === CRUD departamento: ===
    1. Crear empleado               6. Crear departamento
    2. Mostrar todos los empleados  7. Mostrar departamentos
    3. Mostrar empleado por idEmp   8. Actualizar departamento
    4. Actualizar empleado          9. Eliminar departamento
    5. Eliminar empleado            0. Salir del menu

MENU;
do {
$menuBoolean=true;
echo $menu;
fscanf(STDIN, "%d\n", $opcion);
    
    switch ($opcion) {
    
        case 1: insertarEmpleado(); break;
        case 2: verEmpleados($arrayEmpleados); break;
        case 3: echo "Mostrar empleado por idEmp"; break;
        case 4: echo "Actualizar empleado"; break;
        case 5: echo "Eliminar empleado "; break;
        case 6: echo "Crear departamento"; break;
        case 7: echo "Mostrar departamentos"; break;
        case 8: echo "Actualizar departamento"; break;
        case 9: echo "Eliminar departamento"; break;

        
        case 0: 
            $menuBoolean=false; 
            echo "Ha salido del menú";
            break;
        default: echo "Seleccione una opción correcta:\n"; break;
   
    }
} while ($menuBoolean==true);

}

function insertarEmpleado(){
    echo "- INSERTAR EMPLEADO -\n";
    $arrayTmp=[];
    echo "ID empleado: ";
    fscanf(STDIN,"%s\n",$idEmpleado);
    echo "Nombre empleado: ";
    fscanf(STDIN,"%s\n",$nombreEmpleado);
    echo "Apellido empleado: ";
    fscanf(STDIN,"%s\n",$apellidoEmpleado);
    echo "Id departamento: ";
    fscanf(STDIN,"%s\n",$idDepartamento);
    
    $arrayTmp[$idEmpleado]["nombre"]=$nombreEmpleado;
    $arrayTmp[$idEmpleado]["apellido"]=$apellidoEmpleado;
    $arrayTmp[$idEmpleado]["idDpto"]=$idDepartamento;
    
    return $arrayTmp;
    
}

function verEmpleados($empleados){
    echo " =================================== \n";
    echo "1.Ver todos los empleados\n";
    echo "2.Ver empleado por id\n";
    echo "0.VOLVER";
    $opcion=0;
    fscanf(STDIN,"%d\n",$opcion);
    switch($opcion){
        case 1:
            // print_r ($arrayEmpleados);
            echo " =================================== \n";
            foreach ($empleados as $idEmpleado => $empleado){  // SI NO SE PONE ' => $xxxxx ' SALTA ERROR
                echo "Id empleado: ".$idEmpleado.PHP_EOL;
                echo "Nombre: ".$empleados[$idEmpleado]["nombre"].PHP_EOL;
                echo "Apellido: ".$empleados[$idEmpleado]["apellido"].PHP_EOL;
                echo "Id departamento: ".$empleados[$idEmpleado]["idDpto"].PHP_EOL;
                echo " =================================== \n";
            }
            break;
        case 2:
            echo "Dime la id del empleado:\n";
            $idEmpleado="";
            fscanf(STDIN,"%s\n",$idEmpleado);
            if ( in_array($idEmpleado,array_keys($empleados))){
                //var_export($arrayEmpleados[$idEmpleado]);
                echo "Nombre: ".$empleados[$idEmpleado]["nombre"].PHP_EOL;
                echo "Apellido: ".$empleados[$idEmpleado]["apellido"].PHP_EOL;
                echo "Id departamento: ".$empleados[$idEmpleado]["idDpto"].PHP_EOL;
            } else {
                echo "No hay ningun empleado con ese id\n";
            }
            break;
        case 0:
            echo "Volviendo al menu principal...\n";
            echo "==================================\n";
            break;
        default:
            echo "Opcion incorrecta\n";
            echo "==================================\n";
            break;
    }
} 

/////////// EJECUCION DE PROGRAMA

menu();


?>