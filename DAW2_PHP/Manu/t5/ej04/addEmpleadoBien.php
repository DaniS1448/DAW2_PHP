<?php
require_once 'conexionBd.php';
$db=conectarMySQL();
$consulta= <<<SQL
    insert into empleados (nombre,apellido,telefono,sexo)
    values (?,?,?,?);
SQL;
$resultado= $db->prepare($consulta);
if($resultado->execute([$_GET['nombre'],$_GET['apellido'],$_GET['tlf'],$_GET['sexo']])){
    $add=true;
}else{
  $add=false;
}
header("Location:addEmpleadoDatos.php?add=$add");

?>