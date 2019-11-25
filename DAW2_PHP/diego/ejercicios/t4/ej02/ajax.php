<?php
// cargamos el array de ccaa y lo usamos desde aqui
require_once 'ccaa.php';
$ca = isset($_GET['ca']) ? $_GET['ca'] : null;
echo implode('/', $ccaa[$ca]);

?>