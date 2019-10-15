<?php

// Crear un fichero “utilHTML.php” que contenga funciones de utilidad
// para generar código HTML a partir de ciertos datos.
// Incluir en “utilHTML.php” una función resaltar($texto)
// que dado un texto devuelva el código HTML necesario para ver dicho texto entre marcas h1
function resaltar($texto)
{
    $cadena = "<h1>$texto</h1>";

    return $cadena;
}

function pintarRadios($nombre, $arrayValueLabel, $selecciona = null)
{
    $radios = "";
    foreach ($arrayValueLabel as $clave => $valor) {

        $check = $selecciona == $clave ? "checked=\"checked\"" : "";

        // if ($selecciona == $clave) {
        // $check = "checked=\"checked\"";
        // } else
        // $check = "";

        $radios .= <<<RADIOS
<input type="radio" name="$nombre" value="$clave" id="$clave" $check>
<label for="$clave">$valor</label><br/>
RADIOS;
    }

    return $radios;
}

function pintarCheckboxes($nombre, $arrayValueLabel, $seleccionados = null)
{
    $checkbox = "";
    foreach ($arrayValueLabel as $clave => $valor) {

        $check = in_array($clave, $seleccionados) ? "checked=\"checked\"" : "";

        $checkbox .= <<<CHECKBOX
<input type="checkbox" name="{$nombre}[]" value="$clave" id="$clave" $check>
<label for="$clave">$valor</label><br/>
CHECKBOX;
    }

    return $checkbox;
}

function pintarSelect($nombre, $arrayValueLabel, $multiple = null)
{
    $multi = 'multiple' == $multiple ? "multiple=\"multiple\"" : "";
    $corchetes = 'multiple' == $multiple ? "[]" : "";
    $select = "<select name=\"$nombre" . $corchetes . "\" $multi>";

    foreach ($arrayValueLabel as $clave => $valor) {

        $select .= <<<SELECT

    <option value="$valor">$valor</option> 

SELECT;
    }

    $select .= "</select>";
    
    return $select;
}

?>