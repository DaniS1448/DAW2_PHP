<?php

session_start();

function crearUsuario($u, $p)
{   // le damos valor false por defecto
    $resul = false;
    // si el campo usuario está vacio salta falso
    if ($u == "") {
        $resul = false;
        // si ademas el campo pwd esta vacio salta falso
    } else if ($p == "") {
        $resul = false;
    } else {
        // si el nombre ya existe le damos valor falso
        if (isset($_SESSION['usuarios'][$u])) {
            $resul = false;
        } else {
            // el resto de opciones son true y se crea el usuario y pwd
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
// si crear usuario es true envía un mensaje de confirmacion
if (crearUsuario($usuario_nuevo, $clave_nueva)) {
    echo "Usuario $usuario_nuevo creado correctamente.<br><a href='login.php'>Volver al login</a>";
} else { // si crear usuario falla, envia un mensaje de error y habilita la redireccion
    echo "No se ha introducido usuario o contraseña o ya existe<br>
            <a href='registrar.php'>Volver a la pantalla de registro</a>";
}
?>