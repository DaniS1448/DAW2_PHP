<?php
require_once "traducciones.php";
$radioCheck = isset($_GET['radio'])?$_GET['radio']:null;
echo implode('|',$BDetiquetas[$radioCheck]);

?>