<?php
require_once 'rb.php';

$nombre=$_POST['nombre'];
$peso=$_POST['peso'];
$ingredientes=isset($_POST['ingredientes'])?$_POST['ingredientes']:[];



R::setup('mysql:host=localhost; dbname=tartas', 'root','');
$tarta= R::dispense('tarta');
$tarta->nombre=$nombre;
$tarta->peso=$peso;

foreach ($ingredientes as $idIngrediente){

    $ingredienteTemp=R::load('ingredientes', $idIngrediente);

    $tarta->sharedIngredientesList[]=$ingredienteTemp;
    R::store($tarta);
}

// foreach ($ingredientes as $ingrediente){
    
//     $ingredienteTemp=R::dispense('ingredientes');
//     $ingredienteTemp->nombre=$ingrediente;
    
//     $tarta->sharedIngredientesList[]=$ingredienteTemp;
//     R::store($tarta);
// }

//     $harina=R::load('ingredientes', 1);
//     $azucar=R::load('ingredientes', 2);
//     $chocolate=R::load('ingredientes', 3);

//     $tarta->sharedIngredientesList[]=$harina;
//     R::store($tarta);
    
//     $tarta->sharedIngredientesList[]=$azucar;
//     R::store($tarta);
    
//     $tarta->sharedIngredientesList[]=$chocolate;
//     R::store($tarta);
    
//     $tarta->sharedIngredientesList+=[$harina,$azucar,$chocolate];
//     R::store($tarta);


header("Location:tartaCreada.php?nombre=$nombre");
?>