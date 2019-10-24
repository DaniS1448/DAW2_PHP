<?php

$comunidad = isset($_GET['comunidad']) ? $_GET['comunidad'] : null;

if ($comunidad != null) {
    include_once 'datos.php';
    
    echo "<select id=\"ciudad\" name=\"ciudad\">";
    foreach ($comunidades[$comunidad] as $k => $v){
        echo "<option>$v</option>";
    }
    echo "</select>";
}
?>