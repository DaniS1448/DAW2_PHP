<?php
session_start();
$palabra = $_GET['palabra'];
$idioma = $_GET['idioma'];
$resultado='No existe tal traduccion';

foreach ($_SESSION['diccionario'] as $palabras){
    if (in_array($palabra, $palabras)) {
        if ($idioma == 'es' && $palabra != $palabras['es']) {
            $resultado=$palabras['es'];
        }
        if ($idioma == 'en' && $palabra != $palabras['en']) {
            $resultado=$palabras['en'];
        }
        if ($idioma == 'fr' && $palabra != $palabras['fr']) {
            $resultado=$palabras['fr'];
        }
    }  
}
echo $resultado;
?>