<?php
session_start();

$es=isset($_POST['es'])?$_POST['es']:"";
$en=isset($_POST['en'])?$_POST['en']:"";
$fr=isset($_POST['fr'])?$_POST['fr']:"";

if ($es=="" || $fr=="" || $en==""){
    
    echo "<h3>Ninguna de las palabras puede quedar vacia</h3>";
    echo "<a href=\"add.php\">Volver</a>";
    
}else{
    
    isset($_SESSION['pendientes'])?:$_SESSION['pendientes']=[];
    $palabras=[$es,$en,$fr];
    array_push($_SESSION['pendientes'],$palabras);
    header('Location:add.php');
}
?>