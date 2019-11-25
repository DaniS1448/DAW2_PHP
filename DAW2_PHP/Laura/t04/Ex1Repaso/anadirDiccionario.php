<?php
session_start();
isset($_SESSION['diccionario'])?   :$_SESSION['diccionario']=[];
$_SESSION['diccionario'] = $_SESSION['pendientes'];

//Borra la variable que contiene
unset($_SESSION['pendientes']);

header('Location: lista.php');
?>