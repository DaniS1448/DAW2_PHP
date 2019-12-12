<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=pruebas_redbean', 'root', '');

$persona= R::dispense('personas');
$persona->nombre='María';
$persona->edad='19';


$pais=R::dispense('pais');
$pais->nombre='España';
R::store($pais);

$pais=R::dispense('pais');
$pais->nombre='China';
R::store($pais);

$pais=R::dispense('pais');
$pais->nombre='Rusia';
R::store($pais);

$persona->pais=$pais;

R::store($persona);
