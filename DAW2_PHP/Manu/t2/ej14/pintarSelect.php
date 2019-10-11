<?php
require_once '../ej09/utilHTML.php';

echo pintarSelect("paises", ["A"=>"Paris","B"=>"España","C"=>"Italia"],"multiple");

echo pintarSelect("comidas", ["pasta"=>"Pasta","burguer"=>"Hamburguesa","pizza"=>"Pizza"]);
?>