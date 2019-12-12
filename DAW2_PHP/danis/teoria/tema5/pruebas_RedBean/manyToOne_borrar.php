<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=pruebas_redbean', 'root', '');

$alumno = R::load('alumno',1);
$alumno->colegio = null;
R::store($alumno);


?>