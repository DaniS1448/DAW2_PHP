<?php 
session_start();
// recogemos via post el valor de producto y precio y lo guardamos en las variables para usarlos en la consulta  
$nombre=isset($_POST['nombre'])?$_POST['nombre']:"";
$precio=isset($_POST['precio'])?$_POST['precio']:"";

if ($nombre != "" && $precio != "") {

isset($_SESSION['pendientes']) ?: $_SESSION['pendientes'] = [];

$producto=[$nombre, $precio];

array_push($_SESSION['pendientes'], $producto);
}
header('location:main.php');
?> 