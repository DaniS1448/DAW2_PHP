<?php
$signo=isset($_GET['zod'])?$_GET['zod']:null;
$mes=isset($_GET['mes'])?$_GET['mes']:null;

if ($signo != null && $mes!= null) {
    echo <<<HTML
        Signo escogido: $signo<br>
        Mes escogido: $mes
HTML;
} else {
    echo "Faltan parámetros";
}


?>