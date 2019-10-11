<?php
/*if (isset($_GET["nombre"]) && isset($_GET["pwd"])){
    echo "Hola ".$_GET["nombre"].", tu contraseña es ".$_GET["pwd"];
} else {
    
    echo <<<HTML
    <form action="ej16.php" method="get">
    Nombre: <input type="text" name="nombre" required="required"/><br>
    Contraseña: <input type="password" name="pwd" minlength="6" maxlength="12"/><br>
    <input type=submit value="Enviar"/>
    </form>
HTML;
    
}*/
function formulario($nombre="",$pwd=""){
    echo <<<HTML
    <form action="ej16.php" method="get">
    Nombre: <input type="text" name="nombre" value="$nombre"/><br>
    Contraseña: <input type="password" name="pwd" value="$pwd"/><br>
    <input type=submit value="Enviar"/>
    </form>
HTML;
    
}

function comprobarNombre($nombre){
    if ($nombre==""){
        return false;
    }else{
        return true;
    }
}

function comprobarContra($pwd){
    $leng=strlen($pwd);
    if ($leng<6 || $leng>12){
        return false;
    }else{
        return true;
    }
}

if (isset($_REQUEST["nombre"]) && isset($_REQUEST["pwd"])){
    
    if (!comprobarNombre($_REQUEST["nombre"])){
        echo "<font color=\"red\">El nombre no puede estar en blanco</font><br>";
    }
   
    if (!comprobarContra($_REQUEST["pwd"])){
        echo "<font color=\"red\">La contraseña tiene que tener entre 6 y 12 caracteres</font><br>";
    }
    if (comprobarNombre($_REQUEST["nombre"]) && comprobarContra($_REQUEST["pwd"])){
        echo "Hola ".$_GET["nombre"].", tu contraseña es ".$_GET["pwd"];
        
    } else {
        formulario($_REQUEST["nombre"],$_REQUEST["pwd"]);
    }
    
    
} else { 
    formulario();
   
}






?>