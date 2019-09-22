<?php
$n=0;
echo "Introduce n: ";
fscanf(STDIN, "%d\n", $n);
$c1 = '+'; $c2 = '-'; $c3 = '.';
$i = 1;
while($n > 0) {
    
    if($i <= $n) {
        echo $c1; $i++;
        if($i > $n){echo "\n"; $i=1; $n--;}
    }
    if($i <= $n) {
        echo $c2; $i++;
        if($i > $n){echo "\n"; $i=1; $n--;}
    }
    if($i <= $n) {
        echo $c3; $i++;
        if($i > $n){echo "\n"; $i=1; $n--;}
    }
}
?>