

<?php 
/*2. Dado un n�mero �n�, dibujar l�neas desde n caracteres hasta un car�cter disminuyendo
en un car�cter cada l�nea que se dibuje. Repetir el patr�n �+� �-� �.� en cada car�cter que
se imprima.*/
 function sigCaracter($c) {
    switch ($c) {
        case "+" :
            $sol = "-";
            break;
        case "-" :
            $sol = ".";
            break;
        case "." :
            $sol = "+";
            break;
    }
    return $sol;
} 

echo "Introduce n: \n";
fscanf ( STDIN, "%d\n", $n );

$c = "+";

for($i = $n; $i >= 1; $i --) {
    for($j = 1; $j <= $i; $j ++) {
        echo $c;
        $c = sigCaracter ( $c );
    }
    echo "\n";
}
    



?>












