<?php
$peli = ['Titanic',' Crepúsculo', 'Los juegos del hambre'];
$cancion = ['Let it be', 'Mediterráneo', 'Close to the edge', 'Bohemian rhapsody'];

$esAjax = isset(
    $_SERVER['HTTP_X_REQUESTED_WITH']) ?
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' : false;

    if ($esAjax) {
        $dato = isset($_POST['dato'])?$_POST['dato']:null;
        
        if ($dato != null) {
            
            if ($dato == 'peli') {
                echo $peli[rand(0,2)];
            } else if ($dato == 'cancion'){
                echo $cancion[rand(0,3)];
            }
            
        }
    }
    else {
        echo "SOLO EJECUCIONES AJAX";
    }
?>