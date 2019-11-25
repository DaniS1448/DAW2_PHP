<?php
session_start();
$palabra = $_GET['palabra'];
$idioma = $_GET['idioma'];
$datos ="No existe tal traducción";

//Recorro la session de diccionario
for($i=0;$i<sizeof($_SESSION['diccionario']['es']);$i++){
    
       if ($palabra == $_SESSION['diccionario']['es'][$i]) {
      
            if($idioma=='uk'){
                $datos=$_SESSION['diccionario']['uk'][$i];
            }
            if($idioma=='fr'){
                $datos=$_SESSION['diccionario']['fr'][$i];
            }
    }
    
    if ($palabra== $_SESSION['diccionario']['uk'][$i]) {
            if($idioma=='es'){
                $datos=$_SESSION['diccionario']['es'][$i];
            }
          
            if($idioma=='fr'){
                $datos=$_SESSION['diccionario']['fr'][$i];
            }
    }
   
    if ($palabra== $_SESSION['diccionario']['fr'][$i]) {
            if($idioma=='es'){
                $datos=$_SESSION['diccionario']['es'][$i];
            }
            if($idioma=='uk'){
                $datos=$_SESSION['diccionario']['uk'][$i];
            }
           
    }
}

echo $datos;

?>