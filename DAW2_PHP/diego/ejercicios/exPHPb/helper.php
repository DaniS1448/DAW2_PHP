<?php
function conjugar($verbo){
    $v=substr($verbo,0,-2);
    $datos="<select>";
    if(substr($verbo,-2)=='ar'){
        
        $terminaciones=["o","as","a","amos","ais","an"];
        for($i=0;$i<6;$i++){
            $datos.="<option>".$v.$terminaciones[$i]."</option>";
        }
        
    }elseif(substr($verbo,-2)=='er'){
        
        $terminaciones=["o","es","e","emos","eis","en"];
        for($i=0;$i<6;$i++){
            $datos.="<option>".$v.$terminaciones[$i]."</option>";
        }
        
    }elseif(substr($verbo,-2)=='ir'){
        
        $terminaciones=["o","es","e","imos","is","en"];
        for($i=0;$i<6;$i++){
            $datos.="<option>".$v.$terminaciones[$i]."</option>";
        }
        
    }
    $datos.="</select>";
    return $datos;
}
?>