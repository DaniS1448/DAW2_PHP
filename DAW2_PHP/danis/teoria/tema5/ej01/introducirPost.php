<?php
require_once 'bd.php';

$db = conectarMySQL();

$consulta = <<<SQL
    insert into clientes (id, nombre, apellido)
    values (0, '{$_GET['nombre']}', '{$_GET['apellido']}')
SQL;

if ($db->exec($consulta) == 0) {
    echo "ERROR";
    die();
} else {
    echo 'Fila insertada';
}


?>