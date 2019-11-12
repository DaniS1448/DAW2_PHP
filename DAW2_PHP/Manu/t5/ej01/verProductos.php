<?php
require_once 'util.php';
$db=conectarMySQL();

////
$consulta= <<<SQL
    select * from producto
SQL;

$resultado=$db->query($consulta);
////

if(!$resultado){
    
    echo "<h3>Error en el selecto</h3>";
    
}else{
    echo "<h3>Productos en la base de datos</h3>";
    echo "<table border=1>";
    echo "<tr><th>Nombre</th><th>Precio</th></tr>";
    foreach($resultado as $fila){
        echo "<tr><td>{$fila['NOMBRE']}</td><td>{$fila['PRECIO']}</td></tr>";
    }
    echo "</table>";

}


?>