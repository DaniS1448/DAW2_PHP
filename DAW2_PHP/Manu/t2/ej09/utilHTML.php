<?php
function resaltar($texto){
    $res="<h1>$texto</h1>";
    return $res;
}

function pintarRadio($nombre, $arrayValueLabel, $seleccionados=""){
    $res="";
    foreach ($arrayValueLabel as $e => $a){
        $check= $e==$seleccionados?"checked=\"checked\"":"";
        $res.= <<<HTML
            <input type="radio" name="$nombre" value="$e" id="$e" $check/>
            <label for="$e">$a</label><br/>    
HTML;
    }
    return $res;
}

function pintarCheckboxes($nombre, $arrayValueLabel,$seleccionados=""){
    $res="";
    foreach ($arrayValueLabel as $e => $a){
       // $check= $e==$seleccionados?"checked=\"checked\"":"";
      $check= in_array($e,$seleccionados)?"checked=\"checked\"":"";
        $res.= <<<HTML
            <input type="checkbox" name="{$nombre}[]" value="$e" id="$e" $check/>
            <label for="$e">$a</label><br/>
HTML;
    }
    return $res;
}


function pintarSelect($nombre,$arraySelect,$multiple=""){    
    $res="";
    $mult=$multiple=="multiple"?"multiple=\"multiple\"":"";
    $nombreMult=$multiple=="multiple"?"[]":"";
    $res.=<<<HTML
    <select name="{$nombre}$nombreMult" $mult>
HTML;
    foreach ($arraySelect as $e => $a){
        $res.= <<<HTML
            <option value="$e">$a</option>
HTML;
       
    }
    $res.="</select>";
        return $res;
    
    
}


