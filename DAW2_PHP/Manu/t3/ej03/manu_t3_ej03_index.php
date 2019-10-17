<?php
echo <<<HTML
        <h3>Listado de cookies por nivel</h3>
        Nivel0 --> <a href="listarCookies.php">Listado de cookies</a><br>
        Nivel0 --> Nivel1 --> <a href="nivel1/listarCookies.php">Listado de cookies</a><br>
        Nivel0 --> Nivel1 --> Nivel2 --><a href="nivel1/nivel2/listarCookies.php">Listado de cookies</a><br>
        <h3>Creacion de cookies en diferentes niveles (directorios) por un script ubicado en /</h3>
        <h4>Se permite fijar nombre y contenido de la cookie, asi como el nivel</h4>
        <fieldset>
            <legend>Creacion de la cookie</legend>
            <form action="crearCookie.php" method="get">
            Nombre <input type="text" name="nombreCookie"/>
            Contenido <input type="text" name="contenidoCookie"/>
            <br>
            Nivel
            <select name="nivelCookie">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <input type="submit" value="Crear cookie"/>
            </form>
        </fieldset>

HTML;

?>