<?php

function pintarRadio($nombre, $etiquetas, $seleccionado) {
    $texto = '';
    
    foreach ( $etiquetas as $k => $v ) {
        $texto .= ("<input type=\"radio\" name=\"$nombre\" id=\"$k\" value=\"$v\"" . ($k == $seleccionado ? ' checked="checked"' : '') . '>' . PHP_EOL);
        $texto .= ("<label for=\"$k\">$v</label><br/>" . PHP_EOL);
    }
    
    return $texto;
}

function pintarSelect($nombre, $etiquetas, $seleccionados, $tipo) {
    $texto = '';
    $texto .= ('<label for="id' . $nombre . '">' . $nombre . '</label>' . PHP_EOL);
    $texto .= ('<select ' . ($tipo == 'multiple' ? 'multiple="multiple"' : '') . ' id="id' . $nombre . '" ' . 'name="' . $nombre . ($tipo == 'multiple' ? '[]' : '') . '">' . PHP_EOL);
    foreach ( $etiquetas as $k => $v ) {
        $texto .= ('<option ' . (in_array ( $k, $seleccionados ) ? 'selected="selected"' : '') . ' value="' . $v . '">' . $v . '</option>' . PHP_EOL);
    }
    $texto .= ('</select>' . PHP_EOL);
    
    return $texto;
}

$listaZodiaco=['Capricornio', 'Acuario', 'Piscis', 'Aries', 'Tauro', 'Géminis', 'Cáncer', 'Leo', 'Virgo', 'Libra', 'Escorpio', 'Sagitario'];
$listaMeses=['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

$cinferior = isset($_POST['cinferior'])?$_POST['cinferior']:null;
$csuperior = isset($_POST['csuperior'])?$_POST['csuperior']:null;

if ($cinferior != null && $csuperior != null) {
    if (($cinferior>0 && $cinferior <13) && ($csuperior>0 && $csuperior <13)) {
        if ($cinferior < $csuperior) {
            $etiquetasZodiaco = [];
            for ($i = ($cinferior-1); $i < $csuperior; $i++) {
                array_push($etiquetasZodiaco, $listaZodiaco[$i]);
            }
            echo "<form action='resultado.php' method='get'";
            echo "<fieldset><legend>Signos del zodiaco</legend>";
            echo pintarRadio("zod", $etiquetasZodiaco, $listaZodiaco[$cinferior-1]);
            echo "</fieldset>";
            
            $etiquetasMeses = [];
            for ($i = ($cinferior-1); $i < $csuperior; $i++) {
                array_push($etiquetasMeses, $listaMeses[$i]);
            }
            echo "<fieldset><legend>Meses del año</legend>";
            echo pintarSelect('mes', $etiquetasMeses, [$listaMeses[$cinferior-1]], 'simple');
            echo "</fieldset>";
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
            

        } else {
            echo "Cutoa inferior debe ser menor que cuota superior";
        }
    } else {
        echo "Los parámetros deben estar entre 1 y 12";
    }
} else {
    echo "Debo recibir parámetros";
}

?>