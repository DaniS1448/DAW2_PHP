<?php
/* pintarRadio(‘aficion’,[‘D’=>’Deporte’, ‘C’=>’Cine’],’C’)

<input type="radio" name="aficion" value="D" id="D">
<label for="D">Deporte</label><br />
<input type="radio" name="aficion" value="C" id="C" checked=”checked”>
<label for="C">Cine</label><br /> */

    function pintarRadio($nombre, $arrayValueLabel, $seleccionado){
        $codigo="";
        
        foreach ($arrayValueLabel as $claveBoton => $valorBoton) {
            if ($seleccionado == $claveBoton) {
                $codigo = $codigo . "<input type=\"radio\" name=".$nombre." value=".$claveBoton." id=".$claveBoton." checked=\"checked\"><label for=".$claveBoton.">".$valorBoton."</label><br />";
            } else {
            $codigo = $codigo . "<input type=\"radio\" name=".$nombre." value=".$claveBoton." id=".$claveBoton."><label for=".$claveBoton.">".$valorBoton."</label><br />";
            }
        }
        return $codigo;
    }
    
    echo "<form>";
    echo pintarRadio("aficion", ["D"=>"Deporte", "C"=>"Cine"], "C");
    echo "<input type=\"submit\" value=\"Enviar\">";
    echo "</form>";
?>