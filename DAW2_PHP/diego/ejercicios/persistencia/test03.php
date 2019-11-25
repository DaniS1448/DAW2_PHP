<?php
require_once 'rb.php';
// cargando rb.php no necesitamos cargar la clase persona
R::setup('mysql:host=localhost;dbname=test', 'root', '');
//conociendo el id persona podemos cargar sus datos
$p = R::load('persona',1);//lo cargamos

if ($p ->id == 0) {
    echo 'NO TA';
    
} else {
    R::trash($p);
}
?>