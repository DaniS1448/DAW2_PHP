<?php 

if (isset($_COOKIE['nv'])) {
    setcookie('nv', $_COOKIE['nv'] + 1);
    echo "numero de visitas: ".($_COOKIE['nv'] + 1);
} else {
    setcookie('nv', 1);
    echo "BIENVENIDO";
}

// if (!isset($_COOKIE['nv'])) {
//     setcookie('nv', 1);
//     echo "BIENVENIDO";
// } else {
//     $nv=$_COOKIE['n']+1;
//     setcookie('nv', $_COOKIE['nv'] + 1);
//     echo "numero de visitas: $nv");
// }

?>