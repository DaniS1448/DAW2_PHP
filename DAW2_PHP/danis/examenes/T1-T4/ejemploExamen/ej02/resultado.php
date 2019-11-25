<?php
$num1=isset($_COOKIE['num1'])?$_COOKIE['num1']:null;
$num2=isset($_POST['num2'])?$_POST['num2']:null;

if ($num1 != null && $num2 != null) {
    echo <<<HTML
    Primer número: $num1<br>
    Segundo número: $num2<br>
HTML;
    
    if ($num1 < $num2) {
        echo "El primero número es MENOR que el segundo";
    }else {
        echo "El primero número es MAYOR que el segundo";
    }
    
    echo "<hr><a href='index.php'>Vuelve a introducir números</a>";
} else {
    echo "Faltan parámetros";
}

?>