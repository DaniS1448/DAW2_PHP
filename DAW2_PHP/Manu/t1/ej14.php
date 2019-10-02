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
        "id" => "1"
    ],
    "2" => [
        "nombre" => "Diego",
        "apellido" => "Cepeda",
        "id" => "2"
    ],
    "3" => [
        "nombre" => "Dani",
        "apellido" => "Stuparu",
        "id" => "3"
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
    
    $arrayTmp[$idEmpleado]["nombre"]=$nombreEmpleado;
    $arrayTmp[$idEmpleado]["apellido"]=$apellidoEmpleado;
    $arrayTmp[$idEmpleado]["id"]=$idEmpleado;
    
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
           print_r ($arrayEmpleados);
           break;
       case 2: 
           echo "Dime la id del empleado:\n";
           $idEmpleado="";
           fscanf(STDIN,"%s\n",$idEmpleado);
           if ( in_array($idEmpleado,array_keys($arrayEmpleados))){
               var_export($arrayEmpleados[$idEmpleado]);
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
        
        $newArray[$idEmpleado]["nombre"]=$nombreEmpleado;
        $newArray[$idEmpleado]["apellido"]=$apellidoEmpleado;        
        
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



































do{
echo <<<MENU
     === Empleado: ===               === Departamento: ===

    1. Crear empleado               6. Crear departamento
    2. Mostrar empleados            7. Mostrar departamentos                           
    3. Actualizar empleado          8. Actualizar departamento 
    4. Eliminar empleado            9. Eliminar departamento

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
        case 5:break;
        case 6:break;
        case 7:break;
        case 8:break;
        case 0:$bucleMenu=false;;break;
        default: echo "Opcion invalida. \n\n"; break;
    }
}while($bucleMenu==true);

?>
