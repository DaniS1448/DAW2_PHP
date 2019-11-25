<?php
echo <<<HTML
    <form action="radios.php" method="POST">
    Introduce un número (1...15) <input type="number" min="1" max="15" name="numero"/>
    <br>
    <input type="submit" value="Aceptar"/>   
    </form>
HTML;
?>