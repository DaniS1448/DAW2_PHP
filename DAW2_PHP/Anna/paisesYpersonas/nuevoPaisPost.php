<?php
$nombre = isset($_POST['nombre'])?$_POST['nombre']:null;

require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$ok = true;
if (R::findOne('pais','nombre=?',[$nombre]) != null) {
    $ok=false;
}

if ($ok) {

    $pais = R::dispense('pais');
    $pais->nombre = $nombre;
    
    
    R::store($pais);
    
    header('Location:paisCreado.php?p='.$nombre);
}
else {
    header('Location:paisCreadoError.php?p='.$nombre);
}
?>

