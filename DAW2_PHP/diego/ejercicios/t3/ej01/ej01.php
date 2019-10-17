<?php

function generaCadenaAleatoria($longitud = 5)
{
    $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $base = strlen($charset);
    $result = '';
    $now = explode(' ', microtime())[1];
    while ($now >= $base) {
        $i = $now % $base;
        $result = $charset[$i] . $result;
        $now /= $base;
    }
    return substr($result, - 5);
}

if (isset($_COOKIE['UID'])) {
    echo "Hola de nuevo. Te conozco como " . $_COOKIE["UID"];
} else {
    echo "Hola desconocido. A partir de ahora te recordaré";
    setcookie("UID", generaCadenaAleatoria());
}

?>