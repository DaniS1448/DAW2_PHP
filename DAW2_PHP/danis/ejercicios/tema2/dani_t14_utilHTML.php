<?php


    function pintarSelect($nombre, $etiquetas, $seleccionados, $tipo) {
        $texto = '';
        $texto .= ('<label for="id' . $nombre . '">' . $nombre . '</label>' . PHP_EOL);
        $texto .= ('<select ' . ($tipo == 'multiple' ? 'multiple="multiple"' : '') . ' id="id' . $nombre . '" ' . 'name="' . $nombre . ($tipo == 'multiple' ? '[]' : '') . '">' . PHP_EOL);
        foreach ( $etiquetas as $k => $v ) {
            $texto .= ('<option ' . (in_array ( $k, $seleccionados ) ? 'selected="selected"' : '') . ' value="' . $k . '">' . $v . '</option>' . PHP_EOL);
        }
        $texto .= ('</select>' . PHP_EOL);
        
        return $texto;
    }
    
    echo "<form>";
    echo pintarSelect('deporteS', ['T'=>'Tenis','F'=>'Fútbol','B'=>'Baloncesto','P'=>'Petanca'],['T'],'simple');
    echo "<br><br><br>";
    echo pintarSelect('deporteM', ['T'=>'Tenis','F'=>'Fútbol','B'=>'Baloncesto','P'=>'Petanca'],['T','B'],'multiple');
    echo "<input type=\"submit\" value=\"Enviar\">";
    echo "</form>";
?>



<!-- $texto .= ('<select ' 
 . ($tipo == 'multiple' ? 'multiple="multiple"' : '')
 . ' id="id' . $nombre . '" ' . 'name="' . $nombre 
 . ($tipo == 'multiple' ? '[]' : '') . '">' 
 . PHP_EOL); -->
