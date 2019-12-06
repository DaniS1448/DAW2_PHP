<?php
require_once '../bd.php';
require_once '../util.php';
session_start();

if (isset($_SESSION['prodTemp'])) {
    
    foreach ($_SESSION['prodTemp'] as $producto){
        insertarArrayProductos([[$producto[0],$producto[1]]]);
    }
    unset($_SESSION['prodTemp']);
}

echo "Productos insertados correctamente! REDIRIGIENDO...";
header( "refresh:3; url=insertar.php" );
?>