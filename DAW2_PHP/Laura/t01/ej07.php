<?php

do {
    echo "Escribe un número entre 1 y 6: ";
    fscanf(STDIN, "%d\n", $n);
} while ($n > 6);

//Recorrido de todas las etiquetas <Hx>, e incrementa los numeritos hasta lo que tu le digas  
for ($i = 1; $i <= $n; $i ++) {
    echo "<h$i>HOLA</h$i>\n";
}
//Recorrido de todas las etiquetas <Hx>, e decrementa los numeritos hasta lo que tu le digas  
for ($j = $n - 1; $j >= 1; $j --) {
    echo "<h$j>HOLA</h$j>\n";
}


?>