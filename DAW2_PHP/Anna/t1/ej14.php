<?php
/*Utilizar un array asociativo para emular un sistema gestor de base de datos relacional, 
 * en el que poder crear una estructura como la que propone el siguiente esquema:
Crear un programa, que mediante un menú, 
implemente un CRUD para todos los objetos descritos. El Caso de Uso (R) 
que tenga dos facetas: “mostrar todos los objetos” y “Recuperar un objeto por Id.”. 
En el caso de “mostrar todos los empleados”, que en lugar del idDpt, se muestre el nombre 
del departamento.

 */

$departamentos=[
    "1"=>["Ventas","Se vende todo"],
    "2"=>["Compras","Se compra todo"],
    "3"=>["Administracion","Directores"]
];
$empleados=[
    "1"=>["Ana","Savytska","1"],
    "2"=>["David","Rico","2"],
    "3"=>["Celia","Cubas","2"],
    "4"=>["Daniel","Mateo","3"],
    "5"=>["Laura","Gomez","1"]
    
];
/* $datos=[
    "1"=>[["Ventas"=>"Se vende todo"],["1"=>"Ana","Savytska"],["2"=>"Marta","Lopez"],["3"=>"Celia","Cubas"]],
    "2"=>[["Compras"=>"Se compra todo"],["1"=>"Maria","Rico"],["2"=>"David","Perez"],["3"=>"Laura","Gomez"]]
    
]; */

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
function comprobarDepart($depart,$departamentos){
    //echo $opt1;
    if($depart<1||$depart>sizeof($departamentos)){
        echo "Este departamento no existe, prueba otra vez \n";
    }
    while ($depart<1||$depart>sizeof($departamentos)){
        //elegir número del departamento
        echo "Elige departamento:";
        $dKey=array_keys($departamentos);
    $i=0;
        foreach ($departamentos as $d){
            echo PHP_EOL;
                echo $dKey[$i]." ".$d[0][0];
                $i++;
                
    }
        fscanf(STDIN, "%d\n",$depart);
       // global $datos;

      if($depart<1||$depart>sizeof($departamentos)){
            echo "Este departamento no existe, prueba otra vez \n";
        }
    }
}
//------------------------------------------- 

function introducirEmpl($empleados,$departamentos){
    echo "Introduce nombre del empleado: ";
    fscanf(STDIN, "%s\n",$nombre);
    echo "Introduce apellido del empleado: ";
    fscanf(STDIN, "%s\n",$apellido);
    //--------------------------------------
    echo "Elige a que departamento pertenece el empleado (número):";
    $dKey=array_keys($departamentos);
    $i=0;
        foreach ($departamentos as $d){
            echo PHP_EOL;
                echo $dKey[$i]." ".$d[0][0];
                $i++;
    }
    //--------------------------------------
    $depart=0;
    fscanf(STDIN, "%d\n",$depart);
    comprobarDepart($depart,$departamentos);
    $confirmDepart="NO";
    echo "Confirmar datos SI/NO \n";
    fscanf(STDIN, "%s\n",$confirmDepart);
    if(strcasecmp($confirmDepart,"SI")==0)
    {
        $idEmple=sizeof($empleados);
        $nuevoEmple=[$nombre,$apellido,$depart];
        $empleados[$idEmple]=$nuevoEmple;
        //array_push($empleados, $nuevoEmple);
        print_r($empleados);
       echo "Los datos se han añadido correctamente"; 
    }
    else {
        //introducirEmpl($datos);
        introducirEmpl($empleados,$departamentos);
    }
    echo PHP_EOL;
}
//-------------------------------------------------------
function introducirDept($departamentos){
    echo "Introduce id del departamento: ";
    fscanf(STDIN, "%s\n",$idDepart);
    echo "Introduce nombre del departamento: ";
    fscanf(STDIN, "%s\n",$nombre);
    echo "Introduce descripcion del departamento: ";
    fscanf(STDIN, "%s\n",$desc);
    //--------------------------------------
    if(array_key_exists($idDepart, $departamentos)){
        echo "El departamento ya existe";
    }
    
    $confirmDepart="NO";
    echo "Confirmar cambio de datos SI/NO \n";
    fscanf(STDIN, "%s\n",$confirmDepart);
    if(strcasecmp($confirmDepart,"SI")==0)
    {
        
        $nuevoDept=[$nombre,$desc];
        $departamentos[$idDepart]=$nuevoDept;
        //array_push($empleados, $nuevoEmple);
        print_r($departamentos);
        echo "Los datos se han añadido correctamente";
    }
    else {
        //introducirEmpl($datos);
        introducirDept($departamentos);
    }
    echo PHP_EOL;
}
//-------------------------------------------------------
function mostrarEmple($empleados,$departamentos){
    $i=0;
    //print_r($departamentos);
    //echo $departamentos["1"][0];
    foreach ($empleados as $e){
       
       echo "idEmple: ".array_keys($empleados)[$i].PHP_EOL;
        echo "Nombre: ".$e[0].PHP_EOL;
        echo "Apellido: ".$e[1].PHP_EOL;
       // $key=$departamentos[$e[2]];
       // echo $key[0];
      
            echo "Departamento: ".$departamentos[$e[2]][0].PHP_EOL;
        //echo "Departamento: ".$e[2].PHP_EOL;
        echo "==============".PHP_EOL;
        $i++;
    }
}
//--------------------------------------------------------
function mostrarDept($departamentos){
    $i=0;
    //print_r($departamentos);
    //echo $departamentos["1"][0];
    foreach ($departamentos as $e){
        
        echo "idDepartamento: ".array_keys($departamentos)[$i].PHP_EOL;
        echo "Nombre: ".$e[0].PHP_EOL;
        echo "Descripcion: ".$e[1].PHP_EOL;
        
        echo "==============".PHP_EOL;
        $i++;
    }
}
//--------------------------------------------------------
function actualizarEmpl($empleados,$departamentos){
    $idEmple=sizeof($empleados)+1;
    while(!array_key_exists($idEmple, $empleados))
    {
    echo "Introduce el ID del empleado que quieres actualizar: ";
    fscanf(STDIN, "%s\n",$idEmple);
    }
   
    //----------------------------
    echo "Introduce el nombre nuevo del empleado: ";
    fscanf(STDIN, "%s\n",$nombre);
    echo "Introduce el apellido nuevo del empleado: ";
    fscanf(STDIN, "%s\n",$apellido);
    //--------------------------------------
    echo "Elige a que departamento pertenece el empleado (número):";
    $dKey=array_keys($departamentos);
    $i=0;
    foreach ($departamentos as $d){
        echo PHP_EOL;
        echo $dKey[$i]." ".$d[0][0];
        $i++;
    }}
    //--------------------------------------
    function actualizarDept($departamentos){
        $idDept=sizeof($departamentos)+1;
        while(!array_key_exists($idDept, $departamentos))
        {
            echo "Introduce el ID del departamento que quieres actualizar: ";
            fscanf(STDIN, "%s\n",$idDept);
        }
        
        //----------------------------
        echo "Introduce el nombre nuevo del departamento: ";
        fscanf(STDIN, "%s\n",$nombre);
        echo "Introduce la descripcion nueva del departamento: ";
        fscanf(STDIN, "%s\n",$desc);
        //--------------------------------------
        if(!array_key_exists($idDept, $departamentos)){
            echo "El departamento no existe";
        }
    //---------------------------------------
    $confirmDepart="NO";
    echo "Confirmar actualizacion SI/NO \n";
    fscanf(STDIN, "%s\n",$confirmDepart);
    if(strcasecmp($confirmDepart,"SI")==0)
    {
        
        $actualizadoDept=[$nombre,$desc];
        $departamentos[$idDept]=$actualizadoDept;
        //$actualizadoE=[$idEmple,$nombre,$apellido,$depart];
        //array_push($empleados, $actualizadoE);
        print_r($departamentos);
        echo "Los datos se han añadido correctamente";
    }
    else {
        //introducirEmpl($datos);
        actualizarDept($departamentos);
    }
    echo PHP_EOL;
}
//-------------------------
function eliminarEmpl($empleados,$departamentos){
    $idEmple=sizeof($empleados)+1;
    while(!array_key_exists($idEmple, $empleados))
    {
        echo "Introduce el ID del empleado que quieres eliminar: ";
        fscanf(STDIN, "%s\n",$idEmple);
    }
    //---------------------------------------
    $confirmEliminacion="NO";
    echo "Confirmar eliminacion SI/NO \n";
    fscanf(STDIN, "%s\n",$$confirmEliminacion);
    if(strcasecmp($$confirmEliminacion,"SI")==0)
    {
        
        unset($empleados["$idEmple"]);
        //$actualizadoE=[$idEmple,$nombre,$apellido,$depart];
        //array_push($empleados, $actualizadoE);
        print_r($empleados);
        echo "Los datos se han eliminado correctamente";
    }
    else {
        //introducirEmpl($datos);
        eliminarEmpl($empleados,$departamentos);
    }
    echo PHP_EOL;
}
//-------------------------------------------
function eliminarDept($departamentos){
    $idDept=sizeof($departamentos)+1;
    while(!array_key_exists($idDept, $departamentos))
    {
        echo "Introduce el ID del empleado que quieres eliminar: ";
        fscanf(STDIN, "%s\n",$idDept);
    }
    //---------------------------------------
    $confirmEliminacion="NO";
    echo "Confirmar eliminacion SI/NO \n";
    fscanf(STDIN, "%s\n",$$confirmEliminacion);
    if(strcasecmp($$confirmEliminacion,"SI")==0)
    {
        
        unset($departamentos["$idDept"]);
        //$actualizadoE=[$idEmple,$nombre,$apellido,$depart];
        //array_push($empleados, $actualizadoE);
        print_r($departamentos);
        echo "Los datos se han eliminado correctamente";
    }
    else {
        //introducirEmpl($datos);
        eliminarDept($departamentos);
    }
    echo PHP_EOL;
}
 switch(menu()){
//------------------------------------------- 
     case 1:introducirEmpl($empleados,$departamentos);break;
     case 2:mostrarEmple($empleados,$departamentos);break;
     case 3:actualizarEmpl($empleados,$departamentos);break;
     case 4:eliminarEmpl($empleados,$departamentos);break;
     case 5:introducirDept($departamentos);break;
     case 6:mostrarDept($departamentos);break;
     case 7:actualizarDept($departamentos);break;
     case 8:eliminarDept($departamentos);break;
 }

?>