<?php 

if (isset($_COOKIE['nv'])) {
    setcookie('nv', $_COOKIE['nv'] + 1);
    echo "numero de visitas: ".($_COOKIE['nv'] + 1);
} else {
    setcookie('nv', 1);
    echo "numero de visitas: ";
}


?>