<?php
/*Dada una l�nea de texto y un n�mero entre 1 y 6, generar una c�digo HTML que contenga 
dicha l�nea entre tags <hX> crecientes desde 1 hasta n y luego decreciendo hasta 1 de nuevo.*/

echo "Introduce l�nea de texto: ";
fscanf(STDIN,"%s\n",$texto);
echo "Introduce n: ";
fscanf(STDIN,"%d\n",$n);
// while ($n<1 || $n>6){
// echo "Introduce un n entre 1 y 6: ";
// fscanf(STDIN,"%d\n",$n);
// }
for($i=1;$i<=$n;$i++){
    echo "<h$i>$texto<h$i>\n";
}
for($i=$n-1;$i>=1;$i--){
    echo "<h$i>$texto<h$i>\n";
}
?>