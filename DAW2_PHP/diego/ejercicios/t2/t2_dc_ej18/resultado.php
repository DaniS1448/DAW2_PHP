<?php
$num=$_POST["numero"]; // recibimos 'numero' y lo guardamos en $num
$res=$num+2; // le sumamos 2 y lo guardamos en $res
echo <<< HTML
    <h1>Resultado final</h1>
    <h1>$num + 2 = $res</h1>
HTML;


?>