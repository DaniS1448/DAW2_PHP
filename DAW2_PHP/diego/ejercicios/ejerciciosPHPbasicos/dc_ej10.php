<?php
$arrayFormato = [
    "nombre" => [
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
    ],

    "romano" => [
        "I",
        "II",
        "III",
        "IV",
        "V",
        "VI",
        "VII",
        "VIII",
        "IX",
        "X"
    ]
];

echo "N: ";
fscanf(STDIN, "%d\n", $n);

while ($n < 1 || $n > 10) {
    echo "Error. Introduce un número que esté entre 1 y 10.\n";
    echo "\nN: ";
    fscanf(STDIN, "%d\n", $n);
}
echo "Formato (romano, nombre): ";
fscanf(STDIN, "%s\n", $f); // le doy a f el valor que luego utilizo en el bucle for




for ($i = 0; $i < $n; $i ++) {
    echo $arrayFormato[$f][$i], ","; // llamo al array, el valor, y el numero
}








?>