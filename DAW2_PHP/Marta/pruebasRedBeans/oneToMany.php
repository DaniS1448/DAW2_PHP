<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=pruebas_redbean', 'root', '');

$persona=R::dispense('persona');
$persona->nombre='Pepe';
$persona->edad='32';

R::store($persona);

$persona=R::dispense('persona');
$persona->nombre='Lorena';
$persona->edad='24';

R::store($persona);

$pais=R::dispense('pais');
$pais->nombre='Chile';

R::store($pais);

$pais=R::dispense('pais');
$pais->nombre='Colombia';

R::store($pais);



?>