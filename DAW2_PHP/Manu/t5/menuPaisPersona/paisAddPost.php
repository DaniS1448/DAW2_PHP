<?php
require_once 'rb.php';

$paisPasado=isset($_POST['nombre'])?$_POST['nombre']:"";

R::setup('mysql:host=localhost;dbname=test','root','');

$ok=true;
if(R::findOne( 'pais', "nombre = ?",[$paisPasado])!=null){
    $ok=false;
}

if($ok){
    $pais=R::dispense('pais');
    $pais ->nombre=$paisPasado;
    
    R::store($pais);
    header('Location:pais.php');
    
}else{
    header('Location:paisAddError.php');
}
?>