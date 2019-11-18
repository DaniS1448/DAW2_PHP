<?php
session_start();
$palabra=isset($_GET['palabra'])?$_GET['palabra']:"";
$idioma=isset($_GET['idioma'])?$_GET['idioma']:"";
$resultado="No existe tal traduccion";

if(isset($_SESSION['diccionario'])){
    
    foreach($_SESSION['diccionario'] as $palabras){
        
        if( in_array($palabra,$palabras)){
            
            if ($idioma == 'es' && $palabra!=$palabras[0]){
                $resultado=$palabras[0];
            }
            
            if ($idioma == 'en' && $palabra!=$palabras[1]){
                $resultado=$palabras[1];
            }
            
            if ($idioma == 'fr' && $palabra!=$palabras[2]){
                $resultado=$palabras[2];
            }
        }
    }
    
}
echo $resultado;