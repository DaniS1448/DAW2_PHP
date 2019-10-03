<?php
/*Dado un número “n”, dibujar líneas desde n caracteres hasta un carácter disminuyendo 
 * en un carácter cada línea que se dibuje. Repetir el patrón “+” “-” “.” en cada carácter 
 * que se imprima.*/
echo "Introduce n: ";
fscanf(STDIN,"%d\n",$num);
$linea=$num;
$patron=["+","-","."];
$cont=0;
for($num;$num>0;$num--){
    for($linea;$linea>0;$linea--){
        echo "$patron[$cont]";
        $cont++;
        if($cont>2){
            $cont=0;
        }
    }
    $linea=$num-1;
    echo "\n";
}
?>