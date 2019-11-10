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
            //echo "PAL: $palabra | IDIOMA: $idioma";
            $noExisteTraduccion = true;
            
            foreach ($_SESSION['diccionario'] as $valor){
                
                foreach ($valor as $idiomaD => $palabraD){
                    
                    if ($palabra == $palabraD) {
                        if ($idioma != $idiomaD) {
                            echo $valor[$idioma];
                            $noExisteTraduccion = false;
                        }
                        
                    }
                }
            }
            
            if ($noExisteTraduccion) {
                echo "No existe tal traducción";
            }
        }
        
    }
    else {
        echo "SOLO EJECUCIONES AJAX";
    }
    
    ?>