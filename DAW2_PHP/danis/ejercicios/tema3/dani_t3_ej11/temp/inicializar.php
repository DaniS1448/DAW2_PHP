<?php

require_once('util.php');
session_start();

if (isset($_SESSION['activo']) && $_SESSION['activo'] == true){
    $_SESSION['yo'] = [];
    $_SESSION['banca'] = [];
    $_SESSION['baraja'] = inicializarMazo();
    $_SESSION['jugada']=true;
    $_SESSION['name']=recoger($_SESSION['usuario'], 'name');
    
    function resetearVidas($usuario){
        resetVidas($usuario);
    }
    
    //$arrayLastconexion = explode("-",recoger($_SESSION['usuario'], 'lastconexion'));
    $arrayHoy = explode("-",date("Y-m-d"));
    
    
    
    
    actualizarLastConexion($_SESSION['usuario']);
    
    $arrayUsuariosJuego = recogerUsuarios();
    
    echo "<pre>";
        print_r($arrayHoy);
    echo "</pre>";

    foreach ($arrayUsuariosJuego as $userK => $lastconV){
        $arrayLastconexion = explode("-",$lastconV);
        
        if ($arrayHoy[0] > $arrayLastconexion[0]) {
            resetearVidas($userK);
        } else if($arrayHoy[0] == $arrayLastconexion[0]){
            if ($arrayHoy[1] > $arrayLastconexion[1]) {
                resetearVidas($userK);
            } elseif ($arrayHoy[1] == $arrayLastconexion[1]){
                if ($arrayHoy[2] > $arrayLastconexion[2]) {
                    resetearVidas($userK);
                    echo "<br>ESTOY DENTRO $userK => $lastconV<br>";
                }
            }
        }
        
    }
    
    //header('Location:tablero.php');
} else {
    header('Location:login.php');
}


?>