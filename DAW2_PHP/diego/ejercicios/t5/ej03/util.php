<?php 
// cargando bd.php podemos llamar a la funcion conectarMYSQL()
require_once 'bd.php';
// creamos una funcion que conecte con la base de datos y genere la consulta y podemos usar en resultado (en este ejercicio)
function insertar($datos){
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

function lectura(){
    $db = conectarMYSQL();

        $consulta = <<<SQL
    select * from productos;
SQL;
     $resultado=$db->query($consulta);
        
    return $resultado;
}
?>