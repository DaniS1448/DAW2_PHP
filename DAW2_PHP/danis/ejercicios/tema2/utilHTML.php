<?php

function pintarRadio($nombre, $arrayValueLabel, $seleccionado='')
{
    $codigo = "";

    foreach ($arrayValueLabel as $claveBoton => $valorBoton) {
        if ($seleccionado == $claveBoton) {
            $codigo = $codigo . "<input type=\"radio\" name=" . $nombre . " value=" . $claveBoton . " id=" . $claveBoton . " checked=\"checked\"><label for=" . $claveBoton . ">" . $valorBoton . "</label><br />";
        } else {
            $codigo = $codigo . "<input type=\"radio\" name=" . $nombre . " value=" . $claveBoton . " id=" . $claveBoton . "><label for=" . $claveBoton . ">" . $valorBoton . "</label><br />";
        }
    }
    return $codigo;
}

function pintarCheckboxes($nombre, $arrayValueLabel, $arraySeleccionados)
{
    $codigo = "";

    foreach ($arrayValueLabel as $claveBoton => $valorBoton) {
        if (in_array($claveBoton, $arraySeleccionados)) {
            $codigo = $codigo . "<input type=\"checkbox\" name=\"" . $nombre . "[]\" value=" . $claveBoton . " id=" . $claveBoton . " checked=\"checked\"><label for=" . $claveBoton . ">" . $valorBoton . "</label><br />";
        } else {
            $codigo = $codigo . "<input type=\"checkbox\" name=\"" . $nombre . "[]\" value=" . $claveBoton . " id=" . $claveBoton . "><label for=" . $claveBoton . ">" . $valorBoton . "</label><br />";
        }
    }
    return $codigo;
}

function pintarSelect($nombre, $etiquetas, $seleccionados, $tipo)
{
    $texto = '';
    $texto .= ('<label for="id' . $nombre . '">' . $nombre . '</label>' . PHP_EOL);
    $texto .= ('<select ' . ($tipo == 'multiple' ? 'multiple="multiple"' : '') . ' id="id' . $nombre . '" ' . 'name="' . $nombre . ($tipo == 'multiple' ? '[]' : '') . '">' . PHP_EOL);
    foreach ($etiquetas as $k => $v) {
        $texto .= ('<option ' . (in_array($k, $seleccionados) ? 'selected="selected"' : '') . ' value="' . $k . '">' . $v . '</option>' . PHP_EOL);
    }
    $texto .= ('</select>' . PHP_EOL);

    return $texto;
}

?>
