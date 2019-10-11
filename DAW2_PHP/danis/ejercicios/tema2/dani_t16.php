<?php
if (comprobarNombre('nombre') && comprobarPassword('pwd') ) {
//     $nombre = $_GET['nombre']; $pwd = $_GET['pwd'];
//     echo "Hola <b> $nombre </b> tu contraseña es <b> $pwd </b>";
    
} else {
    echo "<form action=". $_SERVER['PHP_SELF'].">";
    echo <<<HTML
            Nombre: <input type="text" name="nombre" id="nombre" value=""><br>
        	Contraseña: <input type="password" name="pwd" id="pwd" value=""><br>
        	<input type="submit"/>
            </form>
HTML;
}
    
function comprobarNombre($nombre) {
    $comprobador=false;
    if (isset($_GET[$nombre])) {
        if (isset($_GET[$nombre]) && strlen(($_GET[$nombre])) > 0) {
            echo "Hola <b> $_GET[$nombre] </b>";
            $comprobador=true;
        } else {
            echo "<font color=\"red\">El nombre no puede estar vacío</font>";
        }
    }
    
    return $comprobador;
}

function comprobarPassword($password) {
    $comprobador=false;
    if (isset($_GET[$password]) && (strlen($_GET[$password]) >0)) {
        if ((strlen($_GET[$password]) >=6 ) && (strlen($_GET[$password]) <= 12 )) {
            echo "tu contraseña es <b> $_GET[$password] </b>";
            $comprobador=true;
        } else {
            echo "<br><font color=\"red\">La contraseña debe tener entre 6 y 12 caracteres</font>";
        }
    } else {
        echo "<br><font color=\"red\">La contraseña no puede estar vacía</font>";
    }
    
    return $comprobador;
}
?>