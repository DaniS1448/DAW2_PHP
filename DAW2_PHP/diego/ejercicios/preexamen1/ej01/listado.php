<?php
$inf=$_GET['inf'];
$sup=$_GET['sup'];

$signos = [
    "Capricornio",
    "Acuario",
    "Piscis",
    "Aries",
    "Tauro",
    "Géminis",
    "Cáncer",
    "Leo",
    "Virgo",
    "Libra",
    "Escorpio",
    "Sagitario"
];

$meses = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
];

?>

<head>
</head>
<body>
	<form action="eleccion.php" method="get">
		<fieldset>
			<legend>Signos del zodiaco</legend>
<?php 

for ($i=$inf; $i<=$sup; $i++) {
    $checked=$inf;
    if ($checked==$i) { // si check tiene el mismo valor que i la primera vez (1) escribe checked
        echo "<input type=\"radio\" name=\"signo\" checked=\"checked\" value=\"{$signos[$i-1]}\">{$signos[$i-1]}<br />";
    } else { // la siguiente vez i no valdrá 1 por lo que saltará al else hasta que acabe
        echo "<input type=\"radio\" name=\"signo\" value=\"{$signos[$i-1]}\">{$signos[$i-1]}<br />";
    }
}
?>
		</fieldset>
		<fieldset>
			<legend>Meses del año</legend>
			<select name="mes"> 
<?php
// el select name sera el valor que recoja en la pantalla siguiente con el get
for ($i=$inf; $i<=$sup; $i++) {
    echo "<option value=\"{$meses[$i-1]}\">{$meses[$i-1]}</option>";
}

?>				
			</select>
		</fieldset>
		<input type="submit" value="Continuar">
	</form>
</body>
