<?php 
// cargando bd.php podemos llamar a la funcion conectarMYSQL()
require_once 'bd.php';
// creamos una funcion que conecte con la base de datos y genere la consulta
function insertar($datos)
{
    $db = conectarMYSQL();
    foreach ($datos as $dato) {
        $nombreProducto = $dato[0];
        $precio = $dato[1];
        $consulta = <<<SQL
    insert into productos (nombre, precio)
    values ('$nombreProducto', $precio );
SQL;
        $db->exec($consulta);
    }
    echo "todo ok";
}
?>