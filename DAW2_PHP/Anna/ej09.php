<?php
/*
 * Preguntar por teclado un n�mero n (del 1 al 10), y a continuaci�n qu� formato se requiere,
 * Si se indica �nombre�, saldr�n los nombres de los n�meros del 1..N
 * (uno, dos, tres, cuatro, �), si se indica �romano�, saldr�n los n�meros del 1..N
 * en formato romano (i, ii, iii, iv, �)
 * Dise�ar el programa para que s�lo tenga un bucle
 * (y no tenga sentencias �if� ni �switch�), de manera que se puedan a�adir
 * nuevos formatos de n�meros en el futuro, sin cambiar casi el c�digo.
 * Ejemplo (ejecuci�n 1):
 * N: 7
 * Formato: romano
 * i, ii, iii, iv, v, vi, vii
 *
 * Ejemplo (ejecuci�n 2):
 * N: 5
 * Formato: nombre
 * uno, dos, tres, cuatro, cinco
 */
echo "Introduce N: ";
fscanf(STDIN, "%d\n", $n);
echo "Elige formato: ";
fscanf(STDIN, "%s\n", $f);
// ---------------------------------------
$nom = [
    "uno",
    "dos",
    "tres",
    "cuatro",
    "cinco",
    "seis",
    "siete",
    "ocho",
    "nueve",
    "diez"
];
$rom = [
    "i",
    "ii",
    "iii",
    "iv",
    "v",
    "vi",
    "vii",
    "viii",
    "ix",
    "x"
];
$a = [
    "nombre" => $nom,
    "romano" => $rom
];

for ($i = 0; $i < $n; $i ++) {
    // echo $a[$f][$i].",";
    echo ($i == $n - 1) ? $a[$f][$i] : $a[$f][$i] . ",";
}

?>