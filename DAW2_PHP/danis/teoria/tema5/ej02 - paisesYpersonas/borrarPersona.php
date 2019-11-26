<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$id = $_POST['id'];
$persona = R::load('persona', $id);
R::trash($persona);
header('Location:listaPersonas.php');
?>