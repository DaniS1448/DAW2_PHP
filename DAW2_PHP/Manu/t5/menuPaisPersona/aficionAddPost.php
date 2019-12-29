<?php
require_once 'rb.php';

$aficion=isset($_POST['nombre'])?$_POST['nombre']:"";

R::setup('mysql:host=localhost;dbname=test','root','');

$ok=true;
if(R::findOne( 'aficion', "nombre = ?",[$aficion])!=null){
    $ok=false;
}

if($ok){
    $a=R::dispense('aficion');
    $a ->nombre=$aficion;
    
    R::store($a);
    header('Location:aficion.php');
    
}else{
    header('Location:aficionAddError.php');
}
?>