<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test','root','');

$aficionEliminar=isset($_GET['id'])?$_GET['id']:"";

$aficion=R::load('aficion',$aficionEliminar);
R::trash($aficion);
header("Location:aficion.php");
?>
