<?php

session_start();

$usuarioActivo = isset ( $_SESSION['_activo'] ) ? $_SESSION['_activo'] : null;

$credenciales=false;
if ($usuarioActivo != null && $usuarioActivo != '' ) {
    if (in_array($usuarioActivo, array_keys( $_SESSION['usuarios']))) {
        $credenciales=true;
    }
}

function contadorMensajesUnRemitente($rem) {
    $contador=0;
    
    if (isset($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'])) {
        foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] as $k => $v) {
            if ($v['remitente'] == $rem) {
                $contador++;
            }
        }
    }

    return $contador;
}

function crearLinkLeer($contador, $u) {
    $cod='';
    
    if ($contador>0) {
        $cod.="<a href=\"leer.php?remitente=$u\">Leer</a>";
    }
    
    return $cod;
}

if ($credenciales) {
    echo "Usuario actual $usuarioActivo";
    echo "<h3>Lista de usuarios / mensajes</h3>";
    echo "<table>";
    foreach ($_SESSION['usuarios'] as $u => $k) {
        if ($u != $usuarioActivo) {
            echo "<tr>";
            echo "<td>$u</td>";
            $contador=contadorMensajesUnRemitente($u);
            echo "<td>($contador)</td>";
            $leer=crearLinkLeer($contador, $u);
            echo "<td>$leer</td>";
            echo "<td><a href=\"escribir.php?remitente=$usuarioActivo&destinatario=$u\">Escibir</a></td>";
            echo "<tr>";
        }
    }
    echo "</table>";
    echo "<a href=\"login.php\">Volver a login</a>";
} else {
    echo "<h1>ERROR LOGIN</h1><h5>REDIRIGIENDO EN 3 SEGUNDOS</h5>";
    header( "refresh:3; url=login.php" );
}
?>