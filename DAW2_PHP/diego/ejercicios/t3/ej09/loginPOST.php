<?php

session_start();

if (!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios'] = [];
}
$recordar=isset($_POST['recordar'])?$_POST['recordar']:"";

// si el campo nombre y el campo pwd contienen datos
if  (isset($_POST['nombre']) && isset($_POST['pwd'])) {
    // recogemos las variables del formulario
    $nombre = $_POST['nombre'];
    $pwd = $_POST['pwd'];
    // comprueba que ese nombre exista en el array usuarios
    if (in_array($nombre, array_keys($_SESSION['usuarios']))) {
        // si el pwd ingresado es el mismo que en el array de usuarios
        if ($pwd == $_SESSION['usuarios'][$nombre]['pwd']) {
            if ($recordar == "on") {
                
                
                $_SESSION['_recordar'] = true;
            } else {
                $_SESSION['_recordar'] = false;
            }
            // le da el nombre de la sesion
            
            $_SESSION['_activo'] = $nombre;
            // y le redirige a listaUsuarios.php
            echo "Usuario valido. Redirigiendo...";
            header("Refresh:3; url=listaUsuarios.php");
            // header('Location:listaUsuarios.php');
        } else {
            "Contraseña";
        }
    } else { 
        echo "Usuario no encontrado<br/>";
        echo "<a href='login.php'>Volver a Login</a>";
    }
} else {

    echo "Error en el login.<br/>
      <a href='registrar.php'>Registrar nuevo usuario</a><br>
      <a href='login.php'>Volver a Login</a>";
}

?>