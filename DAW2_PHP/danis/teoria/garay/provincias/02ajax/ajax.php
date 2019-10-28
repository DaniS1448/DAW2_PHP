<?php
require_once '../ccaa.php';
$ca = isset($_GET['ca'])?$_GET['ca']:null;
echo implode('|',$ccaa[$_GET['ca']]);
?>