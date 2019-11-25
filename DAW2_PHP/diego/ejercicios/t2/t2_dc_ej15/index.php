<?php
$nombre = null;
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
}
$pwd = null;
if (isset($_GET['pwd'])) {
    $pwd = $_GET['pwd'];
}
if ($nombre != null && $pwd != null) {
    echo "Hola $nombre tu contraseña es $pwd";
} else {
    echo <<<FORMULARIO
    <form action="index.php">
    Nombre: <input type="text" name="nombre" value="root"><br/>
    Contraseña: <input type="password" name="pwd" value="iesrey"><br/>
    <input type="submit" value="Enviar"><br/>
    </form>
FORMULARIO;
}
?>

