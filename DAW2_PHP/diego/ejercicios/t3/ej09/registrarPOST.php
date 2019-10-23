<?php

session_start();

function crearUsuario($u, $p)
{
    $resul = false;
    if ($u == "") {
        $resul = false;
    } else if ($p == "") {
        $resul = false;
    } else {
        if (isset($_SESSION['usuarios'][$u])) {
            $resul = false;
        } else {
            $_SESSION['usuarios'][$u] = [];

            $_SESSION['usuarios'][$u] = ['pwd' => $p];
//podemos ver los usuarios creados en el array con print_r y dandole preformateo
//             echo "<pre>";
//             print_r($_SESSION['usuarios']);
//             echo "</pre>";
            $resul = true;
        }
    }
    return $resul;
}
$usuario_nuevo = $_POST['nombre_nuevo'];
$clave_nueva = $_POST['clave_nueva'];
if (crearUsuario($usuario_nuevo, $clave_nueva)) {
    echo "Usuario $usuario_nuevo creado correctamente.<br><a href='login.php'>Volver al login</a>";
} else {
    echo "No se ha introducido usuario o contraseña o ya existe<br>
            <a href='registrar.php'>Volver a la pantalla de registro</a>";
}
?>