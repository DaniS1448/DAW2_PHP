<?php 
session_start();
$posicionNuevaCarta = rand(0, sizeof($_SESSION['baraja'])-1);
$_SESSION['yo'][] = $_SESSION['baraja'][$posicionNuevaCarta];
unset($_SESSION['baraja'][$posicionNuevaCarta]);
$_SESSION['baraja'] = array_values($_SESSION['baraja']);
header('location:tablero.php');
?>