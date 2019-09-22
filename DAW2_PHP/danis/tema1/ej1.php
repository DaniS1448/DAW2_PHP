<?php
$numero = 1;
$max=0;
$min=0;
$comprobador=true;

while($numero != 0){
    echo "Introduce n: ";
    fscanf(STDIN, "%d0", $numero);
    if($comprobador){$min=$numero; $max=$numero; $comprobador=false;}
    //echo "ahora min vale $min\n";
    if($numero > $max && $numero!=0){
        $max = $numero;
    }
    if($numero < $min && $numero!=0){
        $min = $numero;
    }
    
}
echo "Máximo: $max\n";
echo "Mínimo: $min";
?>