<?php
require_once "bdConexion.php";

$usuario=isset($_GET['usuario'])?$_GET['usuario']:'';

$db=conectarMySQL();

$consulta= <<<SQL
    select id,nombre, apellido
    from clientes
    where nombre="$usuario";
SQL;
?>