<?php
session_start();

$cuenta = isset($_POST['cuenta'])?$_POST['cuenta']:"no se ha insertado cuenta corriente";
array_push($_SESSION['persona'], $cuenta);

header('location:paso4.php');

?>