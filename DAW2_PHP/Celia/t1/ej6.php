<?php
/* 6. Pedir por teclado nombres de personas y sus edades, hasta que se introduzca el
nombre �fin�. Mostrar a continuaci�n el nombre de cada persona introducida y su edad
(entre par�ntesis). NOTA: Utilizar arrays asociativos. �Qu� ocurre si dos personas se
llaman igual? �C�mo podr�amos ver la informaci�n anterior ordenada por nombre? �Y
por edad descendente? */
echo 'Nombre? ';
fscanf ( STDIN, "%s\n", $nombre );

while ( $nombre != 'fin' ) {
    echo "Edad de $nombre? ";
    fscanf ( STDIN, "%d\n", $edad );
    $aficion [$nombre] = $edad;
    echo 'Nombre? ';
    fscanf ( STDIN, "%s\n", $nombre );
}


foreach ( $aficion as $nombre => $edad ) {
    echo "$nombre($edad),";
}



/*  ksort($persona); //Para ordenar por nombre de persona
asort ( $persona ); //Para ordenar por edad */


?>