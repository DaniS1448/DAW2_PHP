<?php
require_once 'conexionBd.php';

$numemp=$_POST['numemp'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$sexo=$_POST['sexo'];

$db=conectarMySQL();
$consulta=<<<SQL
   insert into empleados
    values ("$numemp","$nombre","$apellido","$telefono","$sexo");
SQL;

if($db->exec($consulta)){
    echo "Empleado creado";
}else{
    echo "Empleado NO creado";
}
?>