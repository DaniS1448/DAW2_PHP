<?php
require_once "datos.php";
$ca = isset($_GET['ca'])?$_GET['ca']:null;
echo implode('|',$bd[$ca]);
?>