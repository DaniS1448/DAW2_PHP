<?php
/* 
echo 'Introduce n: ';
fscanf(STDIN,"%d\n", $n);


$cartas =["as",  "dos", "tres", "cuatro", "cinco", "seis", "siete", "sota", "caballo", "rey"];
for($n=0; 0<=$n; $n++) {
    for($j=1; $j<=sizeof($cartas); $j++){
        if(($j % 10)==0) {
            $j=0;
            
        }
        echo $cartas[$j];
}
} */

$cartas =["as",  "dos", "tres", "cuatro", "cinco", "seis", "siete", "sota", "caballo", "rey"];

echo 'Introduce n: ';
fscanf(STDIN,"%d\n", $n);

for ($i = 0; $i < $n; $i++) {
    echo $cartas[$i%10]. " ";
}

?>