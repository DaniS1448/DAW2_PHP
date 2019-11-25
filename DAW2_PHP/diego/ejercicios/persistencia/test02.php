<?php
require_once 'rb.php';
// cargando rb.php no necesitamos cargar la clase persona
R::setup('mysql:host=localhost;dbname=test', 'root', '');
//conociendo el id persona podemos cargar sus datos
$p = R::load('persona',1);//lo cargamos
echo $p->nombre.' // '.$p->ap1.' // '.$p->ap2;
$p->nombre='Jose';//le damos un (nuevo) valor
$p->sexo='Hombre'; // si no existe la columna, la crea
R::store($p); // utilizamos redbeans para almacenar la informacion nueva
?>