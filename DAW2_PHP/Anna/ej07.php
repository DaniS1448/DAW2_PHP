<?php
/* Dada una l�nea de texto y un n�mero entre 1 y 6, generar una c�digo HTML que 
 * contenga dicha l�nea entre tags <hX> crecientes desde 1 hasta n y luego decreciendo 
 * hasta 1 de nuevo.
Ejemplo:
Introduce l�nea de texto: HOLA
Introduce n: 4
<h1>HOLA</h1>
<h2>HOLA</h2>
<h3>HOLA</h3>
<h4>HOLA</h4>
<h3>HOLA</h3>
<h2>HOLA</h2>
<h1>HOLA</h1> */
echo "Introduce l�nea de texto: ";
fscanf(STDIN, "%s\n",$texto);
echo "Introduce n: ";
fscanf(STDIN, "%s\n",$n);

for($i=0;$i<$n;$i++){
        $j=$i+1;
        echo "<h$j> $texto </h$j> \n";
        
}
for($n;1<$n;$n--){
    $a=$n-1;
    echo "<h$a> $texto </h$a> \n";
    
}
?>