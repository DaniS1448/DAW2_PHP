<?php
$nombre = null;
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
}
$pwd = null;
if (isset($_GET['pwd'])) {
    $pwd = $_GET['pwd'];
}

if (($nombre == null && $pwd == null) || $nombre == "" || $pwd == "") {
    
    if ($nombre === "" && $pwd != "") {
        echo "<font color=\"red\"> El usuario está vacío</font><br/>";
        if (strlen($pwd)<6 || strlen($pwd)>12) {
            echo "<font color=\"red\">La contraseña debe ser >6 y <12 </font>";
            
        }
        echo <<<FORMULARIO
    <form action="index.php">
    Nombre: <input type="text" name="nombre" value=""><br/>
    Contraseña: <input type="password" name="pwd" value="$pwd"><br/>
    <input type="submit" value="Enviar"><br/>
    </form>
FORMULARIO;
    }
    if ($pwd === "" && $nombre != "") {
        echo "<font color=\"red\"> El pass está vacío</font>";
        echo <<<FORMULARIO
    <form action="index.php">
    Nombre: <input type="text" name="nombre" value="$nombre"><br/>
    Contraseña: <input type="password" name="pwd" value=""><br/>
    <input type="submit" value="Enviar"><br/>
    </form>
FORMULARIO;

    }
    
    if ($pwd === "" && $nombre === "") {
        echo "<font color=\"red\">Los dos campos no pueden estar vacíos</font>";
        echo <<<FORMULARIO
    <form action="index.php">
    Nombre: <input type="text" name="nombre" value=""><br/>
    Contraseña: <input type="password" name="pwd" value=""><br/>
    <input type="submit" value="Enviar"><br/>
    </form>
FORMULARIO;
    }
    if ($nombre === null && $pwd === null) {
        echo <<<FORMULARIO
    <form action="index.php">
    Nombre: <input type="text" name="nombre" value=""><br/>
    Contraseña: <input type="password" name="pwd" value=""><br/>
    <input type="submit" value="Enviar"><br/>
    </form>
FORMULARIO;
    }
} else {
    echo "Hola $nombre tu contraseña es $pwd";
}
?>

