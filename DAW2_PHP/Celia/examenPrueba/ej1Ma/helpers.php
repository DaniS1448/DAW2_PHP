<?php

function conjugar($verbo){
    $cojugacion=substr($verbo, -2,strlen($verbo));
    $raiz = substr($verbo, 0,-2);
    if(strtolower($cojugacion)=='ar'){  
    $html = "<select>\n";
    $terminaciones = ['o','as','a','amos','aís','an'];
    foreach ( $terminaciones  as $terminacion) {
        $html .= "<option>{$raiz}{$terminacion}</option>\n";
    }
    $html .= "</select>\n";
    return $html;}
    elseif($cojugacion=='er'){
        $html = "<select>\n";
        $terminaciones = ['o','es','e','emos','eis','en'];
        foreach ( $terminaciones  as $terminacion) {
            $html .= "<option>{$raiz}{$terminacion}</option>\n";
        }
        $html .= "</select>\n";
        return $html;}
        elseif ($cojugacion=='ir'){
            $html = "<select>\n";
            $terminaciones = ['o','es','e','imos','is','en'];
            foreach ( $terminaciones  as $terminacion) {
                $html .= "<option>{$raiz}{$terminacion}</option>\n";
            }
            $html .= "</select>\n";
            return $html;
            
            
            
            
            
        }
        
        
        
        
        
    }

?>



