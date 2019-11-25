<?php

$esAjax = isset(
    $_SERVER['HTTP_X_REQUESTED_WITH']) ?
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' :
    false;
    if ($esAjax) {
        $palabra = isset($_POST['palabra'])?$_POST['palabra']:null;
        $idioma = isset($_POST['idioma'])?$_POST['idioma']:null;
        
        if ($palabra != null && $idioma != null) {
            session_start();
            $verificar = true;
            
            foreach ($_SESSION['diccionario'] as $arrayPalabra){
                foreach ($arrayPalabra as $idiomaDiccionario => $palabraDiccionario){
                    if ($palabra == $palabraDiccionario) {
                        if ($idioma != $idiomaDiccionario) {
                            echo $arrayPalabra[$idioma];
                            $verificar = false;
                        }
                    }
                }
            }
            
            if ($verificar) {
                echo "No existe tal traducción";
            }
        }
        
    }
    else {
        echo "SOLO EJECUCIONES AJAX";
    }
    
    ?>