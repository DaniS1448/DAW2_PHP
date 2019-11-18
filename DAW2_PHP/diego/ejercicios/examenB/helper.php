<?php 
function conjugar ($verbo) {
    // recogemos el verbo y le doy el valor desde la posicion 0 y le quito 2
    $v=substr($verbo, 0, -2);
    // creamos una variable de string con apertura de etiqueta select.
    // dependiendo de la conjugacion le añadiremos un valor u otro.
    $datos="<select>";
    // si las dos ultimas cifras del verbo coinciden con ar
    if (substr($verbo, -2)=='ar') {   
        $terminaciones=['o', 'as', 'a', 'amos', 'ais', 'an'];
        for ($i=0; $i<6; $i++) {
            //añadimos al string datos las nuevas terminaciones del verbo y colocamos entre options
            $datos.="<option>$v$terminaciones[$i]</option>";
            
        } 
    // si las dos ultimas cifras del verbo coinciden con er
    }else if (substr($verbo, -2)=='er'){ 
        $terminaciones=['o', 'es', 'e', 'emos', 'eis', 'en'];
        for ($i=0; $i<6; $i++) {
            //añadimos al string datos las nuevas terminaciones del verbo y colocamos entre options
            $datos.="<option>$v$terminaciones[$i]</option>";
            
        }
        // si las dos ultimas cifras del verbo coinciden con ir
    }else if (substr($verbo, -2)=='ir') {       
        $terminaciones=['o', 'es', 'e', 'imos', 'is', 'en'];
        for ($i=0; $i<6; $i++) {
            //añadimos al string datos las nuevas terminaciones del verbo y colocamos entre options
            $datos.="<option>$v$terminaciones[$i]</option>";
            
        }       
    }
    // a la cadena datos añadimos un cierre de etiqueta select
    $datos.="</select>";    
    return $datos; 
}
?>