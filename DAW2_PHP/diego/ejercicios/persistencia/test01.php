<?php
require_once 'rb.php';
// cargando rb.php no necesitamos cargar la clase persona
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$p = R:: dispense('persona'); //tabla persona
$p -> nombre = 'Emanuel Sorin';  // en la tabla persona me creas una columna nombre
$p -> ap1 = 'Almajanu';
$p -> ap2 = '';

R::store($p);
?>