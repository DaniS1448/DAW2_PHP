<?php
require_once 'conexionBd.php';

$numemp=$_GET['numemp'];

$db=conectarMySQL();
$consulta=<<<SQL
    select * from empleados where numemp=$numemp
SQL;

$existe=false;
$resultado=$db->query($consulta);


foreach ($resultado as $e){
    $existe=true;
}

echo $existe;
?>