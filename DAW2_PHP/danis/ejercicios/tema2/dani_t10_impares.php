<?php
include_once("dani_t09_utilHTML.php");

for ($i = 0; $i <= 50; $i++) {
    
    if ($i % 2 == 0) {
        echo $i.PHP_EOL;
    } else {
        echo resaltar($i).PHP_EOL;
    }
}
?>