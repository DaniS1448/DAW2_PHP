<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$idPais = isset($_POST['idPais']) ? $_POST['idPais'] : null;
$idPaisReside = isset($_POST['idPaisReside']) ? $_POST['idPaisReside'] : null;
$arrayGusta = isset($_POST['gusta']) ? $_POST['gusta'] : null;
$arrayOdia = isset($_POST['odia']) ? $_POST['odia'] : null;

require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$pais = R::load('pais',$idPais);
$paisReside = R::load('pais',$idPaisReside);

$persona = R::dispense('persona');
$persona->nombre = $nombre;
$persona->nace = $pais;
$persona->reside= $paisReside;
R::store($persona);

foreach ($arrayGusta as $idAficionGusta){
    $aficionGusta = R::load('aficion',$idAficionGusta);
    $relAficionGusta = R::dispense('aficiongusta');
    $relAficionGusta->persona = $persona;
    $relAficionGusta->aficion = $aficionGusta;
    R::store($relAficionGusta);
}

foreach ($arrayOdia as $idAficionOdia){
    $aficionOdia = R::load('aficion',$idAficionOdia);
    $relAficionOdia = R::dispense('aficionodia');
    $relAficionOdia->persona = $persona;
    $relAficionOdia->aficion = $aficionOdia;
    R::store($relAficionOdia);
}

header('Location:personaCreada.php?p=' . $nombre);
?>


