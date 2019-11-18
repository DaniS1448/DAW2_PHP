<?php
require_once 'conexionBd.php';
$numemp=$_POST['numemp'];

$db=conectarMySQL();

$consulta=<<<SQL
delete from empleados where numemp=$numemp
SQL;

if ($db->exec($consulta)){
    $elim=true;
}else{
    $elim=false;
}
header("Location:eliminarEmpleadoDatos.php?elim=$elim");
?>