<!-- Dada una línea de texto y un número entre 1 y 6, -->
<!--  generar una código HTML que contenga dicha línea entre tags <hX> crecientes -->
<!--   desde 1 hasta n y luego decreciendo hasta 1 de nuevo. -->
<!-- 	Ejemplo: -->
<!-- Introduce línea de texto: HOLA -->
<!-- Introduce n: 4 -->
<!-- <h1>HOLA</h1> -->
<!-- <h2>HOLA</h2> -->
<!-- <h3>HOLA</h3> -->
<!-- <h4>HOLA</h4> -->
<!-- <h3>HOLA</h3> -->
<!-- <h2>HOLA</h2> -->
<!-- <h1>HOLA</h1> -->

<?php
echo "Introduce linea de texto: ";
fscanf(STDIN, "%s\n", $texto);
echo "Introduce n: ";
fscanf(STDIN, "%d\n", $n);

// while ($n > 6 || $n > 1) {
//     echo "Introduce un número entre 1 y 6";
//     fscanf(STDIN, "%d\n", $n);
// }
for ($i = 1; $i <= $n; $i ++) {
    echo "<h$i>$texto</h$i><br>\n";
}
for ($i=$n-1; $i >= 1; $i --) {
    echo "<h$i>$texto</h$i><br>\n";
}

?>
