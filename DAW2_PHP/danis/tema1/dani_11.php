<?php

function estructuraUsuario($c) {
    switch ($c) {
        case "Nombre: ": $c = "Apellido: "; break;
        case "Apellido: ": $c = "Teléfono: "; break;
        case "Teléfono: ": $c = "Nombre: "; break;
    }
    
    return $c;
}

$cadena = "Alberto:Garay:913334455//Ana:Garcia:914445566";
$usuarios=[];
$estructura="Nombre: ";
foreach (explode('//', $cadena) as $divUsuario){
    array_push($usuarios, explode(':', $divUsuario));
}

foreach ($usuarios as $usuario){
    foreach ($usuario as $cadaUsuario){
        echo $estructura, $cadaUsuario, "\n";
        $estructura = estructuraUsuario($estructura);
    }
    echo "============\n";
}

?>