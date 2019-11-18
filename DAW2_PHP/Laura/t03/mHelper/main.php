<?php
require_once 'helper.php';
$nombres = ['Pepe', 'Juan', 'Ana'];
$html ='';

foreach ($nombres as $nombre) {
    $html.=saludar($nombre);
}

$html.='<h3>FIN<h3>';

echo $html;
?>