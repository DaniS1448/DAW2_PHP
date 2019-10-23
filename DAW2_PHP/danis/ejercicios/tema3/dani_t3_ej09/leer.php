<?php

session_start();

$usuarioActivo = isset ( $_SESSION['_activo'] ) ? $_SESSION['_activo'] : null;
$remitente = isset ( $_REQUEST ['remitente'] ) ? $_REQUEST ['remitente'] : null;

$credenciales=false;
if ($usuarioActivo != null && $remitente != null ) {
    if (in_array($usuarioActivo, array_keys( $_SESSION['usuarios']))) {
        $credenciales=true;
    }
}

if ($credenciales) {
    echo "Usuario actual $usuarioActivo";
    echo "<h3>Lista de mensajes de $remitente</h3>";
    
    echo "<table><tr><th>Fecha</th><th>Texto</th></tr>";
    foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] as $k => $v) {
        if ($v['remitente'] == $remitente) {
            echo "<tr> <td>{$v['fecha']}</td> <td>{$v['texto']}</td> </tr>";
        }
    }
    echo "</table>";
    
    
    
    
    echo "<a href=\"listaUsuarios.php\">Volver a la lista de usuarios</a>";
} else {
    echo "<h1>ERROR LOGIN</h1><h5>REDIRIGIENDO EN 3 SEGUNDOS</h5>";
    header( "refresh:3; url=login.php" );
}
?>