<?php
/*Dado un n�mero �n�, dibujar l�neas desde n caracteres hasta un car�cter disminuyendo 
 * en un car�cter cada l�nea que se dibuje. Repetir el patr�n �+� �-� �.� en cada car�cter 
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