<?php
require_once 'conexionBd.php';

$numemp=$_GET['numemp'];

$db=conectarMySQL();
$consulta=<<<SQL
    select * from empleados where numemp=$numemp
SQL;

$datos=[];
$resultado=$db->query($consulta);


foreach ($resultado as $e){
    array_push($datos,$e['nombre']);
    array_push($datos,$e['apellido']);
    array_push($datos,$e['telefono']);
    array_push($datos,$e['sexo']);    
}

echo implode('/',$datos);
?>
