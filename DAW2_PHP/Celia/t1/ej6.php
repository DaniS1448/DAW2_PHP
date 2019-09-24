<?php
/* 6. Pedir por teclado nombres de personas y sus edades, hasta que se introduzca el
nombre “fin”. Mostrar a continuación el nombre de cada persona introducida y su edad
(entre paréntesis). NOTA: Utilizar arrays asociativos. ¿Qué ocurre si dos personas se
llaman igual? ¿Cómo podríamos ver la información anterior ordenada por nombre? ¿Y
por edad descendente? */
echo 'Nombre? ';
fscanf ( STDIN, "%s\n", $nombre );

while ( $nombre != 'fin' ) {
    echo "Edad de $nombre? ";
    fscanf ( STDIN, "%d\n", $edad );
    $persona [$nombre] = $edad;
    echo 'Nombre? ';
    fscanf ( STDIN, "%s\n", $nombre );
}


foreach ( $persona as $nombre => $edad ) {
    echo "$nombre($edad),";
}



/*  ksort($persona); //Para ordenar por nombre de persona
asort ( $persona ); //Para ordenar por edad */


?>