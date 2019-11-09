<?php
require_once 'Carta.php';
session_start();



echo "CARTA: {$_SESSION['yo'][0]->valor} <br>";

echo "<pre>";

print_r($_SESSION);

echo "</pre>";
?>
