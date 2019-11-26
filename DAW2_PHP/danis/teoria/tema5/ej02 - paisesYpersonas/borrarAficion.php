<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$id = $_POST['id'];
$aficion = R::load('persona', $id);
R::trash($aficion);
header('Location:listaPersonas.php');
?>