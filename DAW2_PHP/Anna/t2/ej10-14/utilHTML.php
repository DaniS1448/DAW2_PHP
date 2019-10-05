<?php
function resaltar($texto) {
    return "<h1>$texto</h1>";
}
/* pintarRadio(‘aficion’,[‘D’=>’Deporte’, ‘C’=>’Cine’],’C’)
<input type="radio" name="aficion" value="D" id="D">
<label for="D">Deporte</label><br />
<input type="radio" name="aficion" value="C" id="C" checked=”checked”>
<label for="C">Cine</label><br /> */
function pintarRadio($nombre, $arrayValueLabel, $seleccionado){
    $sol='';
    $keys=array_keys($arrayValueLabel);
    $i=0;
    foreach ($keys as $value){
        if($keys[$i]==$seleccionado){
        $sol.=<<<HTML

<input type="radio" name="$nombre" value="$value" id="$value" checked="checked">
<label for="$value">$arrayValueLabel[$value]</label><br />
HTML;
        }
        else{
            $sol.=<<<HTML

<input type="radio" name="$nombre" value="$value" id="$value">
<label for="$value">$arrayValueLabel[$value]</label><br />
HTML;
        }
    $i++;}
return $sol;
}
/*	P.ej. la llamada pintarCheckboxes(‘aficion’,[‘D’=>’Deporte’, ‘C’=>’Cine’]) 
 * devolvería el siguiente código HTML.
<input type="checkbox" name="aficion[]" value="D" id="D">
<label for="D">Deporte</label><br />
<input type="checkbox" name="aficion[]" value="C" id="C">
<label for="C">Cine</label><br />
*/
function pintarCheckboxes($nombre, $arrayValueLabel){
    $sol='';
    $nombreArray=$nombre."[]";
    $keys=array_keys($arrayValueLabel);

    foreach ($keys as $value){
        
            $sol.=<<<HTML
<input type="checkbox" name="$nombreArray" value="$value" id="$value">
<label for="$value">$arrayValueLabel[$value]</label><br />
HTML;
        }
        return $sol;
}

function pintarCheckboxesSel($nombre, $arrayValueLabel,$seleccionados){
    $sol='';
    $nombreArray=$nombre."[]";
    $keys=array_keys($arrayValueLabel);
    $i=0;
    foreach ($keys as $value){
        
        if(in_array($keys[$i],$seleccionados)){
           
        $sol.=<<<HTML
<input type="checkbox" name="$nombreArray" value="$value" id="$value" checked="checked" multiple="multiple">
<label for="$value">$arrayValueLabel[$value]</label><br />
HTML;
        }
        else {
            $sol.=<<<HTML
<input type="checkbox" name="$nombreArray" value="$value" id="$value" multiple="multiple">
<label for="$value">$arrayValueLabel[$value]</label><br />
HTML;
        }
            $i++;
    }
    return $sol;
}
//------------------------------------------------
function pintarSelect($nombre, $arrayValueLabel,$seleccionados){
    
    $nombreArray=$nombre."[]";
    $sol=<<<HTML
<label for="$nombre">$nombre</label>
HTML;
    $i=0;
    $sol.=sizeof($seleccionados)==1?<<<HTML
<select id="$nombre" name="$nombreArray" >
HTML
    :<<<HTML
<select id="$nombre" name="$nombreArray" multiple="multiple" >
HTML;
    
    foreach ($arrayValueLabel as $value){
        
        if(in_array($value,$seleccionados)){
            
            $sol.=<<<HTML
<option value="$value" selected="selected" >$value</option>
HTML;
        }
        else {
            $sol.=<<<HTML
<option value="$value" >$value</option>
HTML;
        }
        $i++;
    }
    $sol.="</select> ";
    return $sol;
}
?>