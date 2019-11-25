<?php
require_once 'rb.php';
// cargando rb.php no necesitamos cargar la clase persona
R::setup('mysql:host=localhost;dbname=test', 'root', '');
//$personas = R::findAll('persona');
$personas= R::find('persona', "nombre='Jose'");
foreach ($personas as $persona) {
    echo $persona->nombre.PHP_EOL;
    echo $persona->ap1.PHP_EOL;
    echo $persona->ap2.PHP_EOL;
    echo "---------------------".PHP_EOL;
}

?>