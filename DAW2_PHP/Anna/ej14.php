<?php
/*Utilizar un array asociativo para emular un sistema gestor de base de datos relacional, 
 * en el que poder crear una estructura como la que propone el siguiente esquema:
Crear un programa, que mediante un menú, 
implemente un CRUD para todos los objetos descritos. El Caso de Uso (R) 
que tenga dos facetas: “mostrar todos los objetos” y “Recuperar un objeto por Id.”. 
En el caso de “mostrar todos los empleados”, que en lugar del idDpt, se muestre el nombre 
del departamento.

 */

$datos=[
    "1"=>[["Ventas"=>"Se vende todo"],["1"=>"Ana","Savytska"],["2"=>"Marta","Lopez"],["3"=>"Celia","Cubas"]],
    "2"=>[["Compras"=>"Se compra todo"],["1"=>"Maria","Rico"],["2"=>"David","Perez"],["3"=>"Laura","Gomez"]]
    
];

function menu(){
    
 echo <<<MENU
CRUD empleado:
 1. Introducir empleado;
 2. Mostrar empleados;
 3. Actualizar empleado;
 4. Eliminar empleado;
CRUD departamento:
 5. Introducir departamento;
 6. Mostrar departamentos;
 7. Actualizar departamento; 
 8. Eliminar departamento;
 9. Salir del menu.
MENU;
 fscanf(STDIN, "%d\n",$opcion);
    return $opcion;
}
//---------------------------------------

function menuCliente(){
    do{
        menu();
    }while(menu()!=9);
}
//------------------------------------------- 
function comprobarDepart($depart,$datos){
    //echo $opt1;
    while ($depart<1||$depart>sizeof($datos)){
        //elegir número del departamento
        echo "Elige departamento:
         1. Ventas;
         2. Compras.";
        fscanf(STDIN, "%d\n",$depart);
       // global $datos;
        echo sizeof($datos);
        if($depart<1||$depart>sizeof($datos)){
            echo "Este departamento no existe, prueba otra vez";
        }
    }
}
//------------------------------------------- 

function introducirEmpl($datos){
    echo "Introduce nombre del empleado: ";
    fscanf(STDIN, "%s\n",$nombre);
    echo "Introduce apellido del empleado: ";
    fscanf(STDIN, "%s\n",$apellido);
    echo "Elige a que departamento pertenece el empleado (número):
1. Ventas;
2. Compras.";
    $depart=0;
    fscanf(STDIN, "%d\n",$depart);
    comprobarDepart($depart,$datos);
    $confirmDepart="NO";
    echo "Confirmar datos SI/NO \n";
    fscanf(STDIN, "%s\n",$confirmDepart);
    if(strcasecmp($confirmDepart,"SI")==0)
    {
       echo "Son iguales"; 
    }
    else {
        //introducirEmpl($datos);
        introducirEmpl($datos);
    }
    echo PHP_EOL;
}


 switch(menu()){
//------------------------------------------- 
     case 1:introducirEmpl($datos);break;
     case 2:mostrarEmpl();break;
     case 3:actualizarEmpl();break;
     case 4:eliminarEmpl();break;
     case 5:introducirDept();break;
     case 6:mostrarDept();break;
     case 7:actualizarDept();break;
     case 8:eliminarDept();break;
 }

?>