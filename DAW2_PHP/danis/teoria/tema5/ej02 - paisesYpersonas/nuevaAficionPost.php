<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;

require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');


$aficion = R::dispense('aficion');
$aficion->nombre = $nombre;

R::store($aficion);

header('Location:aficionCreada.php?p=' . $nombre);
?>

