<?php
require_once '../bd.php';
require_once '../util.php';

$nombreProducto = isset($_POST['nombre'])?$_POST['nombre']:null;
$precioProducto = isset($_POST['precio'])?$_POST['precio']:null;



if($nombreProducto != null && $precioProducto != null && $nombreProducto != '' && $precioProducto >0){
    insertar([[$nombreProducto,$precioProducto]]);
    echo "Producto insertado correctamente! REDIRIGIENDO...";
    header( "refresh:3; url=insertar.php" );
}else{
    echo "Error";
}
?>