<?php
require_once 'bd.php';

$db = conectarMySQL();

$consulta = <<<SQL
    insert into clientes (id, nombre, apellido)
    values (0, 'pepe', 'peloto')
SQL;

$db->exec($consulta);
echo 'Fila insertada';
?>