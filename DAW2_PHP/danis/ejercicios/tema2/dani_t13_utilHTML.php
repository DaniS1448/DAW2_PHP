<?php


function pintarCheckboxes($nombre, $arrayValueLabel, $arraySeleccionados){
        $codigo="";
        
        foreach ($arrayValueLabel as $claveBoton => $valorBoton) {
            if(in_array($claveBoton, $arraySeleccionados)){
                $codigo = $codigo . "<input type=\"checkbox\" name=\"".$nombre."[]\" value=".$claveBoton." id=".$claveBoton." checked=\"checked\"><label for=".$claveBoton.">".$valorBoton."</label><br />";
            }else {
                $codigo = $codigo . "<input type=\"checkbox\" name=\"".$nombre."[]\" value=".$claveBoton." id=".$claveBoton."><label for=".$claveBoton.">".$valorBoton."</label><br />";
            }

        }
        return $codigo;
    }
    
    echo "<form>";
    echo pintarCheckboxes('deporte',['F'=>'Futbol', 'T'=>'Tenis', 'V'=>'Vela'], ['F', 'V']);
    echo "<input type=\"submit\" value=\"Enviar\">";
    echo "</form>";
?>