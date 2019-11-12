<?php 
require_once 'Carta.php';
function inicializarMazo() {
    $mazo = [];
    $palos = ["oros", "copas", "espadas", "bastos"];
    $figuras = [
        "As",
        "Dos",
        "Tres",
        "Cuatro",
        "Cinco",
        "Seis",
        "Siete",
       "Sota",
        "Caballo",
        "Rey",
    ];
    
    foreach ($palos as $palo) {
        foreach ($figuras as  $v => $figura ) {
            $nombre = $figura.' de '.$palo;
            $valor = ($v<7?$v+1:0.5);
            $img = 'img/'.substr($palo, 0,1).($v+1).'.jpg';
            $carta = new Carta ($nombre, $valor, $img);
            $mazo [] = $carta;
        }
    }
    return $mazo;
}
 //====================================================   
//     $mazo = inicializarMazo();
//     print_r($mazo); // TODO DEBUG

?>