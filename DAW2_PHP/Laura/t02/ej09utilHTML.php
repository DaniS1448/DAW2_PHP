<?php
function resaltar($texto) {
   return "<h1>$texto</h1>";
}

function pintarRadio($nombre, $arrayValueLabel, $seleccionado) {
    $texto = '';
    
    foreach ($arrayValueLabel as $aVL => $valor) {
        $texto .= ("<input type=\"radio\" name=\"$nombre\" id=\"$aVL\" value=\"$aVL\"" . ($aVL == $seleccionado ? ' checked="checked"' : '') . '>' . PHP_EOL);
        $texto .= ("<label for=\"$aVL\">$valor</label><br/>" . PHP_EOL);
    }
}
?>