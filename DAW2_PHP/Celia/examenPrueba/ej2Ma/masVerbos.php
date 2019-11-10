<?php
session_start();
$verbo=isset($_POST["verbo"])?$_POST["verbo"]:null;

if(!isset($_SESSION["verbos"])){
    $_SESSION["verbos"]=[];
}
array_push($_SESSION["verbos"], $verbo);
//$_SESSION["verbos"]+=$verbo;
//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";
header('Location:introduce.php');