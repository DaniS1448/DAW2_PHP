<?php
/*Dada una línea de texto y un número entre 1 y 6, generar una código HTML que contenga 
dicha línea entre tags <hX> crecientes desde 1 hasta n y luego decreciendo hasta 1 de nuevo.*/

echo "Introduce línea de texto: ";
fscanf(STDIN,"%s\n",$texto);
echo "Introduce n: ";
fscanf(STDIN,"%d\n",$n);
while ($n<1 || $n>6){
echo "Introduce un n entre 1 y 6: ";
fscanf(STDIN,"%d\n",$n);
}
for($i=1;$i<=$n;$i++){
    echo "<h$i>$texto<h$i>\n";
}
for($n--;$n>=1;$n--){
    echo "<h$n>$texto<h$n>\n";
}
?>