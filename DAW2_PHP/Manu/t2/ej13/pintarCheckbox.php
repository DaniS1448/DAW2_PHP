<?php
require_once '../ej09/utilHTML.php';

echo pintarCheckboxes("aficion",["D"=>"Deporte", "C"=>"Cine"],["C","D"]);

echo pintarSelect("paises", ["A"=>"Paris","B"=>"Espa�a","C"=>"Italia"],"multiple");
?>