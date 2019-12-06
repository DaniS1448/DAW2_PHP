<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=pruebas_redbean', 'root', '');

//Borrar todas las asociaciones ya existentes
$colegio = R::load('colegio',1);
$colegio -> ownAlumnoList = [];
R::store($colegio);

//Borrar sólo una de las asociaciones ya existentes (suponiendo que el alumno de id=2 esté en el colegio de id=1)
$colegio = R::load('colegio',1);
unset( $colegio -> ownAlumnoList [2] );
R::store($colegio);

?>