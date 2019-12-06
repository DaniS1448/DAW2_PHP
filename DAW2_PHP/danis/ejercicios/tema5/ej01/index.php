<?php
require_once '../bd.php';

function insertar($arrayProductos){
    
    $db = conectarMySQL();
    $consulta = "insert into producto(nombre, precio) values (:nombre, :precio)";
    $sentencia = $db->prepare($consulta);
    foreach ($arrayProductos as $producto){
        $sentencia->bindParam ( ':nombre', $producto[0]);
        $sentencia->bindParam ( ':precio', $producto[1]);
        $sentencia -> execute();
    }
}

insertar([
    ['cocacola', 1.2],
    ['mejillones', 3.23],
    ['abrelatas', 4.34]
]);


?>