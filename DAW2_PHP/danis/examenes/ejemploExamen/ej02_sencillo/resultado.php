<?php
echo <<<HTML
    Primer número: {$_COOKIE['num1']}<br>
    Segundo número: {$_POST['num2']}<br>
HTML;

if ($_COOKIE['num1'] < $_POST['num2']) {
    echo "El primero número es MENOR que el segundo";
} else {
    echo "El primero número es MAYOR que el segundo";
}

?>

<hr>
<a href='index.php'>Vuelve a introducir números</a>