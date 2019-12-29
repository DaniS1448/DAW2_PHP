<?php
require_once 'rb.php';

$personaPasado=isset($_POST['nombre'])?$_POST['nombre']:"";
$paisNacimiento=isset($_POST['paisNacimiento'])?$_POST['paisNacimiento']:"";
$paisReside=isset($_POST['paisReside'])?$_POST['paisReside']:"";
$arrayGusta=isset($_POST['gusta'])?$_POST['gusta']:[];
$arrayOdia=isset($_POST['odia'])?$_POST['odia']:[];


R::setup('mysql:host=localhost;dbname=test','root','');

$nombrePaisNacimiento=R::load( 'pais',$paisNacimiento);
$nombrePaisReside=R::load( 'pais',$paisReside);

    $persona=R::dispense('persona');
    $persona ->nombre=$personaPasado;
    $persona ->pais=$nombrePaisNacimiento;
    $persona ->reside=$nombrePaisReside;
    
    R::store($persona);
    
    foreach($arrayGusta as $aGusta){
        $aficionNombre=R::load('aficion',$aGusta);
        $a= R::dispense('aficiongusta');
        $a->persona=$persona;
        $a->aficion=$aficionNombre;
        R::store($a);
    }
    
    foreach($arrayOdia as $aOdia){
        $aficionNombre=R::load('aficion',$aOdia);
        $a= R::dispense('aficionodia');
        $a->persona=$persona;
        $a->aficion=$aficionNombre;
        R::store($a);
    }    
    
    header('Location:persona.php');
    
?>
