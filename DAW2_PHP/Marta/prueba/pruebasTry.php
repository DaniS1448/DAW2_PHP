<?php

$bomba= new Exception('super error');

$bomba2= new Exception('casi error');
try {
    
    //throw $bomba2;
    
} /*catch (Exception $e) {
    
    if ($e->getMessage() == 'super error') {
        echo "AQUI HAY UN PROBLEMA GRAVE";
    } else if ($e->getMessage() == 'casi error'){
        echo "NO TE PREOCUPES, TAMPOCO ES PARA TANTO";
    }
}*/

catch (Exception $e){
    
}

echo (7/0);

?>