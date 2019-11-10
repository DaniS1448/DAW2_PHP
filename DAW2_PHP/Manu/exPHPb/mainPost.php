<?php
session_start();

isset($_SESSION['verbos'])?: $_SESSION['verbos']=[];

array_push($_SESSION['verbos'],$_POST['verbo']);

header("Location:main.php");
?>