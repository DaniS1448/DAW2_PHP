<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test','root','');

$personaEliminar=isset($_GET['id'])?$_GET['id']:"";

$persona=R::load('persona',$personaEliminar);
R::trash($persona);
header("Location:persona.php");
?>
