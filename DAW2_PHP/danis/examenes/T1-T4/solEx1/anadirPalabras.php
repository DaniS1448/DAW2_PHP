<?php
session_start();

foreach ($_SESSION['temporal'] as $palabra){
    array_push($_SESSION['diccionario'], $palabra);
}

unset($_SESSION['temporal']);

header('Location: lista.php');
?>