<?php
mb_internal_encoding ( "UTF-8" );
header('Content-Type: text/html; charset=UTF-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';

?>

<?php
echo <<<HTML
Primer n�mero: {$_COOKIE['num1']}<br>
Segundo n�mero: {$_POST['num2']}<br>
HTML;

if ($_COOKIE['num1'] < $_POST['num2']) {
    echo "El primer numero es MENOR que el segundo";
}
else {
    echo "El primer n�mero es mayor que el segundo";
}
?>

<hr>
<a href ='index.php'>Vuelve a introducir numeros</a>