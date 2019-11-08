<?php
session_start();
header ( 'Content-Type: text/html; charset=UTF-8' );

if (!isset($_SESSION['diccionario'])) {
    $_SESSION['diccionario'] = [];
}

foreach ($_SESSION['pendiente'] as $palabra){
    array_push($_SESSION['diccionario'], $palabra);
}

unset($_SESSION['pendiente']);

header('Location: index.php');
?>