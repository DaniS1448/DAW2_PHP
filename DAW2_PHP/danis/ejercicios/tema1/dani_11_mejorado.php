<?php

$cadena = "Alberto:Garay:913334455//Ana:Garcia:914445566";

foreach (explode('//', $cadena) as $usuarios){
    $cadaUsuario = explode(':', $usuarios);
    echo "Nombre: ", $cadaUsuario[0], "\n";
    echo "Apellido: ", $cadaUsuario[1], "\n";
    echo "Teléfono: ", $cadaUsuario[2], "\n";
    echo " ============\n";
}

?>