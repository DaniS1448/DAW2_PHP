<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=pruebas_redbean', 'root', '');


$pais=R::load('pais', 1);

$persona=R::dispense('personas');
$persona->nombre='Pepe';
$persona->edad='45';
$persona->pais=$pais;

R::store($persona);

?>