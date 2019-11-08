<?php
session_start();
header ( 'Content-Type: text/html; charset=UTF-8' );

if (!isset($_SESSION['pendiente'])) {
    $_SESSION['pendiente'] = [];
}

$palabraEs=isset($_POST['nmES'])?$_POST['nmES']:null;
$palabraEn=isset($_POST['nmEN'])?$_POST['nmEN']:null;
$palabraFr=isset($_POST['nmFR'])?$_POST['nmFR']:null;

if ($palabraEs != null && $palabraEn != null && $palabraFr != null) {
    if (!empty($palabraEs) && !empty($palabraEn) && !empty($palabraFr)) {
        
        $traduccion = ['es' => $palabraEs, 'en' => $palabraEn, 'fr' => $palabraFr];
        array_push($_SESSION['pendiente'], $traduccion);
        header('Location: add.php');
    } /*else {
        echo '<h1>Ninguna de las palabras pueden quedar en blanco</h1><a href="add.php">Volver</a>';
    }*/
} else {
    echo '<h5>Ninguna de las palabras pueden quedar en blanco</h5><a href="add.php">Volver</a>';
}


?>