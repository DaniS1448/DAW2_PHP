<?php
require_once 'rb.php';
R::setup('mysql:host=localhost; dbname=tartas', 'root','');
$nombre=$_POST['nombre'];
$peso=$_POST['peso'];
$ingredientes=isset($_POST['ingredientes'])?$_POST['ingredientes']:[];

$id=$_GET['id'];
$tarta=R::load('tarta', $id);

$tarta->nombre=$nombre;
$tarta->peso=$peso;

$ingParaBorrar=R::find('ingredientes_tarta', 'where tarta_id = :idTarta', [':idTarta'=>$id]);

foreach ($ingParaBorrar as $ingB){
    R::trash($ingB);
}


foreach ($ingredientes as $idIngrediente){
    
    $ingredienteTemp=R::load('ingredientes', $idIngrediente);
    
    $tarta->sharedIngredientesList[]=$ingredienteTemp;
    R::store($tarta);
}

R::store($tarta);

header("Location:tartaModificada.php?nombre=$tarta->nombre");
?>