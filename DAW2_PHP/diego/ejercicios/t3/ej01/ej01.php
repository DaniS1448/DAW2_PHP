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

// si existe una cookie UID te saluda con la cadena aleatoria creada en la funcion
if (isset($_COOKIE['UID'])) {
    echo "Hola de nuevo. Te conozco como " . $_COOKIE["UID"];
} else { // si esa cookie no existe crea una cookie con el string creado en la funcion.
    echo "Hola desconocido. A partir de ahora te recordaré";
    setcookie("UID", generaCadenaAleatoria());
}

?>