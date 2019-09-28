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
fscanf(STDIN, "%s\n", $formato); // le doy a f el valor que luego utilizo en el bucle for

// while (!array_key_exists($formato, $arrayFormato)){
while (! (in_array($formato, array_keys($arrayFormato)))) { 
    // si no se encuentra un array con esas caracteristicas
    echo "Dime un formato válido (romano, nombre): ";
    fscanf(STDIN, "%s\n", $formato);
}

for ($i = 0; $i < $n; $i ++) {
    echo $arrayFormato[$formato][$i], ","; // llamo al array, el valor, y el numero
}

?>