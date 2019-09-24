

<?php 
/*2. Dado un número “n”, dibujar líneas desde n caracteres hasta un carácter disminuyendo
en un carácter cada línea que se dibuje. Repetir el patrón “+” “-” “.” en cada carácter que
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












