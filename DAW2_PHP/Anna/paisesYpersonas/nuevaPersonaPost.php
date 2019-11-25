<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$idPaisNace = isset($_POST['idPaisNace']) ? $_POST['idPaisNace'] : null;
$idPaisRecide = isset($_POST['idPaisRecide']) ? $_POST['idPaisRecide'] : null;

require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$pais1 = R::load('pais',$idPaisNace);
$pais2 = R::load('pais',$idPaisRecide);

$persona = R::dispense('persona');
$persona->nombre = $nombre;
$persona->nace = $pais1;
$persona->recide = $pais2;



R::store($persona);

header('Location:personaCreada.php?p=' . $nombre);
?>

