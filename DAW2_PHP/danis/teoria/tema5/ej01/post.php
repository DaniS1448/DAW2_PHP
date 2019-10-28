<?php

require_once 'bd.php';

$db = conectarMySQL();

$consulta = <<<SQL
    select id, nombre, apellido
    from clientes
    where nombre = '{$_GET['nombre']}'
SQL;

$datos = $db->query($consulta);
echo '<table border="1">';
foreach ($datos as $dato){
    echo <<<HTML
        <tr>
            <td>{$dato['id']}</td>
            <td>{$dato['nombre']}</td>
            <td>{$dato['apellido']}</td>
        </tr>
HTML;
}
    echo '</table>';

?>