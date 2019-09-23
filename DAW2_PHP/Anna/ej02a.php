<?php
echo "Introduce n: ";
fscanf(STDIN, "%d\n",$num);
$fila=$num;
$patron=["+","-","."];
$contador=0;

for($num;$num>0;$num--) {
    for($fila;$fila>0;$fila--) {
        
        echo "$patron[$contador]";
        $contador++;
        if($contador>2){
            $contador=0;
        }
    }
    $fila=$num-1;
    echo PHP_EOL;
}
?>
