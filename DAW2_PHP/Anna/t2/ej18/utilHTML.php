<?php
function preguntarNumero(){
    echo <<<HTML
<form name="f1" action="ej18.php" method="get">
	Escribe un número e 1 a 15:
	<input type="text" name="numero" value="10" />
	<br />
<input type="submit" name="Confirmar" value="Confirmar"/>
</form>
HTML;
}

function pintarRadio($nombre="numeros", $numero="15"){
    if($numero>15||$numero<1) $numero=15;
    $numeros=['Uno','Dos','Tres','Cuatro','Cinco','Seis','Siete','Ocho','Nueve','Diez','Once','Doce','Trece','Catorse','Quince'];
    $sol='<form name="f2" action="ej18.php"> Selecciona una opcion: </br>';
    for($i=0;$i<$numero;$i++){
            $sol.=<<<HTML
<input type="radio" name="$nombre" value="$i" id="$i">
<label for="$i">$numeros[$i]</label><br />

HTML;
}
$sol.='<br />
<input type="submit" name="enviar" value="Confirmar"/>
</form>';
return $sol;
}
?>