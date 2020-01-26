<?php
$nombre = "Alfred";

$comprobador = isset($nombre)?$nombre:null;

if ($comprobador != null) {
    echo "Mi nombre es: ". $comprobador;
} else {
    echo "No existe ningún nombre";
}



?>