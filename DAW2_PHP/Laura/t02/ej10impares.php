<?php 
include 'ej09utilHTML.php';
for ($i = 1; $i <= 50; $i++) {
   //Sacamos los numeros pares 
    if ($i%2 == 0) {
        echo $i;
    }
    //si no, los impares resaltados 
    else {
      echo resaltar($i);
    }
}
echo "<br/>".PHP_EOL;
?>