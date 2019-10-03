<?php
/*Utilizar un array asociativo para emular un sistema gestor de base de datos relacional, en el que poder crear una estructura
 *como la que propone el siguiente esquema:	
Crear un programa, que mediante un menú, implemente un CRUD para todos los objetos descritos. El Caso de Uso (R) que tenga 
dos facetas: “mostrar todos los objetos” y “Recuperar un objeto por Id.”. En el caso de “mostrar todos los empleados”, que 
en lugar del idDpt, se muestre el nombre del departamento.*/

$arrayEmpleados= [
    "1" => [ 
        "nombre" => "Manu",
        "apellido" => "Almajanu",
        "idDpto" => "1"
    ],
    "2" => [
        "nombre" => "Diego",
        "apellido" => "Cepeda",
        "idDpto" => "2"
    ],
    "3" => [
        "nombre" => "Dani",
        "apellido" => "Stuparu",
        "idDpto" => "2"
    ]
];

$arrayDepartamentos= [
    "1" => [
        "nombre" => "Ventas",
        "desc" => "Venden cosas"
    ],
    "2" => [
        "nombre" => "Direccion",
        "desc" => "Papeleo"
    ]
];


function insertarEmpleado(){
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

function verEmpleados($arrayEmpleados){
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
           foreach ($arrayEmpleados as $idEmpleado => $empleado){  // SI NO SE PONE ' => $xxxxx ' SALTA ERROR
               echo "Id empleado: ".$idEmpleado.PHP_EOL;
               echo "Nombre: ".$arrayEmpleados[$idEmpleado]["nombre"].PHP_EOL;
               echo "Apellido: ".$arrayEmpleados[$idEmpleado]["apellido"].PHP_EOL;
               echo "Id departamento: ".$arrayEmpleados[$idEmpleado]["idDpto"].PHP_EOL;
               echo " =================================== \n";
           }
           break;
       case 2: 
           echo "Dime la id del empleado:\n";
           $idEmpleado="";
           fscanf(STDIN,"%s\n",$idEmpleado);
           if ( in_array($idEmpleado,array_keys($arrayEmpleados))){
               //var_export($arrayEmpleados[$idEmpleado]);
               echo "Nombre: ".$arrayEmpleados[$idEmpleado]["nombre"].PHP_EOL;
               echo "Apellido: ".$arrayEmpleados[$idEmpleado]["apellido"].PHP_EOL;
               echo "Id departamento: ".$arrayEmpleados[$idEmpleado]["idDpto"].PHP_EOL;
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

function modificarEmpleado($arrayEmpleados){
    echo "==================================\n";
    echo "Dime la id del empleado:\n";
    $idEmpleado="";
    fscanf(STDIN,"%s\n",$idEmpleado);
    $newArray=$arrayEmpleados;
    if ( in_array($idEmpleado,array_keys($arrayEmpleados))){
        
        echo "NUEVO Nombre empleado: ";
        fscanf(STDIN,"%s\n",$nombreEmpleado);
        echo "NUEVO Apellido empleado: ";
        fscanf(STDIN,"%s\n",$apellidoEmpleado);
        echo "NUEVO Id departamento: ";
        fscanf(STDIN,"%s\n",$idDepartamento);
        
        $newArray[$idEmpleado]["nombre"]=$nombreEmpleado;
        $newArray[$idEmpleado]["apellido"]=$apellidoEmpleado;
        $newArray[$idEmpleado]["idDpto"]=$idDepartamento;        
        
    } else {
        echo "No hay ningun empleado con ese id\n";
        echo "==================================\n";
    }
    return $newArray;
}

function borrarEmpleado($arrayEmpleados){
    echo "==================================\n";
    echo "Dime la id del empleado:\n";
    $idEmpleado="";
    fscanf(STDIN,"%s\n",$idEmpleado);
    if ( in_array($idEmpleado,array_keys($arrayEmpleados))){
        
       unset($arrayEmpleados[$idEmpleado]);
       echo "Empleado eliminado\n";
       echo "==================================\n";
              
    } else {
        echo "No hay ningun empleado con ese id\n";
        echo "==================================\n";
    }
    return $arrayEmpleados;
}

function insertarDepartamento(){
   
    echo "ID departamento: ";
    fscanf(STDIN,"%s\n",$idDepartamento);
    echo "Nombre departamento: ";
    fscanf(STDIN,"%s\n",$nombreDepartamento);
    echo "Descripcion departamento: ";
    $descDepartamento=readLine();
    
    global $arrayDepartamentos;
    $arrayDepartamentos[$idDepartamento]["nombre"]=$nombreDepartamento;
    $arrayDepartamentos[$idDepartamento]["desc"]=$descDepartamento;
}

function verDepartamentos(){
    echo " =================================== \n";
    echo "1.Ver todos los departamentos\n";
    echo "2.Ver departamento por id\n";
    echo "0.VOLVER";
    $opcion=0;
    fscanf(STDIN,"%d\n",$opcion);
    global $arrayDepartamentos;
    switch($opcion){
        case 1:
           // print_r ($arrayDepartamentos);
            echo " =================================== \n";
            foreach ($arrayDepartamentos as $idDepartamento => $departamentos){ // SI NO SE PONE ' => $xxxxx ' SALTA ERROR
                echo "Id departamento: ".$idDepartamento.PHP_EOL;
                echo "Nombre: ".$arrayDepartamentos[$idDepartamento]["nombre"].PHP_EOL;
                echo "Descripcion: ".$arrayDepartamentos[$idDepartamento]["desc"].PHP_EOL;
                echo " =================================== \n";
            }
            break;
        case 2:
            echo "Dime la id del departamento:\n";
            $idDepartamento="";
            fscanf(STDIN,"%s\n",$idDepartamento);
            if ( in_array($idDepartamento,array_keys($arrayDepartamentos))){
                //var_export($arrayDepartamentos[$idDepartamento]);
                echo "Nombre: ".$arrayDepartamentos[$idDepartamento]["nombre"].PHP_EOL;
                echo "Descripcion: ".$arrayDepartamentos[$idDepartamento]["desc"].PHP_EOL;
            } else {
                echo "No hay ningun departamento con ese id\n";
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

function borrarDepartamento(){
    echo "==================================\n";
    echo "Dime la id del departamento:\n";
    $idDepartamento="";
    fscanf(STDIN,"%s\n",$idDepartamento);
    global $arrayDepartamentos;
    if ( in_array($idDepartamento,array_keys($arrayDepartamentos))){
        
        unset($arrayDepartamentos[$idDepartamento]);
        echo "Empleado eliminado\n";
        echo "==================================\n";
        
    } else {
        echo "No hay ningun departamento con ese id\n";
        echo "==================================\n";
    }
}

function modificarDepartamento(){
    echo "==================================\n";
    echo "Dime la id del departamento:\n";
    $idDepartamento="";
    fscanf(STDIN,"%s\n",$idDepartamento);
    global $arrayDepartamentos;
    if ( in_array($idDepartamento,array_keys($arrayDepartamentos))){
        
        echo "NUEVO Nombre departamento: ";
        fscanf(STDIN,"%s\n",$nombreDepartamento);
        echo "NUEVO Descripcion departamento: ";
        fscanf(STDIN,"%s\n",$descDepartamento);
        
        $arrayDepartamentos[$idDepartamento]["nombre"]=$nombreDepartamento;
        $arrayDepartamentos[$idDepartamento]["desc"]=$descDepartamento;
        
    } else {
        echo "No hay ningun departamento con ese id\n";
        echo "==================================\n";
    }
}

///////////////////////////                         ///////////////////////////
///////////////////////////                         ///////////////////////////
///////////////////////////    COMIENZO PROGRAMA    ///////////////////////////
///////////////////////////                         ///////////////////////////
///////////////////////////                         ///////////////////////////


do{
echo <<<MENU
     === Empleado: ===               === Departamento: ===

    1. Crear empleado               5. Crear departamento
    2. Mostrar empleados            6. Mostrar departamentos                           
    3. Actualizar empleado          7. Actualizar departamento 
    4. Eliminar empleado            8. Eliminar departamento

                          0. SALIR
MENU;

$opcion=0;
fscanf(STDIN,"%d\n",$opcion);
$bucleMenu=true;
    switch ($opcion){
        case 1:$arrayEmpleados+=insertarEmpleado();break;
        case 2:verEmpleados($arrayEmpleados);break;
        case 3: $arrayEmpleados=modificarEmpleado($arrayEmpleados);break;
        case 4:$arrayEmpleados=borrarEmpleado($arrayEmpleados);break;
        case 5:insertarDepartamento();break;
        case 6:verDepartamentos();break;
        case 7:modificarDepartamento();break;
        case 8:borrarDepartamento();break;
        case 0:$bucleMenu=false;;break;
        default: echo "Opcion invalida. \n\n"; break;
    }
}while($bucleMenu==true);

?>
