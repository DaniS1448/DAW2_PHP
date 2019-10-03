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

<input type="radio" name=$nombre value=$value id=$value checked=”checked”>
<label for=$value>$arrayValueLabel[$value]</label><br />
HTML;
        }
        else{
            $sol.=<<<HTML

<input type="radio" name=$nombre value=$value id=$value>
<label for=$value>$arrayValueLabel[$value]</label><br />
HTML;
        }
    $i++;}
return $sol;
}

?>