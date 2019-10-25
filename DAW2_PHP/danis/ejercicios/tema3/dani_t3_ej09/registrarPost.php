<?php

session_start();

$usuario = isset ( $_POST ['usuario'] ) ? $_POST ['usuario'] : null;
$pwd = isset ( $_POST ['pwd'] ) ? $_POST ['pwd'] : null;

if ($usuario != null && $pwd != null ) {
    //$_SESSION['usuarios'][$usuario] = ['pwd' => $pwd, 'mensajes'=>[]];
    $_SESSION['usuarios'][$usuario] = ['pwd' => $pwd];
    echo "<h1>Usuario <font color=\"green\">$usuario</font> creado correctamente!</h1>";
    header( "refresh:3; url=login.php" ); 
} else {
    echo "ERROR";
}
?>