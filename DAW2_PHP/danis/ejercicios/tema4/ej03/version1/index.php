<?php
$BDetiquetas = [
    "es" => [
        "Palabra",
        "Traducción",
        "Enviar"
    ],
    "gb" => [
        "Word",
        "Translation",
        "Send"
    ],
    "fr" => [
        "Mot",
        "Traduction",
        "Envoyer"
    ]
];

$pais = isset($_GET['pais'])?$_GET['pais']:'es';

?>
<form id="miFormulario"></form>

<label for="paisES"><img src="../banderas/es.png" width="27px" height="18px"></label>
<input form="miFormulario" type="radio" name="pais" id="paisES" value="es" <?= $pais == 'es'?'checked="checked"':'' ?>/>

<label for="paisFR"><img src="../banderas/fr.png" width="27px" height="18px"></label>
<input form="miFormulario" type="radio" name="pais" id="paisFR" value="fr" <?= $pais == 'fr'?'checked="checked"':'' ?>/>

<label for="paisGB"><img src="../banderas/gb.png" width="27px" height="18px"></label>
<input form="miFormulario" type="radio" name="pais" id="paisGB" value="gb" <?= $pais == 'gb'?'checked="checked"':'' ?>/>

<hr/>

<table>
<tr>
<td><b><?= $BDetiquetas[$pais][0] ?></b></td> <td><input form="miFormulario" type="text" /></td>
</tr>
<tr>
<td><b><?= $BDetiquetas[$pais][1] ?></b></td> <td><input form="miFormulario" type="text" /></td>
</tr>
<tr>
<td><input form="miFormulario" type="submit" id="id" value="<?= $BDetiquetas[$pais][2] ?>" style="width:100%"/></td>
</tr>

</table>