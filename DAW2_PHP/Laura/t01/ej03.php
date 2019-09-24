<?php

/* echo "Introduce n: ";
fscanf(STDIN,"%d\n", $n);
echo "Introduce p: ";
fscanf(STDIN,"%d\n", $p);



//Número de agrupaciones 
for ($i=0; $i < $n; $i++) {
    //Numeros n veces 
    for ($j=0; $j<$p; $j++) {
        echo $j. ' ';
    }

} 

*/


//Utilizando mode

echo "Introduce n: ";
fscanf(STDIN,"%d\n", $n);
echo "Introduce p: ";
fscanf(STDIN,"%d\n", $p);

for ($i = 0; $i < ($n * $p); $i++) {
    echo $i%$p.' ';
}




?> 