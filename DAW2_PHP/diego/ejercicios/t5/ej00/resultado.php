<?php
require_once 'bd.php';
$db=conectarMySQL();

$consulta = <<<SQL
select id, nombre, apellido, telefono
from empleados

SQL;

$datos = $db->query($consulta);



?>
