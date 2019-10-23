<?php
session_start();

echo <<<HTML
        <h1>Nuevo Usuario</h1>
        <form action="registrarPost.php" method="post">
            Usuario<input type="text" name="usuarioNuevo"/><br>
            Contraseña<input type="password" name="claveNuevo"/><br>
            <input type="submit" value="Enviar"/>
        </form>
HTML;


?>