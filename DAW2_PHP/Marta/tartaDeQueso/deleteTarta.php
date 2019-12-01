<?php
require_once 'rb.php';
R::setup('mysql:host=localhost; dbname=tartas', 'root','');

$id=$_GET['id'];
$tarta=R::load('tarta', $id);

R::trash($tarta);
header("Location:tartaEliminada.php?nombre=$tarta->nombre");
?>