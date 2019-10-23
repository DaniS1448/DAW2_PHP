<?php
session_start();
// ingresa sesion con el nombre ingresado en el login
if (! isset($_SESSION['_recordar'])) {
    $_SESSION['_recordar'] = true;
}

echo "Usuario actual {$_SESSION['_activo']}";
echo "<h2>Lista de usuarios / mensajes</h2><br/>";
if (! isset($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'])) {
    $_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] = [];
}
echo "<table>";
// me listas todos los usuarios creados
foreach ($_SESSION['usuarios'] as $k => $v) {
    // si no es el usuario activo
    
    if ($k != $_SESSION['_activo']) {
        // solo me muestra leer
        //echo "$k ";
        // añado un contador para que me cuente los mensajes de k remitente
        $contador = 0;
        // por cada mensajes del usuario activo me sacas la clave y valor del array
        foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] as $key => $value) {
            // si el remitente coincide con el valor k
            if ($k == $value['remitente']) {
                // me añades valor al contador
                $contador ++;
            }
        }
        // me muestras contador
       // echo "($contador)";
        // si el contador es 1 o mayor me muestras el campo Leer
        echo "<tr><td>$k<td/><td>($contador)</td><td>";
        if ($contador >= 1) {
            echo "<a href='leer.php?remitente=$k'>Leer</a>";
        }
        // me muestras el campo escribir
        echo "</td><td><a href='escribir.php?destinatario=$k'>Escribir</a><br/></td>";    
        echo "<tr/>";
    }
    
}
echo "</table>";
echo "<br/><a href='login.php'>Volver a Login</a>";
?>