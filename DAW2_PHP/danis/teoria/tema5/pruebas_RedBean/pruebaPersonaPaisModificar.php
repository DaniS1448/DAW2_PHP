<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=pruebas_redbean', 'root', '');

$pais= R::load('pais', 1);
R::trash($pais);


?>