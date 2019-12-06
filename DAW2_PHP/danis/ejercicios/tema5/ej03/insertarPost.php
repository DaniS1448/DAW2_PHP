<?php
require_once '../bd.php';
require_once '../util.php';
session_start();


$nombreProducto = isset($_POST['nombre'])?$_POST['nombre']:null;
$precioProducto = isset($_POST['precio'])?$_POST['precio']:null;



if($nombreProducto != null && $precioProducto != null && $nombreProducto != '' && $precioProducto >0){
    if (!isset($_SESSION['prodTemp'])) {$_SESSION['prodTemp']=[];}
    array_push($_SESSION['prodTemp'], [$nombreProducto,$precioProducto]);
    //insertarArrayProductos([[$nombreProducto,$precioProducto]]);
    echo "Producto preparado correctamente! REDIRIGIENDO...";
    header( "refresh:3; url=insertar.php" );
}else{
    echo "Error";
}
?>