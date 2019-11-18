<?php
require_once 'conexionBd.php';
$numemp=$_POST['numemp'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tlf=$_POST['tlf'];
$sexo=$_POST['sexo'];

$db=conectarMySQL();

$consulta=<<<SQL
update empleados set nombre="$nombre",apellido="$apellido",telefono="$tlf",sexo="$sexo" where numemp=$numemp
SQL;

if ($db->exec($consulta)){
    $mod=true;
}else{
    $mod=false;
}
header("Location:modificarEmpleadoDatos.php?mod=$mod");
?>