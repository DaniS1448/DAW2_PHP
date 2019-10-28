<?php 

// si ya existe cookie nv, recoge el valor y le suma 1

if (isset($_COOKIE['nv'])) {
    setcookie('nv', $_COOKIE['nv'] + 1);
    echo "numero de visitas: ".($_COOKIE['nv'] + 1);
} else { // si no esta creada la cookie, la crea con etiqueta nv y valor 1 y te saluda
    setcookie('nv', 1);
    echo "BIENVENIDO";
}

?> 