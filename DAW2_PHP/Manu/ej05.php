<?php
/*Similar al ejercicio 3, dado un número ciclar entre las palabras “as”, “dos”, … “siete”, 
 * “sota”, “caballo” y “rey” tantas veces como diga tal número.*/
echo "Introduce n: ";
fscanf(STDIN,"%d\n",$num);

$baraja=["as","dos","tres","cuatro","cinco","seis","siete","sota","caballo","rey"];
$cont=0;

$contBarajaArray=sizeof($baraja);
for($num;$num>0;$num--){
    
        echo "$baraja[$cont] ";
        $cont++;
        if($cont>$contBarajaArray-1){
            $cont=0;
        }
    }
?>