<?php
session_start();
header ( 'Content-Type: text/html; charset=UTF-8' );

if (!isset($_SESSION['temporal'])) $_SESSION['temporal'] = [];

$palabraEs=isset($_POST['palabraES'])?$_POST['palabraES']:null;
$palabraEn=isset($_POST['palabraEN'])?$_POST['palabraEN']:null;
$palabraFr=isset($_POST['palabraFR'])?$_POST['palabraFR']:null;

if ($palabraEs != null && $palabraEn != null && $palabraFr != null) {
    if (!empty($palabraEs) && !empty($palabraEn) && !empty($palabraFr)) {
        
        $traduccion = ['es' => $palabraEs, 'en' => $palabraEn, 'fr' => $palabraFr];
        array_push($_SESSION['temporal'], $traduccion);
        header('Location: nuevasPalabras.php');
    }
} else {
    echo '<h3>Ninguna de las palabras pueden quedar en blanco</h3>
          <a href="nuevasPalabras.php">Volver</a>';
}


?>