<?php

require_once('util.php');
session_start();

if (isset($_SESSION['activo']) && $_SESSION['activo'] == true){
    $_SESSION['yo'] = [];
    $_SESSION['banca'] = [];
    $_SESSION['baraja'] = inicializarMazo();
    $_SESSION['jugada']=true;
    
    $_SESSION['name']=recoger($_SESSION['usuario'], 'name');
    
    $arrayLastconexion = explode("-",recoger($_SESSION['usuario'], 'lastconexion'));
    $arrayHoy = explode("-",date("Y-m-d"));
    
    function resetearVidas(){
        resetVidas($_SESSION['usuario']);
    }
    
    if ($arrayHoy[0] > $arrayLastconexion[0]) {
        resetearVidas();
    } else if($arrayHoy[0] == $arrayLastconexion[0]){
        if ($arrayHoy[1] > $arrayLastconexion[1]) {
            resetearVidas();
        } elseif ($arrayHoy[1] == $arrayLastconexion[1]){
            if ($arrayHoy[2] > $arrayLastconexion[2]) {
                resetearVidas();
            }
        }
    }
    
    actualizarLastConexion($_SESSION['usuario']);
    
    header('Location:tablero.php');
} else {
    header('Location:login.php');
}


?>