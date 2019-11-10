<?php
function cartaAleatoria(){
    $barajaPalos = [
        'de oros',
        'de copas',
        'de espadas',
        'de bastos'
    ];
    
    $barajaValor = [
        ['As', 1],
        ['Dos', 2],
        ['Tres', 3],
        ['Cuatro', 4],
        ['Cinco', 5],
        ['Seis', 6],
        ['Siete', 7],
        ['Sota', 0.5],
        ['Caballo', 0.5],
        ['Rey', 0.5]
    ];
    
    
    $bucle=false;
    do{
        $cartaRand=rand(0,(sizeof($barajaValor)-1));
        $paloRand=rand(0,(sizeof($barajaPalos)-1));
        $carta=$barajaValor[$cartaRand][0]." ".$barajaPalos[$paloRand];
        $puntos=$barajaValor[$cartaRand][1];
        if (in_array($carta,$_SESSION['cartas']['carta'])){
            $bucle=true;
        }
        
    }while($bucle);
    $cartaPuntos=[$carta,$puntos];
    return $cartaPuntos;
    
}