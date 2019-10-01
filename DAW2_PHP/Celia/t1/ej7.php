<?php
/* 7. Dada una línea de texto y un número entre 1 y 6, generar una código HTML que
contenga dicha línea entre tags <hX> crecientes desde 1 hasta n y luego decreciendo
hasta 1 de nuevo. */


echo "Introduce texto: ";
fscanf ( STDIN, "%s\n", $texto );

echo "Introduce numero del 1 al 6: ";
fscanf ( STDIN, "%d\n", $n );



 for($i=1;$i<=$n;$i++){
    
     echo "<h$i>" . $texto." </h$i> \n";
    
} 
echo "\n";
  for($i = $n; $i >= 1; $i --) {
      
      
      echo "<h$i>" . $texto." </h$i> \n";
  }
     
  
  
  
  

?>





