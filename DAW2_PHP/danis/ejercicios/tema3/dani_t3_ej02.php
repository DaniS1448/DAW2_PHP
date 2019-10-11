<?php

if (isset($_COOKIE['nv'])) {
    setcookie('nv', ($_COOKIE['nv']+1));
    echo 'Num visitas: ' . ($_COOKIE['nv']+1) . PHP_EOL;
    
} else {
    setcookie('nv', 1);
    echo 'Num visitas: ' . 1 . PHP_EOL;
}


?>