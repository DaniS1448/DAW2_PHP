<?php

session_start();
// si no esta creado, me lo creas (esto evita errores)
if (!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios'] = [];
}
// guarda el valor del checked desde el login
$recordar=isset($_POST['recordar'])?$_POST['recordar']:"";

// si el campo nombre y el campo pwd contienen datos
if  (isset($_POST['nombre']) && isset($_POST['pwd'])) {
    // recogemos las variables del formulario
    $nombre = $_POST['nombre'];
    $pwd = $_POST['pwd'];
    // comprueba que ese nombre exista dentro de array usuarios como clave (en este caso)
    if (in_array($nombre, array_keys($_SESSION['usuarios']))) {
        // si el pwd ingresado es el mismo que el valor de ese usuario
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
            // a los 3 segundos redirige a esa url
            header("Refresh:3; url=listaUsuarios.php");
            // header('Location:listaUsuarios.php');
        } else {
            "Contraseña";
        }
    } else { 
        // si no coincide con el valor del array, da la opcion de volver al login
        echo "Usuario no encontrado<br/>";
        echo "<a href='login.php'>Volver a Login</a>";
    }
} else {

    echo "Error en el login.<br/>
      <a href='registrar.php'>Registrar nuevo usuario</a><br>
      <a href='login.php'>Volver a Login</a>";
}

?>