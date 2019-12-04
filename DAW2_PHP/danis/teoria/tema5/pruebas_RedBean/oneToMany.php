<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=pruebas_redbean', 'root', '');

$colegio = R::dispense('colegio');
$colegio -> nombre = 'Rey Fernando VI';

$pepe = R::dispense('alumno');
$pepe -> nombre = 'Pepe';
$pepe -> colegio = $colegio;

R::store( $pepe );

$juan = R::dispense('alumno');
$juan -> nombre = 'Juan';
$juan -> colegio = $colegio;

R::store( $juan );

?>