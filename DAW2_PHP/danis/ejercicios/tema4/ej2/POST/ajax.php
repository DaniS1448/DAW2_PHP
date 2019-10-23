<?php

$esAjax = isset(
    $_SERVER['HTTP_X_REQUESTED_WITH']) ?
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' :
    false;
if ($esAjax) {
    $comunidad = isset($_POST['comunidad']) ? $_POST['comunidad'] : null;
    
    if ($comunidad != null) {
        include_once 'datos.php';
        
        echo "<select id=\"ciudad\" name=\"ciudad\">";
        foreach ($comunidades[$comunidad] as $k => $v){
            echo "<option>$v</option>";
        }
        echo "</select>";
    }
}
else {
    echo "SOLO EJECUCIONES AJAX";
}

?>