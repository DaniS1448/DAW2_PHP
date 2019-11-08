<?php

$num1=isset($_POST['num1'])?$_POST['num1']:null;

if ($num1 != NULL) {
    
    setcookie("num1", $num1);
    
    echo <<<HTML
        <h3>Introduce otro número</h3>
        <form action="resultado.php" method="POST">
        <input type="text" name="num2"/> <input type="submit" value="Siguiente"/>
        </form>
HTML;
    
} else {
    echo "Falta el primero número";
}

?>
