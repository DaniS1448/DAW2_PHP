<?php

    function pintarCheckboxes($nombre, $arrayValueLabel){
        $codigo="";
        
        foreach ($arrayValueLabel as $claveBoton => $valorBoton) {
            $codigo = $codigo . "<input type=\"checkbox\" name=\"".$nombre."[]\" value=".$claveBoton." id=".$claveBoton."><label for=".$claveBoton.">".$valorBoton."</label><br />";

        }
        return $codigo;
    }
    
    echo "<form>";
    echo pintarCheckboxes("aficion", ["D"=>"Deporte", "C"=>"Cine"]);
    echo "<input type=\"submit\" value=\"Enviar\">";
    echo "</form>";
?>