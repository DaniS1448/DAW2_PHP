<?php
require_once 'conexionBd.php';

$numemp=$_POST['numemp'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$sexo=$_POST['sexo'];

$db=conectarMySQL();
$consulta=<<<SQL
    update empleados set nombre="$nombre",apellido="$apellido",telefono="$telefono",sexo="$sexo" where numemp=$numemp
SQL;

if($db->query($consulta)){
    echo "Empleado actualizado";
}else{
    echo "Empleado NO actualizado";
}

?>

