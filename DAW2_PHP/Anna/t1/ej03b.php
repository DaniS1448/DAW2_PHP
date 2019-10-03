<?php
echo "Introduce n: ";
fscanf(STDIN, "%d\n",$n);
echo "Introduce p: ";
fscanf(STDIN, "%d\n",$p);

for($j=0;($j<($n*$p))!=0;$j++){
    
    //for($i=0;$i<$p;$i++) {
        
        echo $j%$p." ";
        
    //}
}
?>