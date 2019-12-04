<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=pruebas_redbean', 'root', '');

$colegio = R::dispense('colegio');
$colegio -> nombre = 'Rey Fernando VI';


$pepe = R::dispense('alumno');
$pepe -> nombre = 'Pepe';

$juan = R::dispense('alumno');
$juan -> nombre = 'Juan';


$colegio -> ownAlumnoList[] = $pepe;
$colegio -> ownAlumnoList[] = $juan;

R::store( $colegio );


?>