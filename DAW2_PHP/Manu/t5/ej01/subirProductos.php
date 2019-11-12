<?php
session_start();
require_once 'util.php';

$db=conectarMySQL();

////
$consulta= <<<SQL
    insert into producto(nombre,precio)
       values (?,?);
SQL;
$resultado=$db->prepare($consulta);
////
$ok=true;
foreach($_SESSION['productos'] as $producto){
    if(!( $resultado->execute([$producto['nombre'],$producto['precio']]))){
        $ok=false;
    }
}
if($ok){
    echo "<h1>Productos subidos</h1>";
    echo "<a href=\"index.php\"><button>Volver</button></a>";
    session_unset();
}


?>