<?php

session_start();

$usuario = isset ( $_POST ['usuario'] ) ? $_POST ['usuario'] : null;
$pwd = isset ( $_POST ['pwd'] ) ? $_POST ['pwd'] : null;
$rec = isset ( $_POST ['rec'] ) ? $_POST ['rec'] : null;

$credenciales=false;
if ($usuario != null && $pwd != null ) {
    if (in_array($usuario, array_keys( $_SESSION['usuarios']))) {
        if ($_SESSION['usuarios'][$usuario]['pwd'] == $pwd) {
            $credenciales=true;
            $_SESSION['_activo']=$usuario;
            if ($rec == 'on') {
                $_SESSION['_recordar']=true;
            } else {
                $_SESSION['_recordar']=false;
            }
        }
    }
}

//SE PUEDE HACER QUE LA CASILLA DE RECORDAR FUNCIONE SIN VALIDACIÓN DE CREDENCIALES
/* if ($rec == 'on') {
    $_SESSION['_recordar']=true;
    $_SESSION['_activo']=$usuario;
} else {
    $_SESSION['_recordar']=false;
    //unset($_SESSION['_activo']);
} */


if ($credenciales) {
    header('Location:listaUsuarios.php');
} else {
    echo "<h1>ERROR LOGIN</h1><h5>REDIRIGIENDO EN 3 SEGUNDOS</h5>";
    header( "refresh:3; url=login.php" );
}
?>