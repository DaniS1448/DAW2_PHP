<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$id = $_POST['id'];
$pais = R::load('pais', $id);
R::trash($pais);
header('Location:listaPaises.php');
?>