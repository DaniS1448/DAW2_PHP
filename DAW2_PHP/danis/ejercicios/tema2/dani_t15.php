<?php
if (isset($_GET['nombre']) && isset($_GET['pwd']) ) {
    $nombre = $_GET['nombre']; $pwd = $_GET['pwd'];
    echo "Hola <b> $nombre </b> tu contraseña es <b> $pwd </b>";
    
} else {
    echo "<form action=". $_SERVER['PHP_SELF'].">";
    echo <<<HTML
            Nombre: <input type="text" name="nombre" id="nombre" value="root"><br>
        	Contraseña: <input type="password" name="pwd" id="pwd" value="iesrey"><br>
        	<input type="submit" name="submit"/>
            </form>
HTML;
}
?>