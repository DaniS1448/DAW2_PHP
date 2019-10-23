<?php
session_start();
$usuariosClave=["Manu"=>"manu123","Dani"=>"dani1","Diego"=>"delegado","Celia"=>"cel89"];

$usuario= isset($_REQUEST["usuario"])? $_REQUEST["usuario"]:"";
$clave= isset($_REQUEST["clave"])? $_REQUEST["clave"]:"";

function comprobarUsuario(){
    global $usuariosClave;
    global $usuario;
    global $clave;
    $usuarioExiste=false;    
   
        if ((in_array($usuario,array_keys($usuariosClave))) && ($usuariosClave[$usuario]==$clave)){
            $usuarioExiste=true;
        }
        
    return $usuarioExiste;    
}

function banderas($nombre,$banderas,$seleccionado=""){
    
    foreach($banderas as $e => $a){ 
    if (isset($_SESSION['bandera'])) {if($_SESSION['bandera'] == $e) {$seleccionado= "checked=\"checked\"";}}
    echo <<<HTML
    <img src="$a" width="27" height="18" alt="$e"/>
    <input type="radio" name="$nombre" value="$e" id="$e" $seleccionado/>
HTML;
    }
}



if (comprobarUsuario()){
    $visitas=0;
    
    if (isset($_COOKIE["visitas"])){        
        $visitas=$_COOKIE["visitas"]+1;
        setcookie("visitas",$visitas);        
    } else {        
        setcookie ("visitas",1);        
    }
    
    if (!isset($_SESSION['bandera'])) {
        $_SESSION['bandera']="espania";
    }
    
    echo "Conectado como <b>".$usuario."</b>. Numero de visitas ".$visitas.".<br>";
    echo <<<HTML
            <form action="index.php" method="post">
                <input type="hidden" name="usuario" value="$usuario"/>
                <input type="submit" value="Desconectar"/>           
HTML;
    banderas("paises",["espania"=>"img/es.png","inglaterra"=>"img/gb.png","francia"=>"img/fr.png"]);
   echo "</form>";
    
} else {
    
    echo "Usuario y contraseña incorrectos";
    echo <<<HTML
            <form action="index.php" method="post">
                <input type="submit" value="Desconectar"/>
            </form>
HTML;
    
}