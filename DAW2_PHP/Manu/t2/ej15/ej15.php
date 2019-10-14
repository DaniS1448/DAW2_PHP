<?php

if (isset($_GET["nombre"]) && isset($_GET["pwd"])){
    echo "Hola ".$_GET["nombre"].", tu contraseña es ".$_GET["pwd"];
} else {
    
    echo <<<HTML
    <form action="ej15.php" method="get">
    Nombre: <input type="text" name="nombre"/><br>
    Contraseña: <input type="password" name="pwd"/><br>
    <input type=submit value="Enviar"/>
    </form>
HTML;
    
}


?>