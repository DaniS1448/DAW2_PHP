<?php
echo <<< HTML
    Introduce un numero (1..15)<br>
    <form action="radios.php" method="get">
    <input type="number" name="numero" min="1" max="15"/>
    <input type="submit" value="Enviar" />
    </form>
HTML;
?>