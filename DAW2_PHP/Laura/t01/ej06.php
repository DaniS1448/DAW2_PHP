<?php

echo 'Nombre? ';
fscanf ( STDIN, "%s\n", $nombre );

while ( $nombre != 'fin' ) {
    echo "Edad de $nombre? ";
    fscanf ( STDIN, "%d\n", $edad );
    $persona [$nombre] = $edad;     //Array asociativo
    echo 'Nombre? ';
    fscanf ( STDIN, "%s\n", $nombre );
}

foreach ( $persona as $nombre => $edad ) {
    echo "$nombre($edad),";
}

?>