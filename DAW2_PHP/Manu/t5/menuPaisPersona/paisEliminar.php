<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test','root','');

$paisEliminar=isset($_GET['id'])?$_GET['id']:"";

$pais=R::load('pais',$paisEliminar);
R::trash($pais);
header("Location:pais.php");
?>
